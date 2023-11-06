<?php

namespace Database\Seeders;

use App\Models\LocalDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocalDepartment::create([
            'city_id' => 1,
            'department_id' => 1,
            'local_department_name' => 'СВР Гостивар',
            'department_address' => 'Браќа Гиновски бб'
        ]);

        LocalDepartment::create([
            'city_id' => 1,
            'department_id' => 2,
            'local_department_name' => 'Инспекциско тело - Гостивар',
            'local_department_prefix' => 'АГ1',
            'department_address' => 'Некоја Улица б125/3'
        ]);

        LocalDepartment::create([
            'city_id' => 1,
            'department_id' => 3,
            'local_department_name' => 'АМСМ Гостивар',
            'department_address' => 'Браќа Гиновски 569/4'
        ]);

        LocalDepartment::create([
            'city_id' => 2,
            'department_id' => 1,
            'local_department_name' => 'СВР Центар',
            'department_address' => 'Партизански Одреди бб'
        ]);

        LocalDepartment::create([
            'city_id' => 2,
            'department_id' => 2,
            'local_department_name' => 'А-Тест Скопје',
            'local_department_prefix' => 'АТ1',
            'department_address' => 'Илинденска 49'
        ]);

        LocalDepartment::create([
            'city_id' => 2,
            'department_id' => 3,
            'local_department_name' => 'АМСМ Скопје',
            'department_address' => 'Александар Македонски 34-4'
        ]);

        LocalDepartment::create([
            'city_id' => 3,
            'department_id' => 1,
            'local_department_name' => 'СВР Тетово',
            'department_address' => 'Партизански Одреди бб'
        ]);

        LocalDepartment::create([
            'city_id' => 3,
            'department_id' => 2,
            'local_department_name' => 'ИТ-Тетово',
            'local_department_prefix' => 'ИТ1',
            'department_address' => 'Лирија 109'
        ]);

        LocalDepartment::create([
            'city_id' => 3,
            'department_id' => 3,
            'local_department_name' => 'АМСМ Тетово',
            'department_address' => '29 Ноември - 4'
        ]);
    }
}


