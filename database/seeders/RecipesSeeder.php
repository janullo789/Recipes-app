<?php

namespace Database\Seeders;

use App\Enums\Recipe\RecipeDiet;
use App\Enums\Recipe\RecipeTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    public function run()
    {
        $recipes = [
            [
                'name' => 'Scrambled eggs',
                'description' => 'Delicious scrambled eggs from two eggs',
                'instruction' => '1. Break two eggs into a bowl.
                              2. Beat the eggs with a fork.
                              3. Heat a frying pan and add a little butter.
                              4. Pour the beaten eggs into the pan.
                              5. Gently stir the eggs in the pan until they are set.
                              6. Season with salt and pepper.
                              7. Serve immediately!',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'created_at' => now(),
                'updated_at' => now(),
                'ingredients' => [
                    ['name' => 'egg', 'quantity' => 2],
                    ['name' => 'butter', 'quantity' => 10],
                    ['name' => 'salt', 'quantity' => 1],
                    ['name' => 'pepper', 'quantity' => 1],
                ],
            ],
        ];

        foreach ($recipes as $recipeData) {
            $recipeName = $recipeData['name'];

            // Check if the recipe already exists
            if (!DB::table('recipes')->where('name', $recipeName)->exists()) {
                $recipeId = DB::table('recipes')->insertGetId($recipeData);

                foreach ($recipeData['ingredients'] as $ingredient) {
                    $ingredientId = DB::table('ingredients')
                        ->where('name', $ingredient['name'])
                        ->value('id');

                    DB::table('recipes_ingredients')->insert([
                        'recipes_id' => $recipeId,
                        'ingredients_id' => $ingredientId,
                        'quantity' => $ingredient['quantity'],
                    ]);
                }
            }
        }
    }
//        $recipeId = DB::table('recipes')->insertGetId([
//            'name' => 'Scrambled eggs',
//            'description' => 'Delicious scrambled eggs from two eggs',
//            'instruction' => '1. Break two eggs into a bowl.
//                              2. beat the eggs with a fork.
//                              3. Heat a frying pan and add a little butter.
//                              4. Pour the beaten eggs into the pan.
//                              5. Gently stir the eggs in the pan until they are set.
//                              6. Season with salt and pepper.
//                              7. Serve immediately!',
//            'diet' => RecipeDiet::VEGETARIAN,
//            'time' => RecipeTime::QUICK,
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//
//        // Ingredients for the recipe
//        $ingredients = [
//            ['name' => 'egg', 'quantity' => 2],
//            ['name' => 'butter', 'quantity' => 10],
//            ['name' => 'salt', 'quantity' => 1],
//            ['name' => 'pepper', 'quantity' => 1],
//        ];
//
//        foreach ($ingredients as $ingredient) {
//            $ingredientId = DB::table('ingredients')
//                ->where('name', $ingredient['name'])
//                ->value('id');
//
//            DB::table('recipes_ingredients')->insert([
//                'recipes_id' => $recipeId,
//                'ingredients_id' => $ingredientId,
//                'quantity' => $ingredient['quantity'],
//            ]);
//        }
//    }
}
