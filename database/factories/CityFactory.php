<?php

namespace Database\Factories;

use App\Models\CitiesModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CityFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'=> fake()->city(),
            'state'=> fake()->state(),
        ];

    }

    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }

    protected $model = CitiesModel::class;
}
