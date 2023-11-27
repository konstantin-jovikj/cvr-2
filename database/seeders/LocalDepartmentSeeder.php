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
            'city_id' => 9,
            'local_department_name' => 'ТАХО ПАЛАС ДООЕЛ Гевгелија',
            'cert_no' => 'ИТ - 109',
            'local_department_prefix' => 'АТ4',
            'department_address' => 'Борис Кидрич бр. 9',
            'phone' => '078/472-031',
            'email' => 'tahopalas@yahoo.com',
            'loc_dep_dsc' => 'Инспекција (контрола) на аналогни и дигитални тахографи',
            'start_date' => '2018-05-02',
            'end_date' => '2026-05-01'
        ]);

        LocalDepartment::create([
            'department_id' => 2,
            'city_id' => 27 	,
            'local_department_name' => 'Друштво за производство, промет и услуги АВТОКОНТРОЛ- СЕРВИС увоз-извоз ДООЕЛ Прилеп',
            'cert_no' => 'ИТ – 110',
            'local_department_prefix' => 'АТ2',
            'department_address' => 'Ул. Орде Чопела бр. 183',
            'phone' => '075/200-061; 048/551-900',
            'email' => 'avtokontrol-servis@live.com',
            'loc_dep_dsc' => 'Единечно одобрување на возила, одобрување на преправени возила',
            'start_date' => '2019-02-01',
            'end_date' => '2027-01-31'
        ]);

        LocalDepartment::create([
            'department_id' => 2,
            'city_id' => 9 ,
            'local_department_name' => 'Друштво за трговија и услуги ЦТП ГРУП ДООЕЛ Гевгелија/ ЦТП ГРУП Гевгелија',
            'cert_no' => 'ИТ – 111',
            'local_department_prefix' => 'АТ3',
            'department_address' => 'Ул. Борис Кидрич бр. 13',
            'phone' => '077/700-604; 034/611-971',
            'email' => 'dragicatcg@hotmail.com',
            'loc_dep_dsc' => 'Инспекција на аналогни и дигитални тахографи',
            'start_date' => '2019-02-01',
            'end_date' => '2027-01-31'
        ]);

        LocalDepartment::create([
            'department_id' => 2,
            'city_id' => 31 ,
            'local_department_name' => 'A-ТЕСТ ДОО Скопје',
            'cert_no' => 'ИТ – 113',
            'local_department_prefix' => 'AT1',
            'department_address' => 'Бојмија бр.8-2/1',
            'phone' => '02 5111 459  072 222 666',
            'email' => 'atest@atest.mk',
            'loc_dep_dsc' => 'Инспекција на аналогни и дигитални тахографи',
            'start_date' => '2019-02-25',
            'end_date' => '2027-02-24'
        ]);

        LocalDepartment::create([
            'department_id' => 2,
            'city_id' => 17 ,
            'local_department_name' => 'ДИКОС ДООЕЛ Кочани/Инспекциско тело',
            'cert_no' => 'ИТ – 114',
            'local_department_prefix' => 'АТ5',
            'department_address' => 'Ул. Крижевска бр.12',
            'phone' => '070/354-879; 033/275-001',
            'email' => 'info@dikos.mk',
            'loc_dep_dsc' => 'Инспекција на аналогни и дигитални тахографи',
            'start_date' => '2019-07-17',
            'end_date' => '2027-07-16'
        ]);

        LocalDepartment::create([
            'department_id' => 2,
            'city_id' => 29 ,
            'local_department_name' => 'Друштво за техничко испитување и анализа ПСС- Радовиш/Инспекциско тело Оддел за тахографи',
            'cert_no' => 'ИТ – 115',
            'local_department_prefix' => 'АТ6',
            'department_address' => 'ул. Индустриска б.б',
            'phone' => '075/479-801',
            'email' => 'pss.radovis@gmail.com',
            'loc_dep_dsc' => 'Инспекција на аналогни и дигитални тахографи',
            'start_date' => '2019-08-15',
            'end_date' => '2027-08-14'
        ]);

        LocalDepartment::create([
            'department_id' => 2,
            'city_id' => 31 ,
            'local_department_name' => 'АМ ЦЕРТ ДООЕЛ Скопје. Сектор за мобилитет. Центар за хомологација',
            'cert_no' => 'ИТ – 023',
            'local_department_prefix' => 'АТ7',
            'department_address' => 'бул. Борис Трајковски бр.21',
            'phone' => '',
            'email' => 'amcert@automakedonija.com.mk',
            'loc_dep_dsc' => 'Одобрување на единачно прегледано возило од категориите L, M, N, O, Т, S и R
            Одобрување на преправани и поправани возила од категориите L, M, N, О, Т и R
            Инспекција при утврдување и втиснување на идентификациски ознаки на возила (број на шасија и број на мотор)
            Одобрување на возила за превоз на опасни материи – АДР
            Одобрување на возила за превоз на лесно расипливи производи – ATП Инспекција на аналогни и дигитални тахографи
            Инспекција на подготвеноста на возилата за сообраќај (ЦЕМТ – ЕКМТ)
            Инспекција на цистерни за превоз на опасни материи',
            'start_date' => '2012-06-20',
            'end_date' => '2024-06-19'
        ]);

        LocalDepartment::create([
            'department_id' => 2,
            'city_id' => 31 ,
            'local_department_name' => 'ПСС – Центар за испитување на возила',
            'cert_no' => 'ИТ – 026',
            'local_department_prefix' => 'АТ8',
            'department_address' => 'Ул. Скупи бр.18',
            'phone' => '',
            'email' => 'www.pss.com.mk',
            'loc_dep_dsc' => 'Инспекција (контрола) на
            - Единечно одобрување на возила од категориите L,M,N,O,T,C,R,S;
            Инспекција на преправени и поправени возила во кој дополнително е вграден:
            - уред за погон на возилото на ТНГ,
            - уред за погон на возилото на КЗГ,
            - заштитни фолии или обоени стакла,
            - уред за спојување на моторните и приклучните возила – куки;
            - Одобрување на тип на возила од категориите L,M,N,O,T,C,R,S;
            - Евидентирање на промени кои не значат прeправки и поправки;
            - АДР одобрување и годишни технички прегледи на возила за пренос на опасни материи;
            - Преглед на возила кои пренесуваат лесно расипливи стоки АТП;
            - Инспекција на преправени возила од категориите L,M,N,O,T,C,R,S (секторски);
            - Инспекција при утврдување и втиснување на идентификациски ознаки на возила (број на шасија и број на мотор);
            - Инспекција на возила за подготвеност за сообраќај на моторни возила (ЕКМТ);
            - Испитување на мобилни машини во постапка на Идентификација и оценка на техничката состојба на возилата;',
            'start_date' => '2010-04-20',
            'end_date' => '2026-04-19'
        ]);


        LocalDepartment::create([
            'department_id' => 2,
            'city_id' => 25 ,
            'local_department_name' => 'ТАХОСЕРВИС ДООЕЛ Охрид. Инспекциско тело за аналогни тахографи, дигитални тахографи и таксаметри',
            'cert_no' => 'ИТ – 029',
            'local_department_prefix' => 'АТ9',
            'department_address' => 'Ул. Трајче Дојчиноски 12',
            'phone' => '070-761-269',
            'email' => 'taho_ohrid@yahoo.com',
            'loc_dep_dsc' => 'Инспекција (контрола) на аналогни тахографи, дигитални тахографи и таксаметри',
            'start_date' => '2010-06-11',
            'end_date' => '2026-06-10'
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


