<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'manufacturer_id' => 1,
            'brand_id' => 1,
            'type_name' => '',
            'commercial_mark' => 'A4',
            'variant' => '',
            'configuration' => '',
            'note' => '',
        ]);
        Type::create([
            'manufacturer_id' => 1,
            'brand_id' => 2,
            'type_name' => '',
            'commercial_mark' => 'A6 Limousine',
            'variant' => '',
            'configuration' => '',
            'note' => '',
        ]);

        Type::create([
            'manufacturer_id' => 2,
            'brand_id' => 3,
            'type_name' => '',
            'commercial_mark' => '323 HB M5 LX',
            'variant' => '',
            'configuration' => '',
            'note' => '',
        ]);
        Type::create([
            'manufacturer_id' => 3,
            'brand_id' => 4,
            'type_name' => '143',
            'commercial_mark' => 'B 180 CDI',
            'variant' => '',
            'configuration' => '',
            'note' => '',
        ]);
        Type::create([
            'manufacturer_id' => 3,
            'brand_id' => 5,
            'type_name' => '',
            'commercial_mark' => 'E 350 CDI 4MATIC',
            'variant' => '',
            'configuration' => '',
            'note' => '',
        ]);
    }
}
