<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewPatientRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'nome' => ['required', 'max:100'],
                'cpf' => ['required', 'max:20'],
                'celular' => ['required', 'max:20'],
            ];
    }
    public function messages()
    {
        return
            [
                'nome' => 'Name invalid.',
                'cpf' => 'CPF invalid.',
                'celular' => 'Phone invalid.',
            ];
    }
}
