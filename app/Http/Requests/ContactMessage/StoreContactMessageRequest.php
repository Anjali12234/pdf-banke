<?php

namespace App\Http\Requests\ContactMessage;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactMessageRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required','email'],
            'phone' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ];
    }
}
