<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'name' => ['required'],
            'image' => ['required','mimes:png,jpg,jpeg'],
            'department_id' => ['nullable','string'],
            'designation_id' => ['required','string'],
            'phone' => ['nullable'],
            'email' => ['nullable'],
            'address' => ['nullable'],
            'position' => ['nullable','integer'],
        ];
    }
}
