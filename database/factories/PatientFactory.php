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
            'cpf' => rand(10000000000, 99999999999),
            'phone' => fake()->phoneNumber(13),
        ];
    }
    protected $model = PatientModel::class;
}
