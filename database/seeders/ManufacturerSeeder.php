<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacturer::create([
            'name' => 'AUDI',
            'address' => 'AUDI AG D-85045 INGOLSTADT-GERMANY',
            'note' => '',
        ]);
        Manufacturer::create([
            'name' => 'MAZDA',
            'address' => 'Mazda Motor Corporation 3-1 Shinchi, Fuchu-cho, Aki-gun, Hiroshima 730-8670 Japan	',
            'note' => '',
        ]);
        Manufacturer::create([
            'name' => 'MERCEDES-BENZ AG',
            'address' => 'DE-70372, Stuttgart, Germany',
            'note' => '',
        ]);
    }
}
