<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Барања</h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        {{-- <div>
            <a href="{{ route('category.add') }}"
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додај
                Нова Категорија</a>
        </div> --}}
    </div>
    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow ">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-2 py-2 text-xs text-gray-800">
                        Датум
                    </th>
                    <th class="px-2 py-2 text-xs text-gray-800">
                        Деловоден број
                    </th>
                    <th class="px-2 py-2 text-xs text-gray-800">
                        Име и презме
                    </th>
                    <th class="px-2 py-2 text-xs text-gray-800">
                        Категоријa
                    </th>
                    <th class="px-2 py-2 text-xs text-gray-800">
                        Бр на шасија
                    </th>
                    <th class="px-2 py-2 text-xs text-gray-800">
                        Забелешка
                    </th>
                    <th class="px-2 py-2 text-xs text-gray-800">
                        Статус
                    </th>
                    <th class="px-2 py-2 text-xs text-gray-800">
                        Опции
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300 text-left">
                @foreach ($applications as $application)
                    <tr class="whitespace-wrap">
                        <td class="px-2 py-1 text-xs text-gray-800 ">
                            {{ $application->app_date }}
                        </td>
                        <td class="px-2 py-1">
                            <div class="text-xs text-gray-900 font-bold">
                                {{ $application->app_number }}
                            </div>
                        </td>
                        <td class="px-2 py-1">
                            <div class="text-xs text-gray-900">
                                {{ $application->customer->customer_name }}
                            </div>
                        </td>
                        <td class="px-2 py-1">
                            <div class="text-xs text-gray-900">
                                {{ optional($application->category)->category_name }}
                            </div>
                        </td>
                        <td class="px-2 py-1">
                            <div class="text-xs text-gray-900">
                                {{ $application->vin_number }}
                            </div>
                        </td>

                        <td class="px-2 py-1">
                            <span class="text-xs text-green-700 font-bold">
                                {{ $application->note }}
                            </span>
                        </td>
                        <td class="px-2 py-1">
                            @if ($application->approval_number == null || $application->approval_number == '')
                             nema
                            @else
                            ima
                            @endif
                        </td>


                        </form>

                        <td class="px-2 py-1 flex  gap-2">

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div x-data="{ name: '{{ __('Одбери Опции') }}' }" x-text="name"
                                                x-on:profile-updated.window="name = $event.detail.name"></div>

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('application.details', $application->id)" wire:navigate>
                                            {{ __('Детали') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Печати') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Досие') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Таблица') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Таблица СТП') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Записник') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Барање до Биро') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Наод') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Ед.Одоб') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('customers.all')" wire:navigate>
                                            {{ __('Избриши') }}
                                        </x-dropdown-link>

                                    </x-slot>
                                </x-dropdown>
                            </div>


                            {{-- <button wire:click='deleteCategory({{ $application->id }})'
                                wire:confirm="Дали сте сигурени дека сакате да ја избришете оваа категорија?"
                                class="px-2 py-1 text-xs text-white bg-red-600 hover-bg-red-800 rounded-full">Избриши</button>  --}}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mx-auto mt-5">
        {{ $applications->links() }}
    </div>
</div>
