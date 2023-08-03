<?php

namespace App\Http\Requests\OfficeHeader;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfficeHeaderRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'title' =>['required'],
            'english_title'=>['required'],
            'position'=>['required']
        ];
    }
}
