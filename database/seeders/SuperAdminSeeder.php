<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'MvrSuperAdmin',
            'email' => 'mvr.superadmin@superadmin.com',
            'department_id' => 1,
            'password'=> Hash::make('11111111')
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'ItSuperAdmin',
            'email' => 'it.superadmin@superadmin.com',
            'department_id' => 2,
            'password'=> Hash::make('11111111')
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'StpSuperAdmin',
            'email' => 'stp.superadmin@superadmin.com',
            'department_id' => 3,
            'password'=> Hash::make('11111111')
        ]);
    }
}
