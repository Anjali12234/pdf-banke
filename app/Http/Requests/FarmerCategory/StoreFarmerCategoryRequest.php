<?php

namespace App\Http\Requests\FarmerCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFarmerCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'english_title' => ['nullable'],
            'position' => ['required'],
            'slug' => ['required', 'alpha_dash', Rule::unique('farmer_categories', 'slug')],
            'status' => ['nullable'],
        ];
    }
}
