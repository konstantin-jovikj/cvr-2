<?php

namespace Database\Seeders;

use App\Models\AttachmentDocuments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttachmentDocuments::create([
            'desc' => 'Потврда за платени царински давачки',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Потврда за исполнување на техничките барања со технички карактеристики, издадена од производителот на возилото (СОС)',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Потврда за исполнување на техничките барања со список на одобренија издадена од овластен застапник на производителот на возилото во Република Северна Македонија',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Потврда за исполнување на техничките барања со список на одобренија издадена од независна институција прифатена од органот за одобрување',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Фотокопија од странска сообраќајна дозвола за возилото',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Возило за преглед',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Упатница од МВР за испитување поради одобрување на преправено/поправено возило',
        ]);
        AttachmentDocuments::create([
            'desc' => '	Потврда за вградување на уредот издадена од овластено правно лице',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Одобренија и друга документација за дополнително вградениот уред',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Табеларен преглед на вградени елементи на уредот за погон на ТНГ издадена од вградувачот',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Уверение за извршен преглед на садот под притисок / резервоарот за ТНГ',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Фабрички документ за мултифункционалниот вентил монтиран на резервоарот за ТНГ',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Фабрички документ за регулаторот на притисок на ТНГ / испарувач',
        ]);
        AttachmentDocuments::create([
            'desc' => '	Фабричка шема на вградените електронски елементи во уредот за ТНГ (само за системи со електронско вбризгување на гориво)',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Фотокопија сообраќајна дозвола со оригинал на увид',
        ]);
        AttachmentDocuments::create([
            'desc' => '	Фотокопија од предходната сообраќајна дозвола со оригинал за увид (за возилата што претходно биле регистрирани)',
        ]);
        AttachmentDocuments::create([
            'desc' => '	Фотокопија од потврдата за сообразност за ЕУ одобрување на возилото- Certificate of conformity, издаден од непосредниот производител на возилото – COC, со оригинал за увид',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Доказ за статусот на хуманитарната организација од членот 24 точка 6 од Законот за возила, издаден од надлежен државен орган',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Фотокопија од потврдата за сообразност за ЕУ одобрување на возилото- Certificate of conformity (за ново или половно возило), издаден од непосредниот производител на возилото – COC, со оригинал за увид или други документи со кои се потврдува дека возилото е од одобрен тип во Р. Северна Македонија.',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Доказ за регулирани царински давачки за возилото (фотокопија со оригинал за увид)',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Известување од Бирото за метрологија (Административна постапка за одобрување започнува со пристигнување на “Известување”од Органот за одобрување-Бирото за метрологија)',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Барање за преглед на документацијата за одобрување и возило во постапка за одобрување на тип возило,во согласност со известувањето добиено од Органот за одобрување заверено со печат,архивски број и платена административна такса;',
        ]);
        AttachmentDocuments::create([
            'desc' => '	Уредно пополнет информативен пакет за возилото;',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Оригинал или заверена со печат и потпис копија од СОС документ (за возилата за кои типот е одобрен согласно хармонизираните европски прописи-WVTA)',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Потврда за отворање на постапка за идентификација издадена од органот за одобрување со која се потврдува исполнетоста на статусот на барателот согласно одредбите од членот 24 од Законот за возила',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Доказ за регулирани царински давачки за возилото (фотокопија со оригинал за увид)',
        ]);
        AttachmentDocuments::create([
            'desc' => 'Фотокопија од предходната сообраќајна дозвола со оригинал за увид (за половните возила)',
        ]);
    }
}
