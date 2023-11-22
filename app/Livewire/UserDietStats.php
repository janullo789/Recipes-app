<?php

namespace App\Livewire;

use App\Models\RecipeExecution;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Exception;
use Illuminate\Contracts\View\View;

class UserDietStats extends Component
{
    use WithPagination;

    public $calorieData;
    public $perPage = 5;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';
    public $selectedWeek = null;

    public function mount()
    {
        $this->calorieData = $this->getCalorieDataForRecentWeeks();
    }

    private function getCalorieDataForRecentWeeks()
    {
        $currentWeek = Carbon::now()->weekOfYear;
        $year = date('Y');
        $caloriesPerWeek = [];
        $dateLabels = [];

        for ($week = $currentWeek; $week > $currentWeek - 10; $week--) {
            $weekOfYear = $week > 0 ? $week : 52 + $week;
            $startDate = Carbon::now()->setISODate($year, $weekOfYear)->startOfWeek();
            $endDate = Carbon::now()->setISODate($year, $weekOfYear)->endOfWeek();

            $weeklyCalories = RecipeExecution::where('user_id', auth()->id())
                ->whereBetween('created_at', [$startDate, $endDate])
                ->with('recipe.ingredients')
                ->get()
                ->sum(function ($execution) {
                    return $execution->recipe->ingredients->sum(function ($ingredient) {
                        return $ingredient->calories * $ingredient->pivot->quantity;
                    });
                });

            $caloriesPerWeek[$week] = $weeklyCalories;
            $dateLabels[$weekOfYear] = $startDate->format('d.m') . ' - ' . $endDate->format('d.m.Y');
        }

        return [
            'calories' => array_reverse($caloriesPerWeek),
            'labels' => array_reverse($dateLabels),
        ];
    }

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
        $this->dispatch('chartUpdate');

        $query = RecipeExecution::with('recipe')->orderBy($this->sortBy, $this->sortDir);

        if ($this->selectedWeek) {
            [$weekStart, $weekEnd] = explode(' - ', $this->selectedWeek);
            [$dayStart, $monthStart] = explode('.', $weekStart);
            [$dayEnd, $monthEnd, $year] = explode('.', $weekEnd);

            $weekStart = "{$year}.{$monthStart}.{$dayStart} 00:00:00";
            $weekEnd = "{$year}.{$monthEnd}.{$dayEnd} 23:59:59";


            $query->whereDate('created_at', '<=', $weekEnd)
                ->whereDate('created_at', '>=', $weekStart);
        }

        return view('livewire.user-diet-stats', [
            'calorieData' => $this->calorieData,
            'userRecipes' => $query->paginate($this->perPage)
        ]);

//        return view('livewire.user-diet-stats', [
//            'calorieData' => $this->calorieData,
//            'userRecipes' => RecipeExecution::with('recipe')
//                ->orderBy($this->sortBy, $this->sortDir)
//                ->paginate($this->perPage)
//        ]);
    }
}
