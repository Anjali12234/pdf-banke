<?php

namespace App\Http\Requests\DownloadList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDownloadListRequest extends FormRequest
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
            'slug' => ['nullable', 'alpha_dash', Rule::unique('download_lists', 'slug')->ignore($this->downloadList)],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf'],
            'download_category_id' =>  ['required'],
            'publisher' => ['required'],
            'english_publisher' => ['required'],
            'publish_date' => ['required'], 
            'status' => ['nullable'],
        ];
    }
}
