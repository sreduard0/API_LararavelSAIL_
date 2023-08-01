<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewPatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\PatientModel;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(NewPatientRequest $request)
    {
        $data = [
            'name' => $request->get('nome'),
            'cpf' => $request->get('cpf'),
            'phone' => $request->get('celular'),
        ];

        if (PatientModel::create($data)) {
            return response()->json('Patient successfully added.', 200);
        } else {
            return response()->json('Error adding patient.', 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, int $patient_id)
    {
        $data = [
            'name' => $request->get('nome'),
            'phone' => $request->get('celular'),
        ];

        $patient = PatientModel::find($patient_id);
        if ($patient) {
            $patient->update($data);
            return response()->json('Patient updated successfully.', 200);
        } else {
            return response()->json('Patient not found.', 404);
        }
    }
}
