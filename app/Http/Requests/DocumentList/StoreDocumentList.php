<?php

namespace App\Http\Requests\DocumentList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDocumentList extends FormRequest
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
            'slug' => ['required', 'alpha_dash', Rule::unique('document_lists', 'slug')],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf,jfif'],
            'document_lists' => ['required'],
            'publisher' => ['required'],
            'english_publisher' => ['required'],
            'publish_date' => ['required'], 
            'status' => ['nullable'],
        ];
    }
}
