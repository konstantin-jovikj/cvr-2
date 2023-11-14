<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' => 'CW',
            'category_desc' => 'Автобус на едно ниво',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'L1e',
            'category_desc' => 'Возила со две тркала',
            'appendix' => 'Табела 2',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'L2e',
            'category_desc' => 'Возила со три тркала',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'L3e',
            'category_desc' => 'Возила со две тркала - мотоцикл со странична приколка со мотор поголем од 50 cm3 и/или со максимална конструкциски определена брзина поголема од 45 кm/h',
            'appendix' => 'Табела 2',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'L4e',
            'category_desc' => 'Возила со три тркала - мотоцикл со странична приколка со мотор со зафатнина поголема од 50 cm3 и/или со максимална конструкциски определена брзина поголема од 45 кm/h',
            'appendix' => 'Табела 2',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'L5e',
            'category_desc' => 'Возила со три тркала симетрично поставени по должината на оската на возилото чија работна зафатнина на моторот е поголема од 50 см3 и/или со максимална брзина која надминува 45 km/h',
            'appendix' => 'Табела 2',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'L6e',
            'category_desc' => 'Лесни четирицикли со маса на неоптоварено возило помала од 350 kg. со максимална брзина што не надминува 45km/h и со зафатнина на мотор до 50 cm3, со помала моќност од 4 кW за мотори со ел. погон',
            'appendix' => 'Табела 2',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'L7e',
            'category_desc' => 'Четирицикл',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'L7e-CU',
            'category_desc' => 'Тежок полузатворен четирицикл за превоз на стока	',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'M1',
            'category_desc' => 'Возила за превоз на патници со најмногу 8 седишта не вклучувајќи го седиштето на возачот',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'M1G',
            'category_desc' => 'M1G',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'M2',
            'category_desc' => 'Возила за превоз на патници со повеќе од осум седишта не вклучувајќи го седиштето на возачот и со максимална маса до најмногу 5 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'M3',
            'category_desc' => 'Возила за превоз на патници со повеќе од осум седишта не вклучувајќи го седиштето на возачот и со максимална маса која надминува 5 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'N1',
            'category_desc' => 'Возила за превоз на стоки со максимална маса заклучно до 3,5 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'N1G',
            'category_desc' => 'Товарно возило со зголемена проодност',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'N2',
            'category_desc' => 'Возила за превоз на стоки со максимална маса што надминува 3,5 тони меѓутоа до најмногу 12 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'N3',
            'category_desc' => 'Возила за превоз на стоки со максимална маса што надминува 12 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'N3G',
            'category_desc' => 'Товарно возило со зголемена проодност',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'O1',
            'category_desc' => 'Едноосни приколки (вклучувајки ги полуприколките) со максимална маса која не надминува 0,75 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'O2',
            'category_desc' => 'Приколки со максимална маса која надминува 0,75 се до 3,5 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'O3',
            'category_desc' => 'Приколки со максимална маса која надминува 3,5 тони, но не надминува 10 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'O4',
            'category_desc' => 'Приколки со максимална маса која надминува 10 тони',
            'appendix' => 'Табела 1 од Прилог II',
            'note' => 'од 01.07.2016',
        ]);
        Category::create([
            'category_name' => 'R1',
            'category_desc' => 'Приколки, чија сума на технички дозволените оскини оптоварувања не надминува 1500kg',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'R2',
            'category_desc' => 'Приколки, чија сума на технички дозволените оскини оптоварувања надминува 1500kg меѓутоа не надминува 3500kg',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'R3',
            'category_desc' => 'Приколки, чија сума на технички дозволените оскини оптоварувања надминува 3500kg меѓутоа не надминува 21000kg',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'R4',
            'category_desc' => 'Приколки, чија сума на технички дозволените оскини оптоварувања надминува 21000kg.',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'T1',
            'category_desc' => 'Според "Службен весник на РМ" бр.16 од 05.02.2010 година',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'T2',
            'category_desc' => 'Според "Службен весник на РМ" бр.16 од 05.02.2010 година',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'T3',
            'category_desc' => 'Според "Службен весник на РМ" бр.16 од 05.02.2010 година',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'T4',
            'category_desc' => 'Според "Службен весник на РМ" бр.16 од 05.02.2010 година',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'T5',
            'category_desc' => 'Според "Службен весник на РМ" бр.16 од 05.02.2010 година',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'TUV',
            'category_desc' => 'Издавање на TUV сертификат',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'Мобилна Машина',
            'category_desc' => '',
            'appendix' => '',
            'note' => '',
        ]);
        Category::create([
            'category_name' => 'Мобилна Машина',
            'category_desc' => '',
            'appendix' => '',
            'note' => '',
        ]);
    }
}
