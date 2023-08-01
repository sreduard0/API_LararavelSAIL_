<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkPatientDoctorRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'medico_id' => ['required', 'integer'],
                'paciente_id' => ['required', 'integer'],
            ];
    }
    public function messages()
    {
        return
            [
                'medico_id' => 'Doctor invalid.',
                'paciente_id' => 'Patient invalid.',
            ];
    }
}
