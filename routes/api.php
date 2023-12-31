<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// ROTAS DE ATIVIDADES

// ROTAS CRUD DOUTOR
Route::get('medicos', [DoctorController::class, 'index']);
Route::get('cidades/{city}/medicos', [DoctorController::class, 'show']);
Route::post('medicos', [DoctorController::class, 'store'])->middleware('auth:api');
Route::post('medicos/{doctor_id}/pacientes', [DoctorController::class, 'linkPatientAndDoctor'])->middleware('auth:api');
Route::get('medicos/{doctor_id}/pacientes', [DoctorController::class, 'listPatientAndDoctor'])->middleware('auth:api');

// ROTAS CRUD CIDADES
Route::get('cidades', [CitiesController::class, 'index']);

// ROTAS CRUD PACIENTES
Route::post('pacientes', [PatientController::class, 'store'])->middleware('auth:api');
Route::put('pacientes/{patient_id}', [PatientController::class, 'update'])->middleware('auth:api');


// ROTAS DE AUTENTICAÇÃO
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth:api');
Route::get('user', [AuthController::class, 'user'])->middleware('auth:api');
