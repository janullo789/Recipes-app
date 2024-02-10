<?php

namespace App\Livewire;

use App\Models\RecipeExecution;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Livewire\Component;
use Livewire\WithPagination;
use Exception;
use Illuminate\Contracts\View\View;

class RecipesHistory extends Component
{
    use WithPagination;

    public $calorieData;
    public $perPage = 5;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';
    public $selectedWeek = null;

    /**
     * @return void
     */
    public function mount(): void
    {
        $this->calorieData = $this->getCalorieDataForRecentWeeks();
    }

    /**
     * @return array
     */
    private function getCalorieDataForRecentWeeks(): array
    {
        $currentWeek = Carbon::now()->weekOfYear;
        $currentYear = date('Y');
        $caloriesPerWeek = [];
        $dateLabels = [];

        for ($week = $currentWeek; $week > $currentWeek - 10; $week--) {
            $weekOfYear = $week;
            $year = $currentYear;

            if ($weekOfYear <= 0) {
                $weekOfYear = 52 + $week;
                $year--;
            }

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

            $caloriesPerWeek[$weekOfYear] = $weeklyCalories;
            $dateLabels[$weekOfYear] = $startDate->format('d.m') . ' - ' . $endDate->format('d.m.Y');
        }

        return [
            'calories' => array_reverse($caloriesPerWeek),
            'labels' => array_reverse($dateLabels),
        ];
    }

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
     * @param RecipeExecution $execution
     * @return JsonResponse
     */
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

    /**
     * @return View
     */
    public function render(): View
    {
        $this->dispatch('chartUpdate');

        $query = RecipeExecution::where('user_id', auth()->id())
            ->with('recipe')
            ->orderBy($this->sortBy, $this->sortDir);

        if ($this->selectedWeek) {
            [$weekStart, $weekEnd] = explode(' - ', $this->selectedWeek);
            [$dayStart, $monthStart, $yearStart] = explode('.', $weekStart);
            [$dayEnd, $monthEnd, $yearEnd] = explode('.', $weekEnd);

            if ($monthStart > $monthEnd) {
                $yearStart = $yearEnd - 1;
            }

            $weekStart = "$yearStart.$monthStart.$dayStart 00:00:00";
            $weekEnd = "$yearEnd.$monthEnd.$dayEnd 23:59:59";

            $query->whereDate('created_at', '<=', $weekEnd)
                ->whereDate('created_at', '>=', $weekStart);
        }

        return view('livewire.recipes-history', [
            'calorieData' => $this->calorieData,
            'userRecipes' => $query->paginate($this->perPage)
        ]);
    }

}
