<?php

namespace App\Http\Requests;

use App\Enums\Recipe\RecipeDiet;
use App\Enums\Recipe\RecipeTime;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpsertRecipeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100', Rule::unique('recipes', 'name')->ignore($this->route('recipe'))],
            'description' => ['required', 'string', 'max:1500'],
            'instruction' => ['required', 'string', 'max:3000'],
            'diet' => ['nullable', Rule::in(RecipeDiet::TYPES)],
            'time' => ['nullable', Rule::in(RecipeTime::TYPES)],
            //'image_path' => ['nullable', 'image', 'mimes:jpg,png'],
            'ingredients' => ['required', 'array'],
            'ingredients.*.id' => ['integer', 'exists:ingredients,id'],
            'ingredients.*.quantity' => ['required', 'integer'],
        ];
    }
}
