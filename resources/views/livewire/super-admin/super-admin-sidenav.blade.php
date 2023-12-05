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

    {{-- Sektori --}}

    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdownUser()">
        <div class="flex justify-between w-full items-center">
            <span class="text-[13px] ml-4 text-gray-200 font-bold">Сектори</span>
            <span class="text-xs rotate-180" id="sektoriArrow">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                </svg>
            </span>
        </div>
    </div>
    <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="sektoriSubmenu">
        <a wire:navigate href="#" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            МВР
        </a>
        <a wire:navigate href="{{route('inspekciski.tela')}}" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Инспекциски тела
        </a>
        <a wire:navigate href="#" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
        Станици за Тех.Преглед
    </a>

    </div>

    <div class="my-2 bg-gray-600 h-[1px]"></div>




    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
    onclick="dropdownPodatociSuperAdmin()">
    <div class="flex justify-between w-full items-center">
        <span class="text-[13px] ml-4 text-gray-200 font-bold">Основни Податоци</span>
        <span class="text-xs rotate-180" id="podatociArrowSuperAdmin">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <style>
                    svg {
                        fill: #ffffff
                    }
                </style>
                <path
                    d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
            </svg>
        </span>
    </div>
</div>
<div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="podatociSubmenuSuperAdmin">
    <a wire:navigate href="{{ route('manufacturers.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Производители</a>
    <a wire:navigate href="{{ route('brands.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Марка</a>
    <a wire:navigate href="{{ route('types.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Тип</a>
    <a wire:navigate href="{{ route('categories.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Категории</a>
    <a wire:navigate href="{{ route('shapes.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Облик на Каросерија</a>
    <a wire:navigate href="{{ route('fuel.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Гориво</a>
    <a wire:navigate href="{{ route('colors.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Боја</a>
    <a wire:navigate href="{{ route('modifications.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Видови на
        Преправки/Поправки</a>
    <a wire:navigate href="#"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Наод - Табели</a>
    <a wire:navigate href="{{ route('notes.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Текст во Забелешка</a>
    <a wire:navigate href="{{ route('pictures.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Прилог фотографии</a>
    <a wire:navigate href="{{ route('relateddocs.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Прилог Документи</a>
    <a wire:navigate href="{{ route('applicationtype.all') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Типови на Барања</a>
    <a wire:navigate href="{{ route('application_photos') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Барања - Фотографии</a>
    <a wire:navigate href="{{ route('application_docs') }}"
        class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Барања - Документи</a>
</div>

<div class="my-2 bg-gray-600 h-[1px]"></div>

</div>
