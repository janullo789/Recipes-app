<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertFridgeRequest;
use App\Models\Ingredient;
use App\Models\UserIngredient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;

class FridgeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $user_id = auth()->id();

        $ingredients = Cache::remember("user_{$user_id}_ingredients",60, function () {
            return Ingredient::all()->groupBy('category');
        });
        $ingredients = Ingredient::all()->groupBy('category');

        $user_ingredients = UserIngredient::where('user_id', $user_id)->get()->keyBy('ingredient_id');

        return view('fridge.index', compact('ingredients', 'user_ingredients'));
    }

    /**
     * @param UpsertFridgeRequest $request
     * @return RedirectResponse
     */
    public function store(UpsertFridgeRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $user_id = auth()->id();

        UserIngredient::where('user_id', $user_id)->delete();

        // Adding only values >0
        foreach ($data['quantity'] as $ingredient_id => $quantity) {
            if ($quantity !== null && $quantity > 0) {
                UserIngredient::create([
                    'user_id' => $user_id,
                    'ingredient_id' => $ingredient_id,
                    'quantity' => $quantity
                ]);
            }
        }

        return redirect()->route('fridge.index');
    }
}
