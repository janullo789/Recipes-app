<?php

namespace App\Enums\Recipe;

class RecipeTime
{
    const QUICK = 'szybki';
    const MEDIUM = 'średni';
    const LONG = 'długi';

    const TYPES = [
        self::QUICK,
        self::MEDIUM,
        self::LONG
    ];
}
