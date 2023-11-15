<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertRecipeRequest;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\RecipeExecution;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource for admins.
     */
    public function index(): View
    {
        return view('recipes.index');
        // in livewire
    }

    /**
     * Display a listing of the resource.
     */
    public function mainSite(): View
    {
        return view('mainSite');
        // in livewire
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ingredients = Ingredient::all();

        return view('recipes.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpsertRecipeRequest $request): RedirectResponse
    {
        $recipe = new Recipe($request->validated());
        $recipe->image_path = Storage::disk('public')->put('recipes', $request->file('image'));
        $recipe->save();

        foreach ($request->input('ingredients') as $ingredientData) {
            $ingredientId = $ingredientData['id'];
            $quantity = intval($ingredientData['quantity']);

            if ($quantity > 0) {
                $recipe->ingredients()->attach($ingredientId, ['quantity' => $quantity]);
            }
        }

        return redirect()->route('recipes.index')->with('success', 'Recipe has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe): View
    {
        $totalCalories = DB::table('recipes_ingredients')
            ->where('recipes_id', $recipe->id)
            ->join('ingredients', 'recipes_ingredients.ingredients_id', '=', 'ingredients.id')
            ->sum(DB::raw('ingredients.calories * recipes_ingredients.quantity'));

        return view('recipes.show', [
            'recipe' => $recipe,
            'totalCalories' => $totalCalories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe): View
    {
        return view("recipes.edit", [
            'recipe' => $recipe
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe): RedirectResponse
    {
        $recipe->fill($request->all());
        $recipe->save();
        return redirect(route('recipes.index'))->with('status', 'Recipe updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        // in livewire
    }

    /**
     * Display a listing of the history of recipes and statistic.
     */
    public function history(): View
    {
        return view('recipes.history');
        // in livewire
    }

    public function executeRecipe(Request $request, $recipeId): RedirectResponse
    {
        $recipe = Recipe::with('ingredients')->findOrFail($recipeId);
        $user = auth()->user();
        $userIngredients = $user->userIngredients;
        $missingIngredients = [];

        foreach ($recipe->ingredients as $ingredient) {
            $userIngredient = $userIngredients
                ->firstWhere('ingredient_id', $ingredient->id);

            if (!$userIngredient || $userIngredient->quantity < $ingredient->pivot->quantity) {
                $missingIngredients[$ingredient->name] = [
                    'quantity' => $ingredient->pivot->quantity - $userIngredient->quantity,
                    'unit' => $ingredient->unit
                ];
            }
        }

        if (!empty($missingIngredients)) {
            return redirect()->route('recipes.show', $recipeId)->with('missingIngredients', $missingIngredients);
        }

        foreach ($recipe->ingredients as $ingredient) {
            $userIngredient = $userIngredients->firstWhere('ingredient_id', $ingredient->id);
            $userIngredient->update([
                'quantity' => $userIngredient->quantity - $ingredient->pivot->quantity
            ]);
        }

        RecipeExecution::create([
            'user_id' => auth()->id(),
            'recipe_id' => $recipeId,
        ]);

        $usedIngredients = $recipe->ingredients->map(function ($ingredient) {
            return [
                'name' => $ingredient->name,
                'quantity' => $ingredient->pivot->quantity,
                'unit' => $ingredient->unit
            ];
        });

        return back()->with('success', 'Przepis wykonany!')->with('usedIngredients', json_encode($usedIngredients));
    }
}
