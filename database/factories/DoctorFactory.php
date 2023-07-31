<?php

namespace Database\Factories;

use App\Models\DoctorModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DoctorFactory extends Factory
{

    public function definition(): array
    {
        $specialitys = [
            "Cardiologia",
            "Dermatologia",
            "Ginecologia",
            "Pediatria",
            "Ortopedia",
            "Neurologia",
            "Oftalmologia",
            "Oncologia",
            "Psiquiatria",
            "Urologia"
        ];
        return [
            'name' => fake()->name(),
            'speciality' => fake()->randomElement($specialitys),
        ];
    }
    protected $model = DoctorModel::class;
}
