<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkPatientDoctorRequest;
use App\Http\Requests\NewDoctorRequest;
use App\Models\DoctorModel;
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
    public function linkPatient(LinkPatientDoctorRequest $request)
    {
    }
}
