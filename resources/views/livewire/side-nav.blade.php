<div class="sidebar  top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
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

    {{-- @if (auth()->check()) --}}
    @if (Auth::check() && Auth::user()->role()->where('role_name', 'Admin')->exists())
            <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdownUser()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[13px] ml-4 text-gray-200 font-bold">Корисници</span>
                    <span class="text-xs rotate-180" id="userArrow">
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
            <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="userSubmenu">
                <a wire:navigate href="/users"
                    class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
                    Корисници
                </a>
                <a wire:navigate href="/roles"
                    class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block" href="#">
                    Улоги (Roles)
                </a>

            </div>

            <div class="my-2 bg-gray-600 h-[1px]"></div>
        @endif
    {{-- @endIf --}}


    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
        <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold" href="{{ route('homepage') }}">Посредници</a>
    </div>
    <div class="my-2 bg-gray-600 h-[1px]"></div>


    {{-- Sopstvenici --}}


    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdownSopstvenici()">
        <div class="flex justify-between w-full items-center">
            <span class="text-[13px] ml-4 text-gray-200 font-bold">Сопственици</span>
            <span class="text-xs rotate-180" id="arrowSopstvenici">
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
    <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="submenuSopstvenici">
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Нов Барател
        </a>
    </div>

    <div class="my-2 bg-gray-600 h-[1px]"></div>



    {{-- BARANJA --}}

    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdownBaranja()">
        <div class="flex justify-between w-full items-center">
            <span class="text-[13px] ml-4 text-gray-200 font-bold">Барања</span>
            <span class="text-xs rotate-180" id="baranjaArrow">
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
    <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="baranjaSubmenu">
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Ненаплатени Барања
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Платени Барања
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Архивирани Барања
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Откажани Барања
        </a>

    </div>


    <div class="my-2 bg-gray-600 h-[1px]"></div>

    {{-- Edinecni Odobrenija --}}


    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdownOdobrenija()">
        <div class="flex justify-between w-full items-center">
            <span class="text-[13px] ml-4 text-gray-200 font-bold">Единечни одобренија</span>
            <span class="text-xs rotate-180" id="odobrenijaArrow">
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
    <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="odobrenijaSubmenu">
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Неевидентирани
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Евидентирани
        </a>
    </div>

    <div class="my-2 bg-gray-600 h-[1px]"></div>

    {{-- Periodicni Pregledi --}}

    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdownPregledi()">
        <div class="flex justify-between w-full items-center">
            <span class="text-[13px] ml-4 text-gray-200 font-bold">Периодични прегледи</span>
            <span class="text-xs rotate-180" id="preglediArrow">
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
    <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="preglediSubmenu">
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Издадени Потврди
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Преглед за МВР во Excell
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Листа на барања
        </a>
    </div>

    <div class="my-2 bg-gray-600 h-[1px]"></div>

    {{-- Osnovni Podatoci --}}


    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdownOsnovniPodatoci()">
        <div class="flex justify-between w-full items-center">
            <span class="text-[13px] ml-4 text-gray-200 font-bold">Основни Податоци</span>
            <span class="text-xs rotate-180" id="osnovniPodatociArrow">
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
    <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="osnovniPodatociSubmenu">
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Производител на возила
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Марка на возило
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Тип на возило
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Категории на возила
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Облик на каросерија
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Вид на гориво
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Боја на возило
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Прилог Документи
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Наод - Табели
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Текст во забелешка
        </a>
    </div>

    <div class="my-2 bg-gray-600 h-[1px]"></div>

    {{-- Baranja do Biro --}}

    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdownBiroBaranja()">
        <div class="flex justify-between w-full items-center">
            <span class="text-[13px] ml-4 text-gray-200 font-bold">Барања до биро</span>
            <span class="text-xs rotate-180" id="biroBaranjaArrow">
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
    <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="biroBaranjaSubmenu">
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Неплатени Барања - Биро
        </a>
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block"
            href="#">
            Платени Барања - Биро
        </a>
    </div>

    <div class="my-2 bg-gray-600 h-[1px]"></div>

    {{-- Finansiski pregledi --}}

    <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdownFinansiskiPregledi()">
        <div class="flex justify-between w-full items-center">
            <span class="text-[13px] ml-4 text-gray-200 font-bold">Финансиски прегледи</span>
            <span class="text-xs rotate-180" id="finansiskiPreglediArrow">
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
    <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="finansiskiPreglediSubmenu">
        <a wire:navigate href="" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">
            Преглед - Наплата
        </a>

    </div>

    <div class="my-2 bg-gray-600 h-[1px]"></div>


</div>
