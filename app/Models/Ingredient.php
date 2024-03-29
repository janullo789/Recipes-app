<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->belongsToMany(Recipe::class, 'recipes_ingredients');
    }

    /**
     * @return HasMany
     */
    public function userIngredients(): HasMany
    {
        return $this->hasMany(UserIngredient::class);
    }

    /**
     * @param $query
     * @param $value
     * @return void
     */
    public function scopeSearch($query, $value): void
    {
        $query->where('id', 'like', "%$value%")->orWhere('name', 'like', "%$value%");
    }
}
