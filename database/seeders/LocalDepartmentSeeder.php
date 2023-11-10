<?php

namespace Database\Seeders;

use App\Models\LocalDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        LocalDepartment::create([
            'department_id' => 2,
            'local_department_name' => 'ТАХО ПАЛАС ДООЕЛ Гевгелија',
            'cert_no' => 'ИТ - 109',
            'local_department_prefix' => '',
            'department_address' => 'Борис Кидрич бр. 9, 1480 Гевгелија',
            'phone' => '078/472-031',
            'email' => 'tahopalas@yahoo.com',
            'loc_dep_dsc' => 'Инспекција (контрола) на аналогни и дигитални тахографи',
            'start_date' => 2018-05-02,
            'end_date' => 2026-05-01
        ]);

        LocalDepartment::create([
            'department_id' => 2,
            'local_department_name' => 'Друштво за производство, промет и услуги АВТОКОНТРОЛ- СЕРВИС увоз-извоз ДООЕЛ Прилеп',
            'cert_no' => 'ИТ – 110',
            'local_department_prefix' => '',
            'department_address' => 'Ул. Орде Чопела бр. 183, 7500 Прилеп',
            'phone' => '075/200-061; 048/551-900',
            'email' => 'avtokontrol-servis@live.com',
            'loc_dep_dsc' => 'Единечно одобрување на возила, одобрување на преправени возила',
            'start_date' => 2019-02-01,
            'end_date' => 2027-01-31
        ]);


        LocalDepartment::create([
            'department_id' => 1,
            'local_department_name' => 'СВР Гостивар',
            'department_address' => 'Браќа Гиновски бб'
        ]);


        LocalDepartment::create([
            'department_id' => 3,
            'local_department_name' => 'АМСМ Гостивар',
            'department_address' => 'Браќа Гиновски 569/4'
        ]);

        LocalDepartment::create([
            'department_id' => 1,
            'local_department_name' => 'СВР Центар',
            'department_address' => 'Партизански Одреди бб'
        ]);



        LocalDepartment::create([
            'department_id' => 3,
            'local_department_name' => 'АМСМ Скопје',
            'department_address' => 'Александар Македонски 34-4'
        ]);

        LocalDepartment::create([
            'department_id' => 1,
            'local_department_name' => 'СВР Тетово',
            'department_address' => 'Партизански Одреди бб'
        ]);

        LocalDepartment::create([
            'department_id' => 3,
            'local_department_name' => 'АМСМ Тетово',
            'department_address' => '29 Ноември - 4'
        ]);
    }
}


