<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'title' => 'required',
            'english_title' => 'required',
            'image' => ['nullable','mimes:png,jpg,jpeg'],
        ];
    }
}
