<div class="sidebar  top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
    {{-- LOGO --}}
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>




    <div class="py-1 mt-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
        <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold" href="{{ route('admin.register') }}">Регистрирај
            Админ</a>
    </div>
    <div class="my-2 bg-gray-600 h-[1px]"></div>

    <div class="py-1 mt-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
        <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold"
            href="{{ route('superadmin.dashboard') }}">Регистрирани Админи</a>
    </div>
    <div class="my-2 bg-gray-600 h-[1px]"></div>

    <div class="py-1 mt-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
        <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold" href="/roles">Улоги</a>
    </div>
    <div class="my-2 bg-gray-600 h-[1px]"></div>



</div>
