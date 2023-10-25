<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertIngredientRequest;
use App\Models\Ingredient;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View|Application|Factory|JsonResponse
    {
        return view('ingredients.index');
        // in livewire
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpsertIngredientRequest $request)//: RedirectResponse
    {
        $ingredient = new Ingredient($request->validated());
        $ingredient->save();
        return redirect(route('ingredients.index'))->with('status', 'Ingredient stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Ingredient $ingredient
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function edit(Ingredient $ingredient)
    {
        return view("ingredients.edit", [
            'ingredient' => $ingredient
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Ingredient $ingredient
     * @return RedirectResponse
     */
    public function update(Request $request, Ingredient $ingredient): RedirectResponse
    {
        $ingredient->fill($request->all());
        $ingredient->save();
        return redirect(route('ingredients.index'))->with('status', 'Ingredient updated!');
    }

    /**
     * Remove the specified resource from storage.
     * @param Ingredient $ingredient
     * @return JsonResponse
     */
    public function destroy(Ingredient $ingredient): JsonResponse
    {
        try {
            $ingredient->delete();
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
