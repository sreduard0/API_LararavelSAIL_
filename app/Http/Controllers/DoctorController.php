<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkPatientDoctorRequest;
use App\Http\Requests\NewDoctorRequest;
use App\Models\DoctorModel;
use App\Models\DoctorPatientModel;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = DoctorModel::select('id', 'name', 'specialty')->get();
        return response()->json($doctors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(NewDoctorRequest $request)
    {
        $newDoctor = $request->all();
        $data = [
            'name' => $newDoctor['nome'],
            'specialty' => $newDoctor['especialidade'],
            'cities_id' => $newDoctor['cidade_id']
        ];
        if (DoctorModel::create($data)) {
            return response()->json('Doctor successfully added.', 200);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(int $city)
    {
        $doctors = DoctorModel::select('id', 'name', 'specialty')->where('cities_id', $city)->get();
        return response()->json($doctors);
    }

    /**
     * Link patient to doctor.
     */
    public function linkPatientAndDoctor(LinkPatientDoctorRequest $request, $doctor_id)
    {
        $data = [
            'doctor_id' => $request->get('medico_id'),
            'patient_id' => $request->get('paciente_id'),
        ];

        if (DoctorPatientModel::where($data)->exists()) {
            return response()->json('Patient already linked to the doctor', 200);
        }

        if (DoctorPatientModel::create($data)) {
            return response()->json('Patient successfully linked.', 200);
        } else {
            return response()->json('Error linking patient.', 400);
        }
    }

    /**
     * List pacient and doctor.
     */
    public function listPatientAndDoctor(int $doctor_id)
    {
        if (DoctorModel::find($doctor_id)->exists()) {
            $doctor = DoctorModel::with('patients')->find($doctor_id);
            return response()->json($doctor->patients);
        } else {
            return response()->json('Doctor not found.', 404);
        }
    }
}
