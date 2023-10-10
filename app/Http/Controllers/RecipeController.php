<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertRecipeRequest;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
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
     * Display a listing of the resource.
     */
    public function mainSite()
    {
        $recipes = Recipe::with('ingredients')->get();

        return view('mainSite', [
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
        $recipe->image_path = Storage::disk('public')->put('recipes', $request->file('image'));
        $recipe->save();

        foreach ($request->input('ingredients') as $ingredientData) {
            $ingredientId = $ingredientData['id'];
            $quantity = intval($ingredientData['quantity']);

            if ($quantity > 0) {
                $recipe->ingredients()->attach($ingredientId, ['quantity' => $quantity]);
            }
        }

        return redirect()->route('recipes.indexAdmin')->with('success', 'Recipe has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view("recipes.edit", [
            'recipe' => $recipe
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        $recipe->fill($request->all());
        $recipe->save();
        return redirect(route('recipes.indexAdmin'))->with('status', 'Recipe updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
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
}
