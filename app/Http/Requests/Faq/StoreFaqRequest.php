<?php

namespace App\Http\Requests\Faq;

use Illuminate\Foundation\Http\FormRequest;

class StoreFaqRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'answer'=>  ['required'],
            'question'=> ['required'],
            'english_answer'=> ['required'],
            'english_question'=> ['required'],
        ];
    }
}
