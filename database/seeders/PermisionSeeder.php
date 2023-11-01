<?php

namespace Database\Seeders;

use App\Models\Permision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permision::create([
            'permision_name' => 'view_user'
        ]);
        Permision::create([
            'permision_name' => 'edit_user'
        ]);
        Permision::create([
            'permision_name' => 'update_user'
        ]);
        Permision::create([
            'permision_name' => 'delete_user'
        ]);
        Permision::create([
            'permision_name' => 'add_user'
        ]);


    }
}
