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
            'permision_name' => 'погледни-корисник'
        ]);
        Permision::create([
            'permision_name' => 'едитирај-корисник'
        ]);
        // Permision::create([
        //     'permision_name' => 'update_user'
        // ]);
        Permision::create([
            'permision_name' => 'бриши-корисник'
        ]);
        Permision::create([
            'permision_name' => 'додај-корисник'
        ]);


    }
}
