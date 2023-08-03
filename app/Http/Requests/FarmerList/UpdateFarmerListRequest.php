<?php

namespace App\Http\Requests\FarmerList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFarmerListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'english_title' => ['required'],
            'slug' => ['required', 'alpha_dash', Rule::unique('farmer_lists', 'slug')->ignore($this->farmerList)],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf'],
            'farmer_category_id' => ['required'],
            'publisher' => ['required'],
            'english_publisher' => ['required'],
            'publish_date' => ['required'], 
            'status' => ['nullable'],
        ];
    }
}
