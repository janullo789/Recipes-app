<?php

namespace Database\Seeders;

use App\Enums\Ingredient\IngredientCategory;
use App\Enums\Ingredient\IngredientUnit;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class IngredientsPLSeeder extends Seeder
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
                'name' => 'mleko',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 0.5, // na 1 ml
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'jajko',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::PCS,
                'calories' => 155,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ser',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'jogurt',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 1.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'śmietanka do kawy',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 3.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'maślanka',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 0.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'bita śmietana',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'śmietana kremówka',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 3.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ser parmezan',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 3.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kefir',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 0.6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'mleko kozie',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 0.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'mleko ryżowe',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 0.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'mleko owsiane',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::ML,
                'calories' => 0.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ser feta',
                'category' => IngredientCategory::EGGS_MILK_AND_MILK_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 2.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        $this->insertFirstOrCreate($eggsMilkAndMilkProducts);

        $fatAndOils = [
            [
                'name' => 'oliwa z oliwek',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::ML,
                'calories' => 8.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'masło',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::G,
                'calories' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'olej kokosowy',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::ML,
                'calories' => 8.9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'olej roślinny',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::ML,
                'calories' => 8.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'smalec',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::G,
                'calories' => 9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'olej rzepakowy',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::ML,
                'calories' => 8.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'olej słonecznikowy',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::ML,
                'calories' => 8.6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'margaryna',
                'category' => IngredientCategory::FAT_AND_OILS,
                'unit' => IngredientUnit::G,
                'calories' => 7.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        $this->insertFirstOrCreate($fatAndOils);

        $fruits = [
            [
                'name' => 'jabłko',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 95,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'banan',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 105,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pomarańcza',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 62,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'winogrono',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 69,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'truskawka',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'arbuz',
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
                'name' => 'ananas',
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
                'name' => 'gruszka',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 102,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'malina',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'śliwka',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 46,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'czereśnia',
                'category' => IngredientCategory::FRUITS,
                'unit' => IngredientUnit::PCS,
                'calories' => 50,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        $this->insertFirstOrCreate($fruits);

        $grainNutsAndBakingProducts = [
            [
                'name' => 'mąka',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 3.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'owsianka',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 1.9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'migdały',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 7.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'orzechy włoskie',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 6.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'bułka tarta',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 2.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'proszek do pieczenia',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 1.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'orzechy laskowe',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 6.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'orzechy nerkowca',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 5.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'drożdże',
                'category' => IngredientCategory::GRAIN_NUTS_AND_BAKING_PRODUCTS,
                'unit' => IngredientUnit::G,
                'calories' => 1.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        $this->insertFirstOrCreate($grainNutsAndBakingProducts);

        $herbsAndSpices = [
            [
                'name' => 'bazylia',
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
                'name' => 'cynamon',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 2.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ostryż długi',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 6.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'rozmaryn',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 1.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'tymianek',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 1.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'czosnek',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 4.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'imbir',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 1.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'papryka łagodna',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 2.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kmin',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 4.1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kolendra',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 2.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pieprz cayenne',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 8.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'szafran',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 3.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'koperek',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 1.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'gałka muszkatołowa',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 11.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'sól',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pieprz',
                'category' => IngredientCategory::HERBS_AND_SPICES,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        $this->insertFirstOrCreate($herbsAndSpices);

        $meatAndFish = [
            [
                'name' => 'pierś z kurczaka',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 1.6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'filet z łososia',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'mielona wołowina',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'krewetki',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 8.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kotlet schabowy',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'stek wołowy',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'filet z dorsza',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 0.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kotlet jagnięcy',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'filet z tilapii',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pierś z indyka',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 1.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kaczka',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 3.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'makrela',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'wołowina mielona',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'filet z pstrąga',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 1.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'polędwica wołowa',
                'category' => IngredientCategory::MEAT_AND_FISH,
                'unit' => IngredientUnit::G,
                'calories' => 2.1,
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
                'name' => 'ryż bązowy',
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
                'name' => 'ryż jaśminowy',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ryż risotto',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'makaron nitki',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ryż dziki',
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
            ],
            [
                'name' => 'komosa ryżowa',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 3.7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kasza jaglana',
                'category' => IngredientCategory::PASTA_AND_RICE,
                'unit' => IngredientUnit::G,
                'calories' => 3.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        $this->insertFirstOrCreate($pastaAndRice);

        $vegetables = [
            [
                'name' => 'marchewka',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 41.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'brokuł',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 34.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'szpinak',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::G,
                'calories' => 2.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'dynia',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::G,
                'calories' => 2.6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'papryka',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 31.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cebula',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 41.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'oliwki',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::G,
                'calories' => 1.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pomidor',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 18.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'cukinia',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 17.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'kalafior',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 25.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'zielone fasolki',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 31.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ogórek',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 15.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'batat',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::G,
                'calories' => 8.6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ząbek czosnku',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::PCS,
                'calories' => 8.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ciecierzyca',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::G,
                'calories' => 3.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'sałata',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::G,
                'calories' => 0.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'pieczarki',
                'category' => IngredientCategory::VEGETABLES,
                'unit' => IngredientUnit::G,
                'calories' => 0.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        $this->insertFirstOrCreate($vegetables);

        $otherIngredients = [
            [
                'name' => 'miód',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'syrop klonowy',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 2.5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'sos sojowy',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::ML,
                'calories' => 8.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'sos sriracha',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::ML,
                'calories' => 1.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'ocet',
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
                'name' => 'majonez',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 7.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'musztarda',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 5.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'grzanki',
                'category' => IngredientCategory::OTHER,
                'unit' => IngredientUnit::G,
                'calories' => 4.0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
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
