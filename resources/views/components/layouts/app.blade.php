<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />
        <div class="flex flex-col md:flex-row h-screen ">
            <livewire:side-nav />
            <div class="flex w-full">
                {{ $slot }}
            </div>
        </div>
    </div>
    <script>
        function dropdown() {
            document.querySelector("#submenu").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-90");
        }
        dropdown();

        function dropdownUser() {
            document.querySelector("#userSubmenu").classList.toggle("hidden");
            document.querySelector("#userArrow").classList.toggle("rotate-90");
        }
        dropdownUser();
    </script>

    @livewireScripts
</body>

</html>
