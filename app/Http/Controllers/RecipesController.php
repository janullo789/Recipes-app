<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertRecipeRequest;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource for admins.
     */
    public function indexAdmin()
    {
        $recipes = Recipe::with('ingredients')->get();

        return view('recipes.indexAdmin', [
            'recipes' => $recipes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();

        return view('recipes.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpsertRecipeRequest $request)
    {
        $recipe = new Recipe($request->validated());
        $recipe->save();

        // Dodawanie składników do przepisu
        foreach ($request->input('ingredients') as $ingredientData) {
            $ingredientId = $ingredientData['id'];
            $quantity = $ingredientData['quantity'];

            if ($quantity > 0) {
                // Jeśli składnik istnieje, dodaj go do przepisu w tabeli pośredniej
                $recipe->ingredients()->attach($ingredientId, ['quantity' => $quantity]);
            }
        }

        return redirect()->route('recipes.indexAdmin')->with('success', 'Przepis został pomyślnie dodany.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipes)
    {
        //
    }
}
