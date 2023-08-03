<?php

namespace App\Http\Requests\Link;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'title'=> ['required'],
            'english_title'=> ['required'],
            'url'=> ['required'],
        ];
    }
}
