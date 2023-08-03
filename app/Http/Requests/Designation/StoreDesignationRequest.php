<?php

namespace App\Http\Requests\Designation;

use Illuminate\Foundation\Http\FormRequest;

class StoreDesignationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'title'=> ['required'],
            'english_title'=> ['nullable'],
        ];
    }
}
