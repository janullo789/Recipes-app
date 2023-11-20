<?php

namespace App\Livewire;

use App\Models\RecipeExecution;
use Exception;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class RecipesHistory extends Component
{
    use WithPagination;

    public $perPage = 5;

    #[Url(history: true)]
    public $sortBy = 'created_at';

    #[Url(history: true)]
    public $sortDir = 'DESC';

    public function setSortBy($sortByField): void
    {
        if($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? "DESC" : "ASC";
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    public function delete(RecipeExecution $execution)
    {
        try {
            $execution->delete();
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

    public function render(): View
    {
        return view('livewire.recipes-history', [
            'userRecipes' => RecipeExecution::with('recipe')
                ->with('recipe')
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perPage)
        ]);
    }
}
