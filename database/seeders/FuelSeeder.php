<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fuel::create([
            'fuel_type' => 'Бензин',
            'note' => ''
        ]);
        Fuel::create([
            'fuel_type' => 'Дизел',
            'note' => ''
        ]);
        Fuel::create([
            'fuel_type' => 'Хибрид.Бензин/Електро',
            'note' => ''
        ]);
        Fuel::create([
            'fuel_type' => 'Бензин/КЗ',
            'note' => ''
        ]);
        Fuel::create([
            'fuel_type' => 'Бензин/ТНГ',
            'note' => ''
        ]);
        Fuel::create([
            'fuel_type' => 'Електро',
            'note' => ''
        ]);
        Fuel::create([
            'fuel_type' => 'CNG/КЗГ',
            'note' => ''
        ]);
        Fuel::create([
            'fuel_type' => 'Хибрид.Дизел/Електро',
            'note' => ''
        ]);
    }
}
