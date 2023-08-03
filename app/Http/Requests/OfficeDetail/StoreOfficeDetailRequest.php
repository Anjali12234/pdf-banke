<?php

namespace App\Http\Requests\OfficeDetail;

use App\Enums\OfficeDetailTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class StoreOfficeDetailRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required'],
            'english_title' => ['required'],
            'type' => ['nullable', new Enum(OfficeDetailTypeEnum::class), Rule::unique('office_details', 'type')],
            'slug' => ['required', 'alpha_dash', Rule::unique('office_details', 'slug')],
            'position' => ['nullable', 'integer'],
            'description' => ['required'],
            'english_description' => ['required'],
            'status' => ['nullable', 'boolean'],
        ];
    }
}
