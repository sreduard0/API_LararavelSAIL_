<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkPatientDoctorRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'nome' => ['required', 'max:100'],
                'especialidade' => ['required', 'max:100'],
                'cidade_id' => ['integer'],
            ];
    }
    public function messages()
    {
        return
            [
                'nome' => 'Name invalid.',
                'especialidade' => 'Specialty invalid.',
                'cidade_id' => 'City invalid.',
            ];
    }
}
