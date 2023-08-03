<?php

namespace App\Http\Requests\OfficeHeader;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfficeHeaderRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'addMoreInputFields.*.title' => 'required',
            'addMoreInputFields.*.english_title' => 'nullable',
            'addMoreInputFields.*.position' => 'nullable',
        ];
    }
}
