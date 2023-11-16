<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Тип на возила</h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        <div>
            <a wire:navigate href="{{ route('type.add') }}"
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додај
                Нов Тип на Возило</a>
        </div>
    </div>
    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow ">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Производител
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Марка
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Тип на Возило - Опис
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Комерцијална Ознака
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Варијанта
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Изведба
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Забелешка
                    </th>

                    <th class="px-6 py-2 text-xs text-gray-800">
                        Едитирање и Бришење
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300 text-center">
                @foreach ($types as $type)
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-1 text-sm text-gray-800 ">
                            {{ $type->manufacturer->name }}
                        </td>
                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900">
                                {{ $type->brand->brand_name}}
                            </div>
                        </td>
                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900 font-bold">
                                {{ $type->type_name}}
                            </div>
                        </td>
                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900 font-bold">
                                {{ $type->commercial_mark}}
                            </div>
                        </td>
                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900 font-bold">
                                {{ $type->variant}}
                            </div>
                        </td>
                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900 font-bold">
                                {{ $type->configuration}}
                            </div>
                        </td>
                        <td class="px-6 py-1">
                            <span class="text-sm text-green-700 font-bold">
                                {{ $type->note }}
                            </span>
                        </td>

                        </form>

                        <td class="px-6 py-1">
                            <a wire:navigate href="{{ route('type.edit', $type->id) }}"
                                class="px-4 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <button wire:click='deleteType({{ $type->id }})'
                                wire:confirm="Дали сте сигурен дека сакате да го избришете типот на возило?"
                                class="px-4 py-1 text-xs text-white bg-red-600 hover-bg-red-800 rounded-full">Избриши</button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mx-auto mt-5">
        {{ $types->links() }}
    </div>
</div>

