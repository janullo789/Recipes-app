<?php

namespace App\Http\Requests;

use App\Enums\Ingredient\IngredientCategory;
use App\Enums\Ingredient\IngredientUnit;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpsertIngredientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100', Rule::unique('ingredients', 'name')->ignore($this->route('ingredient'))],
            'category' => ['required', Rule::in(IngredientCategory::TYPES)],
            'unit' => ['required', Rule::in(IngredientUnit::TYPES)],
            'calories' => ['nullable', 'numeric'],
        ];
    }
}
