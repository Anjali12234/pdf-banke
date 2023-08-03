<?php

namespace App\Http\Requests\Photo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePhotoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => ['required'],
            'english_title' => ['required'],
            'slug' => ['required', 'alpha_dash', Rule::unique('photos', 'slug')],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg']
        ];
    }
}
