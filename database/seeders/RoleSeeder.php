<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'SuperAdmin'
        ]);

        Role::create([
            'role_name' => 'Администратор'
        ]);

        Role::create([
            'role_name' => 'Корисник со Високи овластувања'
        ]);

        Role::create([
            'role_name' => 'Корисник со Средни овластувања'
        ]);

        Role::create([
            'role_name' => 'Корисник со Основни овластувања'
        ]);

        Role::create([
            'role_name' => 'Контролор'
        ]);

    }
}
