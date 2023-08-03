<?php

namespace App\Enums\Recipe;

class RecipeTime
{
    const QUICK = 'quick';
    const MEDIUM = 'medium';
    const LONG = 'long';

    const TYPES = [
        self::QUICK,
        self::MEDIUM,
        self::LONG
    ];
}
