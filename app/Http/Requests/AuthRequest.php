<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8'],
            ];
    }
    public function messages()
    {
        return
            [
                'email' => 'Email invalid.',
                'password' => 'Password invalid.',
            ];
    }
}
