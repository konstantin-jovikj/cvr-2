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


        .w-25 {
            width: 25%;
        }

        .w-100 {
            width: 100%;
        }

        .w-75 {
            width: 75%;
        }



        .border {
            border: black solid 1px;
        }



        .page-break {
            page-break-after: always;
        }



        /* .image-inspection-logo {
            background-image: url('inspekcija_logo.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            height: 100px;
            width: 100%
        } */

        .uppercase {
            text-transform: uppercase;
        }


        .h-700 {
            height: 700px;
        }

        .h-400 {
            height: 400px;
        }

        .h-150 {
            height: 150px;
        }

        .image {
            height: 80px;
            position: relative;
        }

        .d-inline {
            display: inline-block;
        }

        .relative {
            position: relative;
        }

        .absolute {
            position: absolute;
        }

        .ml-25 {
            left: 25%;
        }

        .container {
            display: table;
            text-align: center;

        }

        .content {
            display: table-cell;
            vertical-align: middle;
        }

        .font-big {
            font-size: 42px;
        }

        .font-big-2{
            font-size: 36px;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .center-image {
            text-align: center;
            margin-top: 25px;
            margin-left: 10px;

        }

        .top-150{
            top: 150px;
        }

        .top-300{
            top: 300px;
        }

        .font-big-3{
            font-size: 120px;
            transform: scaleX(0.8);
        }

        .mt-50{
            margin-top: 90px;
        }

    </style>

</head>

<body>
    <div class="w-100 border h-700 relative">
        <div class="w-25 border h-150 d-inline absolute ">
            {{-- <img class="image center-image" src="https://www.amug.com/wp-content/uploads/2016/09/you-logo-here.png" alt="SLIKA"> --}}
            <img class="image center-image" src="{{ public_path('logo/inspekcija_logo.jpg') }}" alt="SLIKA">

        </div>
        <div class="w-75 border h-150 d-inline absolute ml-25 container">
            <div class="content">
                <p class="uppercase font-big font-bold mt-40">сектор за мобилитет</p>
            </div>
        </div>

        <div class="w-100 border h-150 absolute top-150 container">

            <p class="uppercase font-big-2 font-bold mt-40 ">{{$application->manufacturer->name}} {{$application->type->type_name}} {{$application->type->commercial_mark}}</p>

        </div>

        <div class="w-100  h-400 absolute top-300 container">

            <p class="uppercase font-big-3 font-bold mt-50 ">{{$application->app_number}}</p>

        </div>

    </div>
    {{-- <div class="page-break"></div> --}}

</html>
