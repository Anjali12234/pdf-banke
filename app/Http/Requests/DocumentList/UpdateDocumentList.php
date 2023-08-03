<?php

namespace App\Http\Requests\DocumentList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDocumentList extends FormRequest
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
            'slug' => ['required', 'alpha_dash', Rule::unique('document_lists', 'slug')->ignore($this->documentList)],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf'],
            'document_category_id' =>  ['required'],
            'publisher' => ['required'],
            'english_publisher' => ['required'],
            'publish_date' => ['required'], 
            'status' => ['nullable'],
        ];
    }
}
