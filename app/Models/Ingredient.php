<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Enums\Ingredient\IngredientCategory;

class Ingredient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'category',
        'unit',
        'calories',
    ];

    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Recipes::class, 'recipes_ingredients');
    }
}
