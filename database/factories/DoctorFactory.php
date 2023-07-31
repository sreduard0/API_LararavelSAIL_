<?php

namespace Database\Factories;

use App\Models\CitiesModel;
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
            'specialty' => fake()->randomElement($specialitys),
            'cities_id' => CitiesModel::factory()->create()
        ];
    }
    protected $model = DoctorModel::class;
}
