<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'nome' => ['required', 'max:100'],
                'celular' => ['required', 'max:20'],
            ];
    }
    public function messages()
    {
        return
            [
                'nome' => 'Name invalid.',
                'celular' => 'Phone invalid.',
            ];
    }
}
