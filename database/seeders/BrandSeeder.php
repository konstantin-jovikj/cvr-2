<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Manufacturer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'manufacturer_id' => 1,
            'brand_name' => 'AUDI',
            'note' => '',
        ]);
        Brand::create([
            'manufacturer_id' => 1,
            'brand_name' => 'AUDI',
            'note' => '',
        ]);
        Brand::create([
            'manufacturer_id' => 2,
            'brand_name' => 'Mazda',
            'note' => '',
        ]);
        Brand::create([
            'manufacturer_id' => 3,
            'brand_name' => 'Mercedes-Benz',
            'note' => '',
        ]);
        Brand::create([
            'manufacturer_id' => 3,
            'brand_name' => 'Mercedes-Benz',
            'note' => '',
        ]);
    }
}
