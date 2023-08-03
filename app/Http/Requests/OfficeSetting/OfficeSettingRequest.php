<?php

namespace App\Http\Requests\OfficeSetting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OfficeSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'office_name' => ['required'],
            'office_english_name' => ['required'],
            'office_address' => ['required'],
            'office_english_address' => ['required'],
            'office_phone' => ['required'],
            'office_email' => ['required', 'email'],
            'office_cover_photo' => ['nullable', 'mimes:png,jpeg,jpg'],
            'office_logo' => ['nullable','image', 'mimes:png,jpg,jpeg'],
            'flag' => ['nullable','image', 'mimes:png,jpg,jpeg,gif'],   
            'office_ad_photo' => ['nullable','image', 'mimes:png,jpg,jpeg'],
            'office_chief_id' => ['required', Rule::exists('employees', 'id')],
            'information_officer_id' => ['required', Rule::exists('employees', 'id')],
            'map_url' => ['nullable', 'url'],
            'facebook_url' => ['nullable', 'url'],
            'twiter_url' => ['nullable', 'url'],
        ];  
    }
}
