<?php

namespace App\Http\Requests\DownloadList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDownloadListRequest extends FormRequest
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
            'download_category_id' => ['required'],
            'publisher' => ['required'],
            'english_publisher' => ['required'],
            'publish_date' => ['required'], 
            'status' => ['nullable'],
        ];
    }
}
