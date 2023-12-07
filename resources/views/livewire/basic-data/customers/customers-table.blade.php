<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Сопственици</h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        <div>
            <a href="{{ route('customer.add') }}" wire:navigate
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додај
                Нов Сопственик</a>
        </div>
    </div>
    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow ">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Име и Презиме
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        ЕМБГ
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        ЕМБС
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Број на Л.К
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Адреса
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Телефон
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Попуст(%)
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Забелешка
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Акции
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300 text-left  ">
                @foreach ($customers as $customer)
                    <tr class="divide-x">
                        <td class="px-2 py-1 text-sm text-gray-800 font-bold">
                            {{ $customer->customer_name }}
                        </td>
                        <td class="px-2 py-1 text-sm text-red-800 font-bold">
                            {{ $customer->embg }}
                        </td>
                        <td class="px-2 py-1 text-sm text-sky-800 font-bold">
                            {{ $customer->embs }}
                        </td>
                        <td class="px-2 py-1 text-sm text-teal-800 font-bold">
                            {{ $customer->id_number }}
                        </td>
                        <td class="px-2 py-1 text-xs text-gray-800 ">
                            {{ $customer->address }}, {{$customer->city->zip}}->{{$customer->city->city_name}}
                        </td>
                        <td class="px-2 py-1 text-sm text-orange-700 font-bold">
                            {{ $customer->phone }}
                        </td>
                        <td class="px-2 py-1 text-xs text-gray-800 ">
                            {{ $customer->discount }}
                        </td>
                        <td class="px-2 py-1">
                            <span class="text-xs text-green-700 ">
                                {{ $customer->note }}
                            </span>
                        </td>

                        <td class="px-1 py-1 text-center flex gap-1">
                            {{-- <a wire:navigate href="{{ route('user.dossier', $customer->id) }}"
                                class="px-3 py-1 text-xs text-white bg-sky-600 hover:bg-sky-800 rounded-full">Досие</a>

                            <a wire:navigate href="{{ route('application.add', $customer->id) }}"
                                class="px-3 py-1 text-xs text-white bg-purple-600 hover:bg-purple-800 rounded-full">Барање</a>

                            <a wire:navigate href="{{ route('customer.edit', $customer->id) }}"
                                class="px-3 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <button wire:click='deleteCustomer({{ $customer->id }})'
                                wire:confirm="Дали сте сигурени дека сакате да го избришете Сопственикот?"
                                class="px-3 py-1 text-xs text-white bg-red-600 hover:bg-red-800 rounded-full">Избриши</button> --}}


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
                                            <x-dropdown-link :href="route('user.dossier', $customer->id)" wire:navigate>
                                                {{ __('Досие') }}
                                            </x-dropdown-link>

                                            <x-dropdown-link :href="route('application.add', $customer->id)" wire:navigate>
                                                {{ __('Барање') }}
                                            </x-dropdown-link>
                                            <x-dropdown-link :href="route('customer.edit', $customer->id)" wire:navigate>
                                                {{ __('Измени') }}
                                            </x-dropdown-link>
                                            <button wire:click='deleteCustomer({{ $customer->id }})'
                                                wire:confirm="Дали сте сигурени дека сакате да го избришете Сопственикот?"
                                                class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Избриши</button>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mx-auto mt-5">
        {{ $customers->links() }}
    </div>
</div>
