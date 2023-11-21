<?php

namespace Database\Seeders;

use App\Models\ModifiedOrRepaired;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModifiedOrRepairedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModifiedOrRepaired::create([
            'name' => 'Преправено',
        ]);
        ModifiedOrRepaired::create([
            'name' => 'Поправено',
        ]);
    }
}
