<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recipe;
use App\Models\UserIngredient;
use Illuminate\Support\Facades\Auth;

class RecipeList extends Component
{
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
        $allRecipes = Recipe::with('ingredients')->get();
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

        return view('livewire.recipe-list', ['recipes' => $availableRecipes]);
    }


    public function toggleShowOnlyAvailable()
    {
        $this->showOnlyAvailable = !$this->showOnlyAvailable;
    }
}
