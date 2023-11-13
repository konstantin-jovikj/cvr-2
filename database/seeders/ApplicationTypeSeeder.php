<?php

namespace Database\Seeders;

use App\Models\ApplicationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApplicationType::create([
            'app_type_name' => 'БАРАЊЕ ЗА ЕДИНЕЧНО ОДОБРЕНИЕ',
        ]);
        ApplicationType::create([
            'app_type_name' => 'БАРАЊЕ ЗА ИДЕНТИФИКАЦИЈА',
        ]);
        ApplicationType::create([
            'app_type_name' => 'БАРАЊЕ ЗА ИДЕНТИФИКАЦИЈА И ОЦЕНА НА ТЕХНИЧКАТА СОСТОЈБА',
        ]);
        ApplicationType::create([
            'app_type_name' => 'БАРАЊЕ ЗА ОДОБРУВАЊЕ НА ПРЕПРАВЕНО/ПОПРАВЕНО ВОЗИЛО',
        ]);
        ApplicationType::create([
            'app_type_name' => 'БАРАЊЕ ЗА ОДОБРУВАЊЕ НА ТИП НА ВОЗИЛО',
        ]);
        ApplicationType::create([
            'app_type_name' => 'ИЗДАВАЊЕ НА TUV СЕРТИФИКАТ',
        ]);
        ApplicationType::create([
            'app_type_name' => 'ДОДЕЛУВАЊЕ НА БРОЈ НА МОТОР',
        ]);
        ApplicationType::create([
            'app_type_name' => 'ДОДЕЛУВАЊЕ НА БРОЈ НА ШАСИЈА',
        ]);
    }
}
