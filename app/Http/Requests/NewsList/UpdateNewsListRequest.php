<?php

namespace App\Http\Requests\NewsList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNewsListRequest extends FormRequest
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
            'slug' => ['required', 'alpha_dash', Rule::unique('news_lists', 'slug')->ignore($this->newsList)],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf'],
            'news_category_id' => ['required'],
            'publisher' => ['required'],
            'english_publisher' => ['required'],
            'publish_date' => ['required'],
            'status' => ['nullable'],
        ];
    }
}
