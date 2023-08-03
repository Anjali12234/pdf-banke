<?php

namespace App\Http\Requests\DocumentCategory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentCategory extends FormRequest
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
            'position' => ['nullable'],
            'slug' => ['required', 'alpha_dash', Rule::unique('document_categories', 'slug')],
            'status' => ['nullable'],
        ];
    }
}
