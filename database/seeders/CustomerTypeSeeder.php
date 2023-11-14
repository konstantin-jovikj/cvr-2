<?php

namespace Database\Seeders;

use App\Models\CustomerType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerType::create([
            'customer_type' => 'Приватно лице',
        ]);

        CustomerType::create([
            'customer_type' => 'Правно лице',
        ]);
    }
}
