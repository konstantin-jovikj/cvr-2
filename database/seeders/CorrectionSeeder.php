<?php

namespace Database\Seeders;

use App\Models\Correction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorrectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Correction::create([
            'correction_name' => 'Нема преправка',
        ]);
        Correction::create([
            'correction_name' => 'Има преправка',
        ]);
    }
}
