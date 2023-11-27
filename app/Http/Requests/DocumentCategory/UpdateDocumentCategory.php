<?php

namespace App\Http\Requests\DocumentCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDocumentCategory extends FormRequest
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
            'slug' => ['nullable', 'alpha_dash', Rule::unique('document_categories', 'slug')->ignore($this->documentCategory)],
            'status' => ['nullable'],
        ];
    }
}
