<?php

namespace Database\Seeders;

use App\Models\ModificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModificationType::create([
            'modification_name' => 'Вграден уред за ТНГ',
        ]);
        ModificationType::create([
            'modification_name' => 'Вградени клима фолии',
        ]);
        ModificationType::create([
            'modification_name' => 'Вградена кука',
        ]);
        ModificationType::create([
            'modification_name' => 'Промена на мотор',
        ]);
        ModificationType::create([
            'modification_name' => 'Дупли команди - Авто Школа',
        ]);
        ModificationType::create([
            'modification_name' => 'Промена на број на седишта',
        ]);
        ModificationType::create([
            'modification_name' => 'Промена на Категорија M1-N1-M1',
        ]);
        ModificationType::create([
            'modification_name' => 'Промена на Категорија N1-N2-N1',
        ]);
        ModificationType::create([
            'modification_name' => 'Извршена надградба на возило - Кран',
        ]);
        ModificationType::create([
            'modification_name' => 'Извршена надградба на возило - Кипер',
        ]);
        ModificationType::create([
            'modification_name' => 'Поставен разладен уред',
        ]);
        ModificationType::create([
            'modification_name' => 'Промена на податоците за масите',
        ]);
    }
}
