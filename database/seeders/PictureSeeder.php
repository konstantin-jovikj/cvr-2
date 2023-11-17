<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Picture::create([
            'picture_name' => 'Предна Лева Дијагонала',
        ]);
        Picture::create([
            'picture_name' => 'Задна Десна Дијагонала',
        ]);
        Picture::create([
            'picture_name' => 'Поглед од Напред',
        ]);
        Picture::create([
            'picture_name' => 'Поглед од Назад',
        ]);
        Picture::create([
            'picture_name' => 'Плочка со Број на Шасија',
        ]);
        Picture::create([
            'picture_name' => 'Плочка со Масени Параметри',
        ]);
        Picture::create([
            'picture_name' => 'Волан и Предни Седишта',
        ]);
        Picture::create([
            'picture_name' => 'Задни Седишта',
        ]);
        Picture::create([
            'picture_name' => 'Мотор',
        ]);
        Picture::create([
            'picture_name' => 'Гепек',
        ]);
        Picture::create([
            'picture_name' => 'Стакла - 1',
        ]);
        Picture::create([
            'picture_name' => 'Стакла - 2',
        ]);
        Picture::create([
            'picture_name' => 'Стакла - 3',
        ]);
        Picture::create([
            'picture_name' => 'Тип и Број на Мотор',
        ]);
        Picture::create([
            'picture_name' => 'Плочка од Кука',
        ]);
        Picture::create([
            'picture_name' => 'Врска на Кука со Шасија',
        ]);
    }
}
