<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\Recipe;
use App\Models\UserIngredient;
use Illuminate\Support\Facades\Auth;

class RecipesList extends Component
{
    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $diet = '';

    #[Url(history: true)]
    public $time = '';

    public $showOnlyAvailable = false;

    public function render()
    {
        // Pobierz ID składników i ich ilość dla zalogowanego użytkownika
        $userIngredients = UserIngredient::where('user_id', Auth::id())
            ->select('ingredient_id', 'quantity')
            ->get()
            ->keyBy('ingredient_id')
            ->toArray();

        // Pobierz wszystkie przepisy
        $allRecipes = Recipe::with('ingredients')
            ->search($this->search)
            ->when($this->diet !== '', function($query){
                $query->where('diet', $this->diet);
            })
            ->when($this->time !== '', function($query){
                $query->where('time', $this->time);
            })
            ->get();
        $availableRecipes = collect();

        foreach ($allRecipes as $recipe) {
            $isAvailable = true;

            foreach ($recipe->ingredients as $ingredient) {
                $requiredQuantity = $ingredient->pivot->quantity;
                $availableQuantity = $userIngredients[$ingredient->id]['quantity'] ?? 0;

                // Sprawdź czy użytkownik ma składnik oraz czy ilość jest wystarczająca
                if (!array_key_exists($ingredient->id, $userIngredients) || $availableQuantity < $requiredQuantity) {
                    $isAvailable = false;
                    break;
                }
            }

            if ($isAvailable || !$this->showOnlyAvailable) {
                $availableRecipes->push($recipe);
            }
        }

        return view('livewire.recipes-list', [
            'recipes' => $availableRecipes,
        ]);
    }


    public function toggleShowOnlyAvailable()
    {
        $this->showOnlyAvailable = !$this->showOnlyAvailable;
    }
}
