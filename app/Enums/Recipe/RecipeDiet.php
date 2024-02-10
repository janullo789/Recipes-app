<?php

namespace App\Enums\Recipe;

class RecipeDiet
{
    const VEGAN = 'wegańska';
    const VEGETARIAN = 'wegetariańska';

    const TYPES = [
        self::VEGAN,
        self::VEGETARIAN
    ];
}
