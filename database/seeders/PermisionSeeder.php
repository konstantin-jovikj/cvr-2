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

        //Users

        Permision::create([
            'permision_name' => 'погледни-корисник'
        ]);
        Permision::create([
            'permision_name' => 'едитирај-корисник'
        ]);

        Permision::create([
            'permision_name' => 'бриши-корисник'
        ]);
        Permision::create([
            'permision_name' => 'додај-корисник'
        ]);


        //Resources

        Permision::create([
            'permision_name' => 'погледни-ресурс'
        ]);
        Permision::create([
            'permision_name' => 'едитирај-ресурс'
        ]);

        Permision::create([
            'permision_name' => 'бриши-ресурс'
        ]);
        Permision::create([
            'permision_name' => 'додај-ресурс'
        ]);



        //Documents

        Permision::create([
            'permision_name' => 'погледни-документ'
        ]);

        Permision::create([
            'permision_name' => 'едитирај-документ'
        ]);

        Permision::create([
            'permision_name' => 'бриши-документ'
        ]);

        Permision::create([
            'permision_name' => 'додај-документ'
        ]);


        //Cars

        Permision::create([
            'permision_name' => 'погледни-возило'
        ]);

        Permision::create([
            'permision_name' => 'едитирај-возило'
        ]);

        Permision::create([
            'permision_name' => 'бриши-возило'
        ]);

        Permision::create([
            'permision_name' => 'додај-возило'
        ]);


        //Finances

        Permision::create([
            'permision_name' => 'погледни-финансии'
        ]);

        Permision::create([
            'permision_name' => 'едитирај-финансии'
        ]);

        Permision::create([
            'permision_name' => 'бриши-финансии'
        ]);

        Permision::create([
            'permision_name' => 'додај-финансии'
        ]);


        //Authorized Signatory

        Permision::create([
            'permision_name' => 'авторизиран-потписник'
        ]);


        //Authorized Принтер

        Permision::create([
            'permision_name' => 'авторизиран-за-принтање'
        ]);
    }
}
