<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EO_baranje_51684_1129-150218</title>
    <style type="text/css">
        * {
            font-family: "dejavu serif", sans-serif;
            padding: 0;
            text-indent: 0;
            box-sizing: border-box;
        }

        .s1 {
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }



        h1 {
            color: black;
            font-style: normal;
            font-weight: bold;
            padding: 0;
            margin: 0;
            font-size: 11pt;
        }



        .s3 {
            color: black;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
        }

        li {
            display: block;
        }

        #l1 {
            padding-left: 0pt;
            counter-reset: c1 1;
        }

        #l1>li>*:first-child:before {
            counter-increment: c1;
            content: counter(c1, decimal)". ";
            color: black;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        #l1>li:first-child>*:first-child:before {
            counter-increment: c1 0;
        }

        #l2 {
            padding-left: 0pt;
            counter-reset: c2 1;
        }

        #l2>li>*:first-child:before {
            counter-increment: c2;
            content: counter(c1, decimal)"." counter(c2, decimal)". ";
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l2>li:first-child>*:first-child:before {
            counter-increment: c2 0;
        }

        #l3 {
            padding-left: 0pt;
            counter-reset: c2 1;
        }

        #l3>li>*:first-child:before {
            counter-increment: c2;
            content: counter(c1, decimal)"." counter(c2, decimal)". ";
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l3>li:first-child>*:first-child:before {
            counter-increment: c2 0;
        }

        li {
            display: block;
        }

        #l4 {
            padding-left: 0pt;
            counter-reset: d1 1;
        }

        #l4>li>*:first-child:before {
            counter-increment: d1;
            content: counter(d1, decimal)" ";
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l4>li:first-child>*:first-child:before {
            counter-increment: d1 0;
        }

        .wrapper-head {
            padding: 2px;
            width: 100%;
            margin-bottom: 40px;
        }

        .logo {
            height: 50px;
            width: 49%;
            display: inline-block;
            vertical-align: top;
        }

        .top-right {
            text-align: right;
            width: 50%;
            display: inline-block;
            vertical-align: top;
        }

        .top-left {
            text-align: left;
            width: 50%;
            display: inline-block;
            vertical-align: top;
        }

        .image {
            height: 50px;
            position: relative;
        }

        .title {
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 14pt;
        }

        .text-center {
            text-align: center;
        }

        .first-line::first-line {
            text-indent: 40px;
        }

        p {
            color: black;
            font-size: 9pt;
            padding: 0;
            margin: 0;
            margin-top: 5px;
        }

        .font-bold {
            font-weight: bold;
        }

        .two-column-table {}

        .table-text {
            color: black;
            font-size: 9pt;
            padding: 0;
            margin: 0;
        }

        .top-30 {
            margin-top: 30px
        }
        .top-20{
            margin-top: 20px
        }

        .padding-left-20 {
            padding-left: 20px;
        }
        .w-50{
            width: 49%;
        }
        .w-100{
            width: 100%;
        }
    </style>

</head>

<body>
    <div class="wrapper-head">
        <div class="logo">
            <img class="image" src="https://www.amug.com/wp-content/uploads/2016/09/you-logo-here.png" alt="SLIKA">
        </div>
        <div class="top-right">
            <p>Барање за единечно одобрување на возило</p>
            <p>ОБ 7.1.1.1.3 / Ревизија 0</p>
        </div>
    </div>
    <div class="wrapper-head">
        <div class="logo">
            <p>Деловоден бр.{{ $application->app_number }}</p>
            <p>Датум:{{ $application->app_date }}</p>
        </div>
        <div class="top-left">
            <p>До:</p>
            <h1>{{ $application->user->localDepartment->local_department_name }}</h1>
            <h1>СЕКТОР ЗА МОБИЛИТЕТ</h1>
            <h1>Скопје</h1>
        </div>
    </div>

    <div class="wrapper-head text-center">
        <p class="title">Барање за единечно одобрување на возило</p>
    </div>
    <div>
        <p class="first-line">Ве молиме да извршите преглед и издадете потврда и изјава за сообразност на единечно
            прегледано возило од
            категоријата M1</p>
    </div>

    <table class="two-column-table top-20 w-100">
        <tr>
            <td class="table-text font-bold">1.Податоци за поднесувачот на барањето:</td>
        </tr>
        <tr>
            <td class="table-text w-50">1.1 Презиме и име, односно назив:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->customer->customer_name }}</td>
        </tr>
        <tr>
            <td class="table-text w-50">1.2 Матичен број:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->customer->embg }}{{$application->customer->embs}}</td>
        </tr>
        <tr>
            <td class="table-text">1.3 Адреса:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->customer->address}}{{$application->customer->city->zip}}{{$application->customer->city->city_name}}</td>
        </tr>
        <tr>
            <td class="table-text">1.4 Контакт телефон:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->customer->phone}}</td>
        </tr>
    </table>

    <table class="two-column-table top-30 w-100">
        <tr>
            <td class="table-text font-bold">2.Податоци за возилото:</td>
        </tr>
        <tr>
            <td class="table-text w-50">2.1 Производител на возилото:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->manufacturer->name }}</td>
        </tr>
        <tr class="w-100">
            <td class="table-text w-50">2.2 Марка на возилото:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->brand->brand_name}}</td>
        </tr>
        <tr>
            <td class="table-text">2.3 Тип на возилото:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->type->type_name}}</td>
        </tr>
        <tr>
            <td class="table-text">2.4 VIN код (број на шасијата):</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->vin_number}}</td>
        </tr>
        <tr>
            <td class="table-text">2.5 Тип/број на моторот:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->engine_type}} / {{$application->engine_number}}</td>
        </tr>
    </table>

    <p class="top-20">Дали на возилото има измени на фабричките склопови кои битно влијаат на активната безбедност:</p>
    <p class="font-bold top-30" >Прилог (да се заокружи):</p>

    <ol>
        @foreach($applicationTypes as applicationType)
        <li>{{$applicationType->relatedDocuments}}</li>
        @endforeach

    </ol>


    <p style="text-align: left;"><img width="17" height="17" alt="image"
            src="EO_baranje_51684_1129-150218_files/Image_003.png" /></p>
    <p class="s1" style="padding-left: 3pt;text-align: left;">4</p>
    <p class="s1" style="padding-top: 4pt;padding-left: 34pt;line-height: 87%;text-align: left;">Потврда за
        исполнување на техничките барања со список на одобренија издадена од независна институција прифатена од органот
        за одобрување</p>
    <p style="text-align: left;"><img width="17" height="37" alt="image"
            src="EO_baranje_51684_1129-150218_files/Image_004.png" /></p>
    <p class="s1" style="padding-left: 3pt;text-align: left;">5</p>
    <p class="s1" style="padding-top: 2pt;padding-left: 3pt;text-align: left;">6</p>
    <p class="s1" style="padding-top: 2pt;padding-left: 34pt;line-height: 119%;text-align: left;">Фотокопија од
        странска сообраќајна дозвола за возилото Возило за преглед</p>
    <h1 style="padding-top: 4pt;padding-left: 7pt;line-height: 126%;text-align: justify;">Го овластувам А-ТЕСТ ДОО -
        Центар за единечно одобрување на возила да поднесе барање пред Министерство за економија - Биро за метрологија
        во мое име за издавање на Потврда за сообразност на единечно прегледано возило.</h1>
    <h1 style="padding-left: 7pt;line-height: 126%;text-align: justify;">СИТЕ ИНФОРМАЦИИ ДОБИЕНИ ВО ТЕКОТ НА
        ИНСПЕКЦИСКИОТ ПРЕГЛЕД СЕ ОД ДОВЕРЛИВ КАРАКТЕР.</h1>
    <p style="text-align: right;">Потпис на барателот</p>
    <p style="padding-left: 372pt;line-height: 1pt;text-align: left;"><img width="179" height="1"
            alt="image" src="EO_baranje_51684_1129-150218_files/Image_005.png" /></p>
    <p class="s3" style="padding-top: 4pt;padding-left: 22pt;text-align: left;">ОБ 7.1.1.1.3 / Ревизија 0 Барање
        за единечно одобрување на возило Стр 2 од 2</p>
    <h1 style="padding-top: 3pt;padding-left: 122pt;text-align: center;">И З Ј А В А</h1>
    <h1 style="padding-top: 3pt;padding-left: 122pt;text-align: center;">за согласност за обработка на лични податоци
    </h1>
    <p style="padding-left: 6pt;line-height: 139%;text-align: justify;">Јас долупотпишаниот/та Денис Младеновски
        изречно изјавувам дека се согласувам моите лични податоци да се обработуваат од страна на Друштво за испитување
        и анализа А-ТЕСТ ДОО Скопје, со седиште ул.Бојмија број 8/2-1 Скопје, со ЕМБС 7331819, во согласност со
        прописите за заштита на личните податоци, а исклучиво за намената и целта за која ја давам оваа Изјава и воедно
        се согласувам тие да бидат обработени во печатена и/или електронска форма, а за сето наведено изјавувам дека сум
        претходно информиран на недвосмислен и јасен начин.</p>
    <p style="padding-left: 6pt;text-align: justify;">Целите на обработката на моите лични податоци за кои ја давам
        оваа согласност е заради следните цели:</p>
    <p style="padding-top: 4pt;padding-left: 6pt;line-height: 139%;text-align: justify;">- обработка на моите лични
        податоци за постапка за хомолагација на возило а за која постапка мора да бидат внесени моите лични податоци;
    </p>
    <p style="padding-left: 6pt;line-height: 139%;text-align: justify;">-□каде обработката на личните податоци е
        потребна за исполнување на договор каде моите лични податоци се договорна страна, или за да се преземат
        активности на мое барање пред пристапување кон договорот;</p>
    <p style="padding-left: 6pt;text-align: justify;">-□каде обработката е потребна за исполнување на одредена законска
        обврска наложена од овластен преставник на Законот;</p>
    <p style="padding-top: 4pt;padding-left: 6pt;line-height: 139%;text-align: justify;">-□каде по мое барање или
        согласно Закон обработката е потребна за заштита на суштинските интереси на моите лични податоци или на друго
        физичко лице за кое јас сум овластен, оплномоштен, законски застапник;</p>
    <p style="padding-left: 6pt;line-height: 139%;text-align: justify;">-□каде обработката е потребна за извршување на
        работи од јавен интерес или при вршење на јавно овластување на контролорот утврдено со закон;</p>
    <p style="padding-left: 6pt;line-height: 139%;text-align: justify;">-□каде обработката е потребна за целите на
        легитимните интереси на контролорот или на трето лице, освен кога таквите интереси не преовладуваат над
        интересите или основните права и слободи на моите лични податоци коишто бараат заштита на личните податоци,
        особено кога субјектот на личните податоци е дете.</p>
    <p style="padding-left: 6pt;line-height: 139%;text-align: justify;">Со потпишување на оваа изјава потврдувам дека
        сум информиран/а за идентитетот на контролорот, целите на обработката, категориите на корисници на личните
        податоци, задолжителноста на давање на одговорите на прашањата и можните последици доколку не се даде одговор.
    </p>
    <p style="padding-left: 6pt;line-height: 139%;text-align: justify;">Известен/а сум дека оваа изјава, како и личните
        податоци кои се обработуваат можам во секое време да ја повлечам со писмено известување до обработувачот на
        податоци, бесплатно и со користење на едноставни средства.</p>
    <p style="padding-top: 4pt;padding-left: 6pt;text-align: left;">Датум: 29.11.2023</p>
    <p style="padding-top: 7pt;padding-left: 7pt;line-height: 278%;text-align: left;">Денис Младеновски Потпис
        <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u>
    </p>
</body>

</html>
