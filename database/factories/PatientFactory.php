<?php

namespace Database\Factories;

use App\Models\PatientModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PatientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'cpf' => fake()->randomNumber(11),
            'phone' => fake()->randomNumber(11),
        ];
    }
    protected $model = PatientModel::class;
}
