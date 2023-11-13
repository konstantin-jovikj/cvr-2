<?php

namespace Database\Seeders;

use App\Models\ConfirmationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfirmationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConfirmationType::create([
            'confirmation_name' => 'COC',
        ]);
        ConfirmationType::create([
            'confirmation_name' => 'TUV',
        ]);
        ConfirmationType::create([
            'confirmation_name' => 'CO2',
        ]);
    }
}
