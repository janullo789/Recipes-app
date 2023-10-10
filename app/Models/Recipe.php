<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'instruction',
        'diet',
        'time',
        'image_path'
    ];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipes_ingredients', 'recipes_id', 'ingredients_id')
            ->withPivot('quantity');
    }
}
