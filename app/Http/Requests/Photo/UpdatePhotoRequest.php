<?php

namespace App\Http\Requests\Photo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePhotoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'title' => ' required',
            'english_title' => ' required',
            'slug' => ['required', 'alpha_dash', Rule::unique('photos', 'slug')->ignore($this->photo)],
            'files'=>['nullable','array'],
            'files.*'=>['mimes:png,jpg,jpeg']
        ];
    }
}
