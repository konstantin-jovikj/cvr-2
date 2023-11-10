<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'country_name' => 'Р.С.Македонија',
            'code' => 'МКД',
        ]);

        Country::create([
            'country_name' => 'Р.Србија',
            'code' => 'СРБ',
        ]);
    }
}
