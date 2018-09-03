<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && $this->user()->has('profile');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'guardian_sponcor_name' => 'required|string',
            'guardian_occupation' => 'required|string',
            'guardian_full_name' => 'required|string',
            'guardian_address' => 'required|string',
            'guardian_phone' => 'required|string',
            'guardian_email' => 'nullable|email',
            // Appearance
            'eye_color' => 'required|string',
            'height' => 'required|string',
            // 'width' => 'required|string',
            'hobby' => 'required|string',
            'avatar' => 'required|image',
            'weight' => 'required|string',
            'hair_color' => 'required|string',
            // Personal
            'programme' => 'required|string',
            'role_model' => 'required|string',
            'place_of_birth' => 'required|string',
            'favourite_color' => 'required|string',
            'state_of_origin' => 'required|string',
            'favourite_artiste' => 'required|string',
            'name_of_institution' => 'required|string',
            'local_government_area' => 'required|string',
        ];
    }
}
