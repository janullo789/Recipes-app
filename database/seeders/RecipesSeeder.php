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
                'ingredients' => [
                    ['name' => 'egg', 'quantity' => 2],
                    ['name' => 'butter', 'quantity' => 10],
                    ['name' => 'salt', 'quantity' => 1],
                    ['name' => 'pepper', 'quantity' => 1],
                ],
            ],
            [
                'name' => 'Creamy Chicken Alfredo',
                'description' => 'Delicious and creamy chicken Alfredo pasta with a mix of herbs.',
                'instruction' => '1. Season the chicken breast with salt, pepper, and a pinch of oregano.
                               2. Heat a skillet over medium heat and add a tablespoon of olive oil.
                               3. Add the seasoned chicken breast and cook until it\'s golden brown and cooked through. Remove and set aside.
                               4. In the same skillet, add another tablespoon of olive oil and sauté sliced bell peppers, zucchini, and spinach until they are tender. Remove and set aside.
                               5. In a pot of boiling salted water, cook the penne pasta until al dente. Drain and set aside.
                               6. In the same skillet, melt 2 tablespoons of butter. Add minced garlic and cook until fragrant.
                               7. Pour in the heavy cream and bring to a simmer. Add grated Parmesan cheese, stirring until the sauce is smooth and creamy.
                               8. Slice the cooked chicken breast into thin strips and add it back to the skillet along with the sautéed vegetables.
                               9. Toss in the cooked penne pasta and gently mix everything together.
                               10. Season with chopped fresh basil and a dash of ground black pepper.
                               11. Serve the creamy chicken Alfredo in plates or bowls, garnished with additional grated Parmesan cheese and a sprinkle of chopped parsley.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'chicken breast', 'quantity' => 200],
                    ['name' => 'salt', 'quantity' => 3],
                    ['name' => 'pepper', 'quantity' => 3],
                    ['name' => 'oregano', 'quantity' => 2],
                    ['name' => 'olive oil', 'quantity' => 15],
                    ['name' => 'bell pepper', 'quantity' => 1],
                    ['name' => 'zucchini', 'quantity' => 1],
                    ['name' => 'spinach', 'quantity' => 2],
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'butter', 'quantity' => 50],
                    ['name' => 'clove of garlic', 'quantity' => 3],
                    ['name' => 'heavy cream', 'quantity' => 150],
                    ['name' => 'Parmesan cheese', 'quantity' => 50],
                    ['name' => 'basil', 'quantity' => 4],
                ],
            ]
        ];

        foreach ($recipes as $recipeData) {
            $recipeName = $recipeData['name'];

            // Check if the recipe already exists
            if (!DB::table('recipes')->where('name', $recipeName)->exists()) {
                $recipeId = DB::table('recipes')->insertGetId([
                    'name' => $recipeName,
                    'description' => $recipeData['description'],
                    'instruction' => $recipeData['instruction'],
                    'diet' => $recipeData['diet'],
                    'time' => $recipeData['time'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

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
//        $recipes = [
//            [
//                'name' => 'Scrambled eggs',
//                'description' => 'Delicious scrambled eggs from two eggs',
//                'instruction' => '1. Break two eggs into a bowl.
//                              2. Beat the eggs with a fork.
//                              3. Heat a frying pan and add a little butter.
//                              4. Pour the beaten eggs into the pan.
//                              5. Gently stir the eggs in the pan until they are set.
//                              6. Season with salt and pepper.
//                              7. Serve immediately!',
//                'diet' => RecipeDiet::VEGETARIAN,
//                'time' => RecipeTime::QUICK,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'ingredients' => [
//                    ['name' => 'egg', 'quantity' => 2],
//                    ['name' => 'butter', 'quantity' => 10],
//                    ['name' => 'salt', 'quantity' => 1],
//                    ['name' => 'pepper', 'quantity' => 1],
//                ],
//            ],
//        ];
//
//        foreach ($recipes as $recipeData) {
//            $recipeName = $recipeData['name'];
//
//            // Check if the recipe already exists
//            if (!DB::table('recipes')->where('name', $recipeName)->exists()) {
//                $recipeId = DB::table('recipes')->insertGetId($recipeData);
//
//                foreach ($recipeData['ingredients'] as $ingredient) {
//                    $ingredientId = DB::table('ingredients')
//                        ->where('name', $ingredient['name'])
//                        ->value('id');
//
//                    DB::table('recipes_ingredients')->insert([
//                        'recipes_id' => $recipeId,
//                        'ingredients_id' => $ingredientId,
//                        'quantity' => $ingredient['quantity'],
//                    ]);
//                }
//            }
//        }
//    }
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
