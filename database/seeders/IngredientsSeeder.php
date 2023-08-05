<?php

namespace Database\Seeders;

use App\Enums\Ingredient\IngredientCategory;
use App\Enums\Ingredient\IngredientUnit;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eggsMilkAndMilkProducts = [
            [
                'name' => 'milk',
                'category' =>  IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 0.5, //per mL
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'egg',
                'category' =>  IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::PCS,
                'calories' => 155,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cheese',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'yogurt',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 1.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cream chess',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 3.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'buttermilk',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 0.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'whipped cream',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        $this->insertFirstOrCreate($eggsMilkAndMilkProducts);

        $fatAndOils = [
            [
                'name' => 'olive oil',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::ML,
                'calories' => 8.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'butter',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::G,
                'calories' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'coconut oil',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::ML,
                'calories' => 8.9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'vegetable oil',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::ML,
                'calories' => 8.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'lard',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::G,
                'calories' => 9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        $this->insertFirstOrCreate($fatAndOils);

        $fruits = [
            [
                'name' => 'apple',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 95,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'banana',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 105,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'orange',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 62,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'grape',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 69,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'strawberry',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'watermelon',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kiwi',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 41,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pineapple',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 50,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'mango',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 60,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pear',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 102,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        $this->insertFirstOrCreate($fruits);

        $grainNutsAndBakingProducts = [
            [
                'name' => 'flour',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 3.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'oats',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 1.9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'almonds',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 7.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'walnuts',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 6.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'bread crumbs',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 2.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'baking powder',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 1.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        $this->insertFirstOrCreate($grainNutsAndBakingProducts);

        $herbsAndSpices = [
            [
                'name' => 'basil',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'oregano',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 5.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cinnamon',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 2.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'turmeric',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 6.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'rosemary',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 1.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'thyme',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 1.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'garlic powder',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 4.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ginger',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 1.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'paprika',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 2.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cumin',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 4.1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'coriander',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 2.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cayenne pepper',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 8.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'saffron',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 3.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'dill',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 1.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'nutmeg',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 11.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        $this->insertFirstOrCreate($herbsAndSpices);

        $meatAndFish = [
            [
                'name' => 'chicken breast',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 1.6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'salmon fillet',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ground beef',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'shrimp',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 8.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pork chop',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'beef steak',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cod fillet',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 0.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'lamb chop',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'tilapia fillet',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'turkey breast',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 1.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        $this->insertFirstOrCreate($meatAndFish);

        $pastaAndRice = [
            [
                'name' => 'spaghetti',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 1.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'penne',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'brown rice',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'fettuccine',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'jasmine rice',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'macaroni',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 1.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'risotto rice',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'angel hair pasta',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'wild rice',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 1.6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'orzo',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        $this->insertFirstOrCreate($pastaAndRice);

        $vegetables = [
            [
                'name' => 'carrot',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 41.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'broccoli',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 34.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'spinach',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 23.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'bell pepper',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 31.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'tomato',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 18.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'zucchini',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 17.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cauliflower',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 25.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'green beans',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 31.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cucumber',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 15.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'sweet potato',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 86.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        $this->insertFirstOrCreate($vegetables);

        $otherIngredients = [
            [
                'name' => 'honey',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'maple syrup',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'soy sauce',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::ML,
                'calories' => 8.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'sriracha sauce',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::ML,
                'calories' => 1.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'vinegar',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::ML,
                'calories' => 3.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ketchup',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 1.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'mayonnaise',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 7.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'mustard',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 5.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        $this->insertFirstOrCreate($otherIngredients);


    }

    private function insertFirstOrCreate($records)
    {
        foreach($records as $record) {
            Ingredient::firstOrCreate(
                ['name' => $record['name']],
                $record);
        }
    }
}
