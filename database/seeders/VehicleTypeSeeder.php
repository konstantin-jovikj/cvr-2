<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleType::create([
            'vehicle_type' => 'Патничко',
        ]);
        VehicleType::create([
            'vehicle_type' => 'Товарно',
        ]);
        VehicleType::create([
            'vehicle_type' => 'Приклучно',
        ]);
    }
}
