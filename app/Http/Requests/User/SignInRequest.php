<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class SignInRequest extends BaseRequest
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
            'email' => 'required|email',
            'password' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email message is required',
            'email.email' => '',
            'password.required' => 'Password is required',
            'password.min' => '',
        ];
    }
}
