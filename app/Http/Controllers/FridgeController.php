<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\UserIngredient;

class FridgeController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all()->groupBy('category');
        $user_id = auth()->id();
        $user_ingredients = UserIngredient::where('user_id', $user_id)->get()->keyBy('ingredient_id');

        return view('fridge.index', compact('ingredients', 'user_ingredients'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $user_id = auth()->id();

        UserIngredient::where('user_id', $user_id)->delete();

        // Następnie dodaj tylko te, które mają wartość większą od 0
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
