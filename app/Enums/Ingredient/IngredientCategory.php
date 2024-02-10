<?php

namespace App\Enums\Ingredient;

class IngredientCategory
{
    const EGGS_MILK_AND_MILK_PRODUCTS = 'jajka, mleko i produkty mleczne';
    const FAT_AND_OILS = 'tłuszcze i oleje';
    const FRUITS = 'owoce';
    const GRAIN_NUTS_AND_BAKING_PRODUCTS = 'zboża, orzechy i produkty piekarnicze';
    const HERBS_AND_SPICES = 'zioła i przyprawy';
    const MEAT_AND_FISH = 'mięso i ryby';
    const PASTA_AND_RICE = 'makaron i ryż';
    const VEGETABLES = 'warzywa';
    const OTHER = 'inne';

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
