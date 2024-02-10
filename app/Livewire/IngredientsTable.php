<?php

namespace App\Livewire;

use App\Models\Ingredient;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class IngredientsTable extends Component
{
    use WithPagination;

    public $perPage = 10;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $category= '';

    #[Url(history: true)]
    public $sortBy = 'name';

    #[Url(history: true)]
    public $sortDir = 'ASC';

    /**
     * @param $sortByField
     * @return void
     */
    public function setSortBy($sortByField): void
    {
        if($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? "DESC" : "ASC";
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    /**
     * @param Ingredient $ingredient
     * @return void
     */
    public function delete(Ingredient $ingredient): void
    {
        $ingredient->delete();
    }

    public function render(): View
    {
        return view('livewire.ingredients-table', [
            'categories' => Ingredient::distinct('category')->pluck('category'),
            'ingredients' => Ingredient::search($this->search)
                ->when($this->category !== '', function($query){
                    $query->where('category', $this->category);
                })
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perPage)
        ]);
    }
}
