<?php

namespace App\Enums\Ingredient;

class IngredientCategory
{
    const EGGS_MILK_AND_MILK_PRODUCTS = 'eggs, milk and milk products';
    const FAT_AND_OILS = 'fat and oils';
    const FRUITS = 'fruits';
    const GRAIN_NUTS_AND_BAKING_PRODUCTS = 'grain, nuts and baking products';
    const HERBS_AND_SPICES = 'herbs and spices';
    const MEAT_AND_FISH = 'meat and fish';
    const PASTA_AND_RICE = 'pasta and rice';
    const VEGETABLES = 'vegetables';
    const OTHER = 'other';

    const TYPES = [
        self::EGGS_MILK_AND_MILK_PRODUCTS,
        self::FAT_AND_OILS,
        self::FRUITS,
        self::GRAIN_NUTS_AND_BAKING_PRODUCTS,
        self::HERBS_AND_SPICES,
        self::MEAT_AND_FISH,
        self::PASTA_AND_RICE,
        self::VEGETABLES,
        self::OTHER
    ];
}
