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
        $filters = $request->query('filter');
        $paginate = $request->query('paginate') ?? 10;
        $query = Ingredient::query();
        if (!is_null($filters) && isset($filters['categories'])) {
            $query = $query->whereIn('category', $filters['categories']);
        }

        $ingredients = $query->paginate($paginate);

        if ($request->ajax()) {
            return response()->json($ingredients);
        }

        return view('ingredients.index', [
            'ingredients' => $ingredients,
            'categories' => Ingredient::distinct('category')->pluck('category')
        ]);
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
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        //
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
            //Session::flash('status', 'Ingredient deleted!');
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
