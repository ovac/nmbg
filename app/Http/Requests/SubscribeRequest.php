<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'required|numeric',
            'channel' => 'required|string|in:mtn-gh,airtel-gh,vodafone-gh,tigo-gh',
            'agree' => 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'agree.accepted' => 'You must agree to the terms to continue',
        ];
    }
}
