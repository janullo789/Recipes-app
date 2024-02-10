<?php

namespace App\Enums\Ingredient;

class IngredientUnit
{
    const G = 'g';
    const ML = 'mL';
    const PCS = 'szt.';

    const TYPES = [
        self::G,
        self::ML,
        self::PCS
    ];
}
