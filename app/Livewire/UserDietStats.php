<?php

namespace App\Livewire;

use App\Models\RecipeExecution;
use Livewire\Component;

class UserDietStats extends Component
{
    public $timePeriod = 7;

    public function render()
    {
        $endDate = date('Y-m-d H:i:s');
        $startDate = date('Y-m-d H:i:s', strtotime("-{$this->timePeriod} days"));

        $calories = RecipeExecution::where('user_id', auth()->id())
            ->whereBetween('created_at', [$startDate, $endDate])
            ->with('recipe.ingredients')
            ->get()
            ->sum(function ($execution) {
                return $execution->recipe->ingredients->sum(function ($ingredient) {
                    return $ingredient->calories * $ingredient->pivot->quantity;
                });
            });

        return view('livewire.user-diet-stats', compact('calories'));
    }
}
