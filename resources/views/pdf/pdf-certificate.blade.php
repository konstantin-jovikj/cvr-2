<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Потврда</title>
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



        /* .wrapper-head {
            padding: 2px;
            width: 100%;
            margin-bottom: 25px;
        } */

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

        .table-text-small {
            color: black;
            font-size: 7pt;
            padding: 0;
            margin: 0;
            margin-top: 2px;
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

        .w-60 {
            width: 60%;
        }

        .w-15 {
            width: 15%;
        }

        .w-20 {
            width: 20%;
        }

        .w-25 {
            width: 25%;
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

        .h-100 {
            height: 100%;
        }

        .inline {
            display: inline-block;
        }

        .px-10 {
            padding-left: 10px;
            padding-right: 10px;
        }

        .border-b {
            border-bottom: 1px solid black;
        }

        .image-inspection-logo {
            background-image: url('inspekcija_logo.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            height: 100px;
            width: 100%
        }

        .uppercase {
            text-transform: uppercase;
        }

        .float-left {
            float: left;
        }

        .float-right{
            float: right;
        }


        .custom-table {
            border-collapse: collapse;
            /* Optional: collapse borders */
            border: 1px solid black;
            /* Sets the border of the table */
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid black;
            /* Sets the border of table cells */
            padding-top: 0;
            padding-bottom: 0;
            padding-left: 2px;
            padding-right: 2px;
            /* Optional: adds padding for better readability */
        }

        .mt-200 {
            margin-top: 100px;
        }

        .w-50p {
            width: 50px;
        }
    </style>

</head>

<body>
    <div class="top-right w-100">
        <p>ОБ 7.4.3</p>
    </div>
    <div class="w-100 border-b text-center">
        <h1>{{ $application->user->localDepartment->local_department_name }} - ул:
            {{ $application->user->localDepartment->department_address }}
            {{ $application->user->localDepartment->city->city_name }}</h1>
    </div>
    <div class="text-center">
        <p>(податоци за техничката служба која ја издава потврдата за сообразност)</p>
    </div>

    <div class="w-100 ">
        <div class="w-25  float-left">
            <div class="image-inspection-logo"></div>
        </div>

        <div class="w-50  float-left h-50 text-center pt-15">
            <h1 class="uppercase">Потврда за сообразност</h1>
            <p>за единечно одобрено возило</p>
            <div class="pt-15">
                <span class="p-text">Број: <span class="font-bold">{{ $application->app_number }}</span> </span>
                <span class="p-text">Датум: <span
                        class="font-bold">{{ date('d-m-Y', strtotime($application->app_date)) }}</span> </span>
            </div>
        </div>

        <div class="w-25 float-left"></div>
    </div>
    <div class="mt-200">

        <table class="w-100 custom-table table-text-small">
            <tr>
                <th class="w-50p">COC</th>
                <th class="w-50p">Сообраќајна дозвола</th>
                <th class="">Податок</th>
            </tr>

            <tr>
                <th class="w-50p">0.1</th>
                <th class="w-50p">(D.1)</th>
                <td class="">Марка:
                    @if ($application->brand != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->brand->brand_name }}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">0.2</th>
                <th class="w-50p">(D.2)</th>
                <td class="">Тип/Варијанта/Изведба:
                    @if ($application->type != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->type->type_name }}/{{$application->variant}}/ {{$application->edition}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">0.2.1</th>
                <th class="w-50p">(D.3)</th>
                <td class="">Комерцијална(и) ознака(и):
                    @if ($application->type->commercial_mark != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->type->commercial_mark}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">0.6</th>
                <th class="w-50p">(E)</th>
                <td class="">Идентификационен број на возилото:
                    @if ($application->vin_number != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->vin_number}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">-</th>
                <th class="w-50p">(5A)</th>
                <td class="">Година на производство:
                    @if ($application->selected_production_year != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->selected_production_year}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">16.1</th>
                <th class="w-50p">(F.1)</th>
                <td class=""> Најголема вкупна конструктивна маса на возилото (kg):
                    @if ($application->const_total_mass != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->const_total_mass}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">-</th>
                <th class="w-50p">(F.2)</th>
                <td class=""> Најголема легална вкупна маса на возилото при регистрација (kg):
                    @if ($application->legal_total_mass != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->legal_total_mass}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">16.4</th>
                <th class="w-50p">(F.3)</th>
                <td class=""> Најголема легална вкупна маса на група возила при регистрација (kg):
                    @if ($application->legal_total_group_mass != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->legal_total_group_mass}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">13</th>
                <th class="w-50p">(G)</th>
                <td class=""> Маса на возилото (kg):
                    @if ($application->vehicle_mass != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->vehicle_mass}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">0.4</th>
                <th class="w-50p">(J)</th>
                <td class=""> Категорија и вид на возилото:
                    @if ($application->category->category_name != null && $application->vehicle_type != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->category->category_name}} {{$application->vehicle_type}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">38</th>
                <th class="w-50p">(38)</th>
                <td class="">Облик и намена на каросеријата:
                    @if ($application->shape->body_shape != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->shape->body_shape}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">0.6</th>
                <th class="w-50p">(K)</th>
                <td class="">Ознака на одобрение (Во Р.Северна Македонија / ЕУ одобрение):
                    @if ($application->application_mark_mkd != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->application_mark_mkd}}
                        @if ($application->application_mark_eu != null)
                        /{{ $application->application_mark_eu}}
                        @endif
                        </span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">-</th>
                <th class="w-50p">(1K)</th>
                <td class="">Број на ЕУ потврдата за сообразност (СОС):
                    @if ($application->coc_number != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->coc_number}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">1</th>
                <th class="w-50p">(L)</th>
                <td class="">Број на оски:
                    @if ($application->number_of_axles != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->number_of_axles}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">5</th>
                <th class="w-50p">(5)</th>
                <td class="">Должина на возилото (mm):
                    @if ($application->length != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->length}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">6</th>
                <th class="w-50p">(6)</th>
                <td class="">Ширина на возилото (mm):
                    @if ($application->width != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->width}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">7</th>
                <th class="w-50p">(7)</th>
                <td class="">Висина на возилото (mm):
                    @if ($application->height != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->height}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">35</th>
                <th class="w-50p">(35)</th>
                <td class="">Дозволени пневматици и наплатки:
                    @if ($application->allowed_pneumatics != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->allowed_pneumatics}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">16.2</th>
                <th class="w-50p">(N)</th>
                <td class="">Распределба на најголемата конструктивна вкупна маса по оски (kg) (за возила со конструктивна вкупна маса над 3500kg):
                    1.
                    @if ($application->axel_mass_distibution_1 != null)
                        <span class="uppercase font-bold text-width">{{$application->axel_mass_distibution_1}}</span> /
                    @endif
                    2.
                    @if ($application->axel_mass_distibution_2 != null)
                        <span class="uppercase font-bold text-width">{{$application->axel_mass_distibution_2}}</span> /
                    @endif
                    3.
                    @if ($application->axel_mass_distibution_3 != null)
                        <span class="uppercase font-bold text-width">{{$application->axel_mass_distibution_3}}</span> /
                    @endif
                    4.
                    @if ($application->axel_mass_distibution_4 != null)
                        <span class="uppercase font-bold text-width">{{$application->axel_mass_distibution_4}}</span> /
                    @endif
                    5.
                    @if ($application->axel_mass_distibution_5 != null)
                        <span class="uppercase font-bold text-width">{{$application->axel_mass_distibution_5}}</span> /
                    @endif
                    и на приклучната точка (за полуприколка и за приколка со централна оска):
                    @if ($application->connection_point_mass_distibution != null)
                        <span class="uppercase font-bold text-width">{{$application->connection_point_mass_distibution}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">16.2 (16.4) (18)</th>
                <th class="w-50p">(16.2)</th>
                <td class="">Најголемо конструктивно осно (или група на оски) оптоварување (kg):
                    1.
                    @if ($application->max_structural_axle_load_1 != null)
                        <span class="uppercase font-bold text-width">{{$application->max_structural_axle_load_1}}</span> /
                    @endif
                    2.
                    @if ($application->max_structural_axle_load_2 != null)
                        <span class="uppercase font-bold text-width">{{$application->max_structural_axle_load_2}}</span> /
                    @endif
                    3.
                    @if ($application->max_structural_axle_load_3 != null)
                        <span class="uppercase font-bold text-width">{{$application->max_structural_axle_load_3}}</span> /
                    @endif
                    4.
                    @if ($application->max_structural_axle_load_4 != null)
                        <span class="uppercase font-bold text-width">{{$application->max_structural_axle_load_4}}</span> /
                    @endif
                    5.
                    @if ($application->max_structural_axle_load_5 != null)
                        <span class="uppercase font-bold text-width">{{$application->max_structural_axle_load_5}}</span> /
                    @endif
                    и на приклучната точка (за полуприколка и за приколка со централна оска): /
                    @if ($application->max_connection_point_load != null)
                        <span class="uppercase font-bold text-width">{{$application->max_connection_point_load}}</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">18</th>
                <th class="w-50p">(O.1)</th>
                <td class="">Најголема конструктивна вкупна маса на кочена приколка (kg):
                    @if ($application->braked_trailer_max_mass != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->braked_trailer_max_mass}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">18</th>
                <th class="w-50p">(O.2)</th>
                <td class="">Најголема конструктивна вкупна маса на некочена приколка (kg):
                    @if ($application->unbraked_trailer_max_mass != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->unbraked_trailer_max_mass}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">19</th>
                <th class="w-50p">(19)</th>
                <td class="">Најголемо конструктивно оптоварување во приклучокот за приколка (kg):
                    @if ($application->trailer_connection_point_max_load != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->trailer_connection_point_max_load}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">43.1</th>
                <th class="w-50p">(43.1)</th>
                <td class="">Ознака на Одобрение на приклучниот уред:
                    @if ($application->plugin_device_approval_mark != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->plugin_device_approval_mark}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">21</th>
                <th class="w-50p">(21)</th>
                <td class="">Тип на моторот:
                    @if ($application->engine_type != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->engine_type}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">25</th>
                <th class="w-50p">(P.1)</th>
                <td class="">Зафатнина на моторот (cm3):
                    @if ($application->engine_volume != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->engine_volume}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">27</th>
                <th class="w-50p">(P.2)</th>
                <td class="">Силина на моторот (kW):
                    @if ($application->engine_power != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->engine_power}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">26</th>
                <th class="w-50p">(P.3)</th>
                <td class="">Вид на гориво:
                    @if ($application->fuel->fuel_type != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->fuel->fuel_type}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">27</th>
                <th class="w-50p">(P.4)</th>
                <td class="">Број на вртежи (min-1):
                    @if ($application->engine_revolutions != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->engine_revolutions}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">-</th>
                <th class="w-50p">(P.5)</th>
                <td class="">Идентификационен број на моторот:
                    @if ($application->engine_number != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->engine_number}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">-</th>
                <th class="w-50p">(Q)</th>
                <td class="">Однос силина/маса (само за мотоцикли) (kW/kg)
                    @if ($application->power_mass_distribution != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->power_mass_distribution}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">40</th>
                <th class="w-50p">(R)</th>
                <td class="">Боја на возилото:
                    @if ($application->color1 != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->color1->color_name}} ({{$application->color1->color_code}})</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">42</th>
                <th class="w-50p">(S.1)</th>
                <td class="">Број на седишта (за М2 и М3 без возач):
                    @if ($application->number_of_seats != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->number_of_seats}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">-</th>
                <th class="w-50p">(S.2)</th>
                <td class="">Број на места за стоење:
                    @if ($application->number_of_standing_places != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->number_of_standing_places}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>


            <tr>
                <th class="w-50p">-</th>
                <th class="w-50p">(3S)</th>
                <td class="">Број на места за лежење:
                    @if ($application->number_of_lie_down_places != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->number_of_lie_down_places}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">29</th>
                <th class="w-50p">(T)</th>
                <td class="">Максимална брзина (km/h):
                    @if ($application->max_speed != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->max_speed}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">46</th>
                <th class="w-50p">(45)</th>
                <td class="">Стационарна бучава:
                    @if ($application->stationary_noise_level != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->max_speed}} dB(A)</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                    , при брзина на вртење:
                    @if ($application->noise_at_rpm != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->noise_at_rpm}} min-1</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>

            <tr>
                <th class="w-50p">49</th>
                <th class="w-50p">(V.7)</th>
                <td class="">Максимална брзина (km/h):
                    @if ($application->max_speed != null)
                        <span class="float-right uppercase font-bold text-width">{{ $application->max_speed}}</span>
                    @else
                        <span class="float-right uppercase font-bold text-width">/</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="" colspan="3">
                    <p>Забелешки:</p>
                    @if ($application->cert_note_text != null)
                        <span class=" text-width">{{ $application->cert_note_text}}</span>
                    @else
                        <span class="text-width">/</span>
                    @endif
                </td>
            </tr>

        </table>
    </div>

    <div class="wrapper-head top-30">
        <div class="logo">
            <span class="p-text float-right">(печат)</span>
        </div>
        <div class="top-right">
            <span class=" p-text">(потпис на одговорно лице)</span>
        </div>
    </div>


</body>

</html>
