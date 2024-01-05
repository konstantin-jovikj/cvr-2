<div class="sidebar  top-0 bottom-0 lg:left-0 p-2 md:min-w-[230px]  text-center bg-gray-900 " id="sidebar">
    {{-- LOGO --}}
    <div class="text-gray-100 text-xl flex justify-between items-center ">
        <div class="p-2.5" id="logo">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </div>
        <div class="p-2.5 ml-auto sideIcon cursor-pointer" onclick="toggleSideNav(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>



    <div id="mainSideNav">



        <div
            class="py-1 mt-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
            <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold" href="{{ route('homepage') }}">Почетна</a>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>

        {{-- POSREDNICI --}}
        <div
            class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
            <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold"
                href="{{ route('mediators.all') }}">Посредници</a>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>

        {{-- SOPSTVENICI --}}
        <div
            class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
            <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold"
                href="{{ route('customers.all') }}">Сопственици</a>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>

        {{-- BARANJA --}}
        <div
            class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
            <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold"
                href="{{ route('applications.all') }}">Барања</a>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>




        @if (auth()->user()->role_id == 2)
            {{-- KORISNICI --}}
            <div
                class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white">
                <a wire:navigate class="text-[13px] ml-4 text-gray-200 font-bold"
                    href="{{ route('users') }}">Корисници</a>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
        @endif

        {{-- OSNOVNI PODATOCI --}}
        @php
            $activeRole = auth()->user()->role->role_name;
        @endphp
        @if (Gate::allows('погледни-ресурс', $activeRole))
            <div class="py-1 my-1 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600 text-white"
                onclick="dropdownPodatoci()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[13px] ml-4 text-gray-200 font-bold">Основни Податоци</span>
                    <span class="text-xs rotate-180" id="podatociArrow">
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
            <div id="sideNavData">

                <div class="text-left text-xs mt-2 w-4/5 mx-auto text-gray-200 font-bold " id="podatociSubmenu">
                    <a wire:navigate href="{{ route('manufacturers.all') }}"
                    class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Производители</a>
                    <a wire:navigate href="{{ route('brands.all') }}"
                    class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Марка</a>
                    <a wire:navigate href="{{ route('types.all') }}"
                    class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1 bg-gray-800 block">Тип</a>

                </div>
            </div>

            <div class="my-2 bg-gray-600 h-[1px]"></div>
        @endif
    </div>
</div>
