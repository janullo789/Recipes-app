<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class RecipesTable extends Component
{
    use WithPagination;

    public $perPage = 5;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $diet = '';

    #[Url(history: true)]
    public $time = '';

    #[Url(history: true)]
    public $sortBy = 'name';

    #[Url(history: true)]
    public $sortDir = 'ASC';

    public function setSortBy($sortByField)
    {
        if($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? "DESC" : "ASC";
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    public function delete(Recipe $recipe)
    {
        try {
            $recipe->ingredients()->detach();
            $recipe->delete();
            return response()->json([
                'status' => 'success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error occured!'
            ])->setStatusCode(500);
        }
    }

    public function render()
    {
        return view('livewire.recipes-table', [
            'recipes' => Recipe::with('ingredients')
                ->search($this->search)
                ->when($this->diet !== '', function($query){
                    $query->where('diet', $this->diet);
                })
                ->when($this->time !== '', function($query){
                    $query->where('time', $this->time);
                })
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perPage)
        ]);
    }
}
