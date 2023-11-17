<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create([
            'image_name' => 'Предна Лева Дијагонала',
        ]);
        Image::create([
            'image_name' => 'Задна Десна Дијагонала',
        ]);
        Image::create([
            'image_name' => 'Поглед од Напред',
        ]);
        Image::create([
            'image_name' => 'Поглед од Назад',
        ]);
        Image::create([
            'image_name' => 'Плочка со Број на Шасија',
        ]);
        Image::create([
            'image_name' => 'Плочка со Масени Параметри',
        ]);
        Image::create([
            'image_name' => 'Волан и Предни Седишта',
        ]);
        Image::create([
            'image_name' => 'Задни Седишта',
        ]);
        Image::create([
            'image_name' => 'Мотор',
        ]);
        Image::create([
            'image_name' => 'Гепек',
        ]);
        Image::create([
            'image_name' => 'Стакла - 1',
        ]);
        Image::create([
            'image_name' => 'Стакла - 2',
        ]);
        Image::create([
            'image_name' => 'Стакла - 3',
        ]);
        Image::create([
            'image_name' => 'Тип и Број на Мотор',
        ]);
        Image::create([
            'image_name' => 'Плочка од Кука',
        ]);
        Image::create([
            'image_name' => 'Врска на Кука со Шасија',
        ]);
    }
}
