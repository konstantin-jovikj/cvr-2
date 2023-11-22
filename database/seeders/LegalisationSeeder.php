<?php

namespace Database\Seeders;

use App\Models\Legalisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LegalisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Legalisation::create([
            'legalisation_name' => 'Легализација',
        ]);
        Legalisation::create([
            'legalisation_name' => 'Не е легализација',
        ]);
    }
}
