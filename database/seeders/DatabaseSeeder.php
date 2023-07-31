<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CitiesModel;
use App\Models\DoctorModel;
use App\Models\PatientModel;
use Database\Factories\CityFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        CitiesModel::factory()->count(10)->create();
        DoctorModel::factory()->count(5)->create();
        PatientModel::factory()->count(8)->create();
    }
}
