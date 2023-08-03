<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => ['required', 'mimes:png,jpg,jpeg'],
            'title' => ['required'],
            'english_title' => ['required'],
        ];
    }
}
