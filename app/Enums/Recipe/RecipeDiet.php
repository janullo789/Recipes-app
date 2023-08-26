<?php

namespace App\Enums\Recipe;

class RecipeDiet
{
    const VEGAN = 'vegan';
    const VEGETARIAN = 'vegetarian';

    const TYPES = [
        self::VEGAN,
        self::VEGETARIAN
    ];
}
