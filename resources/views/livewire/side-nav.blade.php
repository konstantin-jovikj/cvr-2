<div class="sidebar  top-0 bottom-0 lg:left-0 p-2 w-[300px]  text-center bg-gray-900">
    {{-- LOGO --}}
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            <h1 class="font-bold text-gray-200 text-[18px] ml-3 uppercase">Централен Регистар на Возила</h1>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>


    <div class="py-1 mt-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
        <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold" href="{{ route('homepage') }}">Почетна</a>
    </div>
    <div class="my-2 bg-gray-600 h-[1px]"></div>


    {{-- KORISNICI --}}
    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
        <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold" href="{{ route('homepage') }}">Корисници</a>
    </div>
    <div class="my-2 bg-gray-600 h-[1px]"></div>


</div>
