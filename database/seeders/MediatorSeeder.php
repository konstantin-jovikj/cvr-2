<?php

namespace Database\Seeders;

use App\Models\Mediator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mediator::create([
            'mediator_name' => 'АМД ПРИЛЕП',
            'note' => '',
        ]);
        Mediator::create([
            'mediator_name' => 'САСО КРСТЕВСКИ КОМПИР',
            'note' => '',
        ]);
        Mediator::create([
            'mediator_name' => 'БОБИ АМЕРИТ',
            'note' => '',
        ]);
        Mediator::create([
            'mediator_name' => 'EPS',
            'note' => '',
        ]);
        Mediator::create([
            'mediator_name' => 'Брвеница',
            'note' => '',
        ]);

    }
}
