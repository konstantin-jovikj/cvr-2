<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Посредници</h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        <div>
            <a href="{{ route('mediator.add') }}" wire:navigate
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додај
                Нов Посредник</a>
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
                        Адреса
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Телефон
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Забелешка
                    </th>

                    <th class="px-6 py-2 text-xs text-gray-800">
                        Едитирање и Бришење
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300 text-left">
                @foreach ($mediators as $mediator)
                    <tr class="whitespace-wrap">
                        <td class="px-6 py-1 text-sm text-gray-800 ">
                            {{ $mediator->mediator_name }}
                        </td>
                        <td class="px-6 py-1 text-sm text-gray-800 ">
                            {{ $mediator->mediator_address }}
                        </td>
                        <td class="px-6 py-1 text-sm text-gray-800 ">
                            {{ $mediator->mediator_phone }}
                        </td>
                        <td class="px-6 py-1">
                            <span class="text-sm text-green-700 ">
                                {{ $mediator->note }}
                            </span>
                        </td>

                        <td class="px-6 py-1 text-center">
                            <a wire:navigate href="{{ route('mediator.edit', $mediator->id) }}"
                                class="px-4 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <button wire:click='deleteMediator({{ $mediator->id }})'
                                wire:confirm="Дали сте сигурени дека сакате да го избришете Посредникот?"
                                class="px-4 py-1 text-xs text-white bg-red-600 hover-bg-red-800 rounded-full">Избриши</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mx-auto mt-5">
        {{-- {{ $shapes->links() }} --}}
    </div>
</div>
