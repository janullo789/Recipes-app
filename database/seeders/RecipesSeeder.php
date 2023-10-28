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
                'image_path' => 'recipes/scrambled-eggs.jpg',
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
                'image_path' => 'recipes/creamy-chicken-alfredo.jpg',
            ],
            [
                'name' => 'Pancakes',
                'description' => 'Fluffy American-style pancakes.',
                'instruction' => '1. Mix flour, baking powder, and salt.
                          2. Add milk and stir.
                          3. Heat a pan with some butter.
                          4. Pour batter and cook until bubbles form.
                          5. Flip and cook other side.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'flour', 'quantity' => 200],
                    ['name' => 'baking powder', 'quantity' => 5],
                    ['name' => 'milk', 'quantity' => 150],
                    ['name' => 'salt', 'quantity' => 1],
                    ['name' => 'butter', 'quantity' => 10],
                ],
                'image_path' => 'recipes/pancakes.jpg',
            ],
            [
                'name' => 'Fruit Salad',
                'description' => 'A refreshing fruit salad.',
                'instruction' => '1. Cut all fruits into pieces.
                          2. Mix them in a bowl.
                          3. Serve chilled.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'apple', 'quantity' => 1],
                    ['name' => 'banana', 'quantity' => 1],
                    ['name' => 'orange', 'quantity' => 1],
                    ['name' => 'strawberry', 'quantity' => 1],
                ],
                'image_path' => 'recipes/fruit-salad.jpg',
            ],
            [
                'name' => 'Spaghetti Carbonara',
                'description' => 'Classic Italian pasta dish.',
                'instruction' => '1. Boil spaghetti.
                          2. Fry bacon in olive oil.
                          3. Mix egg, parmesan, and pepper.
                          4. Combine all and serve.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'spaghetti', 'quantity' => 200],
                    ['name' => 'egg', 'quantity' => 1],
                    ['name' => 'parmesan cheese', 'quantity' => 50],
                    ['name' => 'pepper', 'quantity' => 1],
                    ['name' => 'olive oil', 'quantity' => 15],
                ],
                'image_path' => 'recipes/spaghetti-carbonara.jpg',
            ],
            [
                'name' => 'Chicken Curry',
                'description' => 'Spicy chicken curry with rich flavors.',
                'instruction' => '1. Marinate chicken in spices.
                          2. Fry onion and garlic.
                          3. Add chicken and cook.
                          4. Add coconut milk and simmer.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'chicken breast', 'quantity' => 200],
                    ['name' => 'turmeric', 'quantity' => 2],
                    ['name' => 'cumin', 'quantity' => 2],
                    ['name' => 'coriander', 'quantity' => 2],
                    ['name' => 'clove of garlic', 'quantity' => 2],
                    ['name' => 'coconut oil', 'quantity' => 15],
                    ['name' => 'coconut milk', 'quantity' => 200],
                ],
                'image_path' => 'recipes/chicken-curry.jpg',
            ],
            [
                'name' => 'Vegetable Stir-Fry',
                'description' => 'Quick and healthy vegetable stir-fry.',
                'instruction' => '1. Cut all vegetables.
                          2. Heat oil in a pan.
                          3. Stir-fry vegetables.
                          4. Add soy sauce and serve.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'carrot', 'quantity' => 1],
                    ['name' => 'broccoli', 'quantity' => 1],
                    ['name' => 'bell pepper', 'quantity' => 1],
                    ['name' => 'soy sauce', 'quantity' => 10],
                    ['name' => 'vegetable oil', 'quantity' => 15],
                ],
                'image_path' => 'recipes/vegetable-stirfry.jpg',
            ],
            [
                'name' => 'Cheese Omelette',
                'description' => 'Fluffy omelette with cheese.',
                'instruction' => '1. Beat eggs.
                          2. Add milk and cheese.
                          3. Pour into hot pan.
                          4. Fold and serve.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'egg', 'quantity' => 3],
                    ['name' => 'milk', 'quantity' => 20],
                    ['name' => 'cheese', 'quantity' => 50],
                    ['name' => 'butter', 'quantity' => 10],
                ],
                'image_path' => 'recipes/cheese-omelette.jpg',
            ],
            [
                'name' => 'Salmon with Dill Sauce',
                'description' => 'Grilled salmon with creamy dill sauce.',
                'instruction' => '1. Season salmon with salt and pepper.
                          2. Grill until cooked.
                          3. Mix heavy cream and dill for sauce.
                          4. Serve salmon with sauce.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'salmon fillet', 'quantity' => 200],
                    ['name' => 'salt', 'quantity' => 2],
                    ['name' => 'pepper', 'quantity' => 1],
                    ['name' => 'heavy cream', 'quantity' => 50],
                    ['name' => 'dill', 'quantity' => 2],
                ],
                'image_path' => 'recipes/salmon-dill.jpg',
            ],
            [
                'name' => 'Vegan Risotto',
                'description' => 'Creamy vegan risotto with mushrooms and spinach.',
                'instruction' => '1. Sauté onion and garlic.
                          2. Add rice and cook.
                          3. Add vegetable broth gradually.
                          4. Stir in mushrooms and spinach.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'risotto rice', 'quantity' => 200],
                    ['name' => 'clove of garlic', 'quantity' => 2],
                    ['name' => 'onion', 'quantity' => 1],
                    ['name' => 'mushroom', 'quantity' => 4],
                    ['name' => 'spinach', 'quantity' => 3],
                    ['name' => 'vegetable oil', 'quantity' => 15],
                ],
                'image_path' => 'recipes/vegan-risotto.jpg',
            ],
            [
                'name' => 'Beef Stroganoff',
                'description' => 'A rich and creamy Beef Stroganoff served over a bed of egg noodles.',
                'instruction' => '1. Slice the beef steak into thin strips.
                          2. In a large pan, melt butter and sauté onions until translucent.
                          3. Add garlic and beef strips. Cook until beef is browned.
                          4. Add mushrooms and sauté until tender.
                          5. Pour in beef broth and bring to a simmer.
                          6. Add heavy cream, salt, and pepper. Simmer for 15 minutes.
                          7. In a separate pot, cook egg noodles as per package instructions.
                          8. Drain noodles and set aside.
                          9. Add a splash of Worcestershire sauce to the stroganoff.
                          10. Serve the beef stroganoff over the egg noodles, garnished with parsley.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'beef steak', 'quantity' => 300],
                    ['name' => 'butter', 'quantity' => 50],
                    ['name' => 'clove of garlic', 'quantity' => 2],
                    ['name' => 'heavy cream', 'quantity' => 100],
                    ['name' => 'salt', 'quantity' => 2],
                    ['name' => 'pepper', 'quantity' => 1],
                    ['name' => 'egg', 'quantity' => 1],
                ],
                'image_path' => 'recipes/beef-stroganoff.jpg',
            ],
            [
                'name' => 'Vegan Buddha Bowl',
                'description' => 'A nutritious Vegan Buddha Bowl filled with grains, veggies, and a delicious dressing.',
                'instruction' => '1. Cook quinoa as per package instructions.
                          2. Roast sweet potatoes, broccoli, and bell peppers in an oven preheated to 400°F (200°C) for 20 minutes.
                          3. In a small bowl, mix tahini, lemon juice, olive oil, salt, and pepper to make the dressing.
                          4. Assemble the bowl with cooked quinoa, roasted veggies, and avocado slices.
                          5. Drizzle the dressing over the top.
                          6. Garnish with sesame seeds and serve.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'wild rice', 'quantity' => 100],
                    ['name' => 'sweet potato', 'quantity' => 1],
                    ['name' => 'broccoli', 'quantity' => 1],
                    ['name' => 'bell pepper', 'quantity' => 1],
                    ['name' => 'tahini', 'quantity' => 30],
                    ['name' => 'lemon juice', 'quantity' => 10],
                    ['name' => 'olive oil', 'quantity' => 15],
                    ['name' => 'salt', 'quantity' => 1],
                    ['name' => 'pepper', 'quantity' => 1],
                    ['name' => 'avocado', 'quantity' => 1],
                    ['name' => 'sesame seeds', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buddha-bowl.jpg',
            ],
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
                    'image_path' => $recipeData['image_path'],
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
