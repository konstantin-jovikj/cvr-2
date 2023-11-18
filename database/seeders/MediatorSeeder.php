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
            'local_department_id' => 4,
            'mediator_name' => 'АМД ПРИЛЕП',
            'mediator_address' => 'Моша Пијаде 230 - Прилеп',
            'mediator_phone' => '048 402220',
            'note' => '',
        ]);
        Mediator::create([
            'local_department_id' => 4,
            'mediator_name' => 'САСО КРСТЕВСКИ КОМПИР',
            'mediator_address' => 'Првомајска 23 - Скопје',
            'mediator_phone' => '02 4220220',
            'note' => '',
        ]);
        Mediator::create([
            'local_department_id' => 4,
            'mediator_name' => 'БОБИ АМЕРИТ',
            'mediator_address' => 'Партизанска 59 - Скопје',
            'mediator_phone' => '02 5940220',
            'note' => '',
        ]);
        Mediator::create([
            'local_department_id' => 4,
            'mediator_name' => 'Брвеница',
            'mediator_address' => 'с.Брвеница - Тетово',
            'mediator_phone' => '044 196342',
            'note' => '',
        ]);

    }
}
