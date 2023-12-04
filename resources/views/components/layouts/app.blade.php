<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />
        <div class="flex flex-col md:flex-row min-h-screen ">
            <livewire:side-nav />
            <div class="flex w-full">
                {{ $slot }}
            </div>
        </div>
    </div>
    <script src="{{asset('custom_js/sideMenu.js')}}" ></script>
    @livewireScripts

</body>

</html>
