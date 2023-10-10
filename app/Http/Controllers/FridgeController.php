<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\UserIngredient;

class FridgeController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('fridge.index', compact('ingredients'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ingredient_id' => 'required',
            'amount' => 'required|numeric'
        ]);

        $data['user_id'] = auth()->id();

        UserIngredient::updateOrCreate(
            ['user_id' => $data['user_id'], 'ingredient_id' => $data['ingredient_id']],
            ['amount' => $data['amount']]
        );

        return redirect()->route('fridge.index');
    }
}
