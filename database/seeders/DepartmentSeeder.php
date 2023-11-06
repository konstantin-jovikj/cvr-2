<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'department_name' => 'МВР - Министерство за внатрешни работи',
        ]);

        Department::create([
            'department_name' => 'ИТ - Инспекциски тела',
        ]);

        Department::create([
            'department_name' => 'СТП - Станици за технички преглед',
        ]);
    }
}
