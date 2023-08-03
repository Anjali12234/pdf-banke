<?php

namespace App\Http\Requests\DownloadCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDownloadCategoryRequest extends FormRequest
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
            'slug' => ['required', 'alpha_dash', Rule::unique('document_categories', 'slug')->ignore($this->downloadCategory)],
            'status' => ['nullable'],
        ];
    }
}
