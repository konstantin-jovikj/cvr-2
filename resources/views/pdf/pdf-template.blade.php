<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Барање</title>
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



        .wrapper-head {
            padding: 2px;
            width: 100%;
            margin-bottom: 25px;
        }

        .logo {
            height: 40px;
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

        .title-2 {
            color: black;
            font-size: 10pt;
            font-weight: bold;
            padding: 0;
            margin: 0;
        }

        .p-text {
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

        .top-20 {
            margin-top: 20px
        }

        .padding-left-20 {
            padding-left: 20px;
        }

        .w-50 {
            width: 49%;
        }

        .w-100 {
            width: 100%;
        }

        .pl-30 {
            padding-left: 30px
        }

        .pt-15 {
            padding-top: 15px
        }

        .border {
            border: red solid 1px;
        }

        .text-left {
            text-align: left;
        }

        .signature-line {
            border-bottom: 1px solid black;
            /* Simulate underline with a border */
            padding-bottom: 40px;
        }

        .text-right {
            text-align: right;
        }

        .text-width {
            transform: scale(0.95, 1);

            /* Adjust the scale value for desired width */
        }

        .uppercase {
            text-transform: uppercase;
        }


        .footer {
            position: absolute;
            text-align: center;
            font-size: 9px;
            font-style: italic;
            bottom: 0;
            /* Center-aligns all content within the parent */
        }

        .left-span,
        .center-span,
        .right-span {
            position: absolute;
            top: 0;
            width: 33%;
            /* Adjust the width as needed */
        }

        .left-span {
            left: 0;
            text-align: left;
            /* Aligns content to the left */
        }

        .center-span {
            left: 33%;
            /* Pushes the center span to the center */
            text-align: center;
            /* Center-aligns content */
        }

        .right-span {
            right: 0;
            text-align: right;
            /* Aligns content to the right */
        }

        .page-break {
            page-break-after: always;
        }

        .h-50 {
            height: 50px;
        }

        .inline {
            display: inline-block;
        }

        .px-10 {
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>

</head>

<body>
    <div class="wrapper-head">
        <div class="logo">
            <img class="image" src="https://www.amug.com/wp-content/uploads/2016/09/you-logo-here.png" alt="SLIKA">
        </div>
        <div class="top-right">
            @if ($application->app_type_id == 1)
                <p>Барање за единечно одобрување на возило</p>
                <p>ОБ 7.1.1.1.3 / Ревизија 0</p>
            @endif
            @if ($application->app_type_id == 2)
                <p>Барање за идентификација и за идентификација и оцена на техничката состојба на возилото</p>
                <p>ОБ 7.1.1.3.2 / Ревизија 0</p>
            @endif
        </div>
    </div>
    <div class="wrapper-head">
        <div class="logo">
            <p>Деловоден бр.{{ $application->app_number }}</p>
            <p>Датум: {{ date('d-m-Y', strtotime($application->app_date)) }}</p>
        </div>
        <div class="top-left">
            <p>До:</p>
            <h1>{{ $application->user->localDepartment->local_department_name }}</h1>
            <h1>СЕКТОР ЗА МОБИЛИТЕТ</h1>
            <h1>Скопје</h1>
        </div>
    </div>

    <div class="wrapper-head text-center font-bold">
        @if ($application->app_type_id == 1)
            <h1>Барање за единечно одобрување на возило</h1>
        @endif

        @if ($application->app_type_id == 2)
            <p class="uppercase">Барање </p>
            <p>за идентификација и за идентификација и оцена на техничката состојба на возилото</p>
        @endif
    </div>
    <div>
        <p class="first-line">Ве молиме да извршите преглед и издадете потврда и изјава за сообразност на единечно
            прегледано возило од
            категоријата {{$application->category->category_name}}</p>
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
            <td class="table-text padding-left-20 font-bold">
                {{ $application->customer->embg }}{{ $application->customer->embs }}</td>
        </tr>
        <tr>
            <td class="table-text">1.3 Адреса:</td>
            <td class="table-text padding-left-20 font-bold">
                {{ $application->customer->address }}{{ $application->customer->city->zip }}{{ $application->customer->city->city_name }}
            </td>
        </tr>
        <tr>
            <td class="table-text">1.4 Контакт телефон:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->customer->phone }}</td>
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
            <td class="table-text padding-left-20 font-bold">{{ $application->brand->brand_name }}</td>
        </tr>
        <tr>
            <td class="table-text">2.3 Тип на возилото:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->type->type_name }}</td>
        </tr>
        <tr>
            <td class="table-text">2.4 VIN код (број на шасијата):</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->vin_number }}</td>
        </tr>
        <tr>
            <td class="table-text">2.5 Тип/број на моторот:</td>
            <td class="table-text padding-left-20 font-bold">{{ $application->engine_type }} /
                {{ $application->engine_number }}</td>
        </tr>
    </table>

    <p class="top-20">Дали на возилото има измени на фабричките склопови кои битно влијаат на активната безбедност:</p>

    {{-- POTREBNI DOKUMENTI --}}

    <p class="font-bold top-30">Прилог документи:</p>

    <div class="w-100 pl-30">

        @if ($appDocuments->isNotEmpty())
            <ol class="p-text">
                @foreach ($appDocuments as $document)
                    <li class="p-text">{{ $document->desc }}</li>
                @endforeach
            </ol>
        @else
            <p>Нема доделени типови на документи</p>
        @endif
    </div>

    <div class="w-100 top-20">
        <p class="title-2 text-width text-left">Го овластувам
            {{ $application->user->localDepartment->local_department_name }} за единечно
            одобрување на возила да поднесе барање пред Министерство за економија - Биро за метрологија во мое име за
            издавање на Потврда за сообразност на единечно прегледано возило.</p>
        <p class="title-2 text-width text-left uppercase pt-15">СИТЕ ИНФОРМАЦИИ ДОБИЕНИ ВО ТЕКОТ НА ИНСПЕКЦИСКИОТ
            ПРЕГЛЕД СЕ ОД ДОВЕРЛИВ КАРАКТЕР.</p>
    </div>
    <div class="signature text-right p-text  w-100">
        <div class=" inline signature-line px-10">
            <span class=" ">Потпис на барателот</span>
        </div>
    </div>

    <div class="w-100 footer">
        <div class="left-span">
            <span>ОБ 7.1.1.1.3 / Ревизија 0</span>
        </div>
        <div class="center-span">
            <span>Барање за единечно одобрување на возило</span>
        </div>
        <div class="right-span">
            <span>Стр 1 од 2</span>
        </div>
    </div>

    <div class="page-break"></div>

    {{-- PAGE-2 --}}


    <div class="w-100 text-center ">
        <h1>ИЗЈАВА</h1>
        <p class="font-bold">за согласност за обработка на лични податоци</p>
    </div>
    <div class="w-100 top-30">
        <p>Јас долупотпишаниот/та {{ $application->customer->customer_name }} изречно изјавувам дека се согласувам
            моите лични податоци да се
            обработуваат од страна на Друштво за испитување и анализа
            {{ $application->user->localDepartment->local_department_name }}, со седиште
            {{ $application->user->localDepartment->department_address }}
            {{ $application->user->localDepartment->city->city_name }}
            , со ЕМБС 7331819, во согласност со прописите за заштита на личните податоци, а исклучиво за намената и
            целта
            за која ја давам оваа Изјава и воедно се согласувам тие да бидат обработени во печатена и/или електронска
            форма, а за
            сето наведено изјавувам дека сум претходно информиран на недвосмислен и јасен начин.</p>

        <p>Целите на обработката на моите лични податоци за кои ја давам оваа согласност е заради следните цели:</p>
        <ul class="p-text pl-30">
            <li class="">обработка на моите лични податоци за постапка за хомолагација на возило а за која
                постапка мора да бидат внесени
                моите лични податоци;</li>
            <li>каде обработката на личните податоци е потребна за исполнување на договор каде моите лични податоци се
                договорна
                страна, или за да се преземат активности на мое барање пред пристапување кон договорот;</li>
            <li>каде обработката е потребна за исполнување на одредена законска обврска наложена од овластен преставник
                на Законот;</li>
            <li>каде по мое барање или согласно Закон обработката е потребна за заштита на суштинските интереси на моите
                лични
                податоци или на друго физичко лице за кое јас сум овластен, оплномоштен, законски застапник;</li>

            <li>каде обработката е потребна за извршување на работи од јавен интерес или при вршење на јавно овластување
                на
                контролорот утврдено со закон;</li>
            <li>каде обработката е потребна за целите на легитимните интереси на контролорот или на трето лице, освен
                кога таквите
                интереси не преовладуваат над интересите или основните права и слободи на моите лични податоци коишто
                бараат
                заштита на личните податоци, особено кога субјектот на личните податоци е дете.</li>
        </ul>
    </div>
    <div class="w-100">
        <p>Со потпишување на оваа изјава потврдувам дека сум информиран/а за идентитетот на контролорот, целите на
            обработката, категориите на корисници на личните податоци, задолжителноста на давање на одговорите на
            прашањата и
            можните последици доколку не се даде одговор.</p>
    </div>
    <div class="w-100">
        <p>Известен/а сум дека оваа изјава, како и личните податоци кои се обработуваат можам во секое време да ја
            повлечам со
            писмено известување до обработувачот на податоци, бесплатно и со користење на едноставни средства.</p>
    </div>

    <div class="wrapper-head w-100 top-30">
        <div class="logo">
            <p>Датум: {{ date('d-m-Y', strtotime($application->app_date)) }}</p>
        </div>
        <div class="text-right ">
            <span class="p-text">Потпис: </span>
            <div class=" inline signature-line px-10">
                <span class="p-text ">{{ $application->customer->customer_name }}</span>
            </div>

        </div>
    </div>

    <div class="w-100 footer">
        <div class="left-span">
            <span>ОБ 7.1.1.1.3 / Ревизија 0</span>
        </div>
        <div class="center-span">
            <span>Барање за единечно одобрување на возило</span>
        </div>
        <div class="right-span">
            <span>Стр 2 од 2</span>
        </div>
    </div>

</body>

</html>
