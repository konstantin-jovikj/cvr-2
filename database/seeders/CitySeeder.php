<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'zip' => '1230',
            'city_name' => 'Гостивар'
        ]);

        City::create([
            'zip' => '1000',
            'city_name' => 'Скопје'
        ]);

        City::create([
            'zip' => '1200',
            'city_name' => 'Тетово'
        ]);
    }
}
