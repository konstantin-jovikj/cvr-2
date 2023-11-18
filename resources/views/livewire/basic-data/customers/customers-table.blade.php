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
                        <td class="px-2 py-1 text-xs text-gray-800 ">
                            {{ $customer->customer_name }}
                        </td>
                        <td class="px-2 py-1 text-xs text-gray-800 ">
                            {{ $customer->embg }}
                        </td>
                        <td class="px-2 py-1 text-xs text-gray-800 ">
                            {{ $customer->embs }}
                        </td>
                        <td class="px-2 py-1 text-xs text-gray-800 ">
                            {{ $customer->id_number }}
                        </td>
                        <td class="px-2 py-1 text-xs text-gray-800 ">
                            {{ $customer->address }}
                        </td>
                        <td class="px-2 py-1 text-xs text-gray-800 ">
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
                            <a wire:navigate href="{{ route('mediator.edit', $customer->id) }}"
                                class="px-3 py-1 text-xs text-white bg-sky-600 hover:bg-sky-800 rounded-full">Досие</a>

                            <a wire:click='deleteMediator({{ $customer->id }})'
                                class="px-3 py-1 text-xs text-white bg-purple-600 hover:bg-purple-800 rounded-full">Барање</a>

                            <a wire:navigate href="{{ route('mediator.edit', $customer->id) }}"
                                class="px-3 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <button wire:click='deleteMediator({{ $customer->id }})'
                                wire:confirm="Дали сте сигурени дека сакате да го избришете Сопственикот?"
                                class="px-3 py-1 text-xs text-white bg-red-600 hover:bg-red-800 rounded-full">Избриши</button>
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
