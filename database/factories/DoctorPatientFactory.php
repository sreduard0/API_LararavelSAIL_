<?php

namespace Database\Factories;

use App\Models\DoctorModel;
use App\Models\DoctorPatientModel;
use App\Models\PatientModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DoctorPatientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'doctor_id' => DoctorModel::factory()->create(),
            'patient_id' => PatientModel::factory()->create(),
        ];
    }
    protected $model = DoctorPatientModel::class;
}
