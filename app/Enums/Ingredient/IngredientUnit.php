<?php

namespace App\Enums\Ingredient;

class IngredientUnit
{
    const G = 'g';
    const ML = 'mL';
    const PCS = 'pcs';

    const TYPES = [
        self::G,
        self::ML,
        self::PCS
    ];
}
