<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Барања</h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        <div>
            <a href="{{ route('category.add') }}"
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додај
                Нова Категорија</a>
        </div>
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

                        </form>

                        <td class="px-2 py-1 flex  gap-2">
                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-fuchsia-600 hover:bg-fuchsia-800 rounded-full">Детали</a>

                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-violet-600 hover:bg-violet-800 rounded-full">Печати</a>

                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-blue-600 hover:bg-blue-800 rounded-full">Измени</a>

                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-cyan-600 hover:bg-cyan-800 rounded-full">Досие</a>

                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-teal-600 hover:bg-teal-800 rounded-full">Таблица</a>

                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-green-600 hover:bg-green-800 rounded-full">Таблица
                                СТП</a>

                                <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                    class="px-2 py-1 text-xs text-white bg-yellow-600 hover:bg-yellow-800 rounded-full">Записник</a>

                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-amber-600 hover:bg-amber-800 rounded-full">Барање
                                до Биро</a>

                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-orange-600 hover:bg-orange-800 rounded-full">Наод</a>

                            <a wire:navigate href="{{ route('category.edit', $application->id) }}"
                                class="px-2 py-1 text-xs text-white bg-stone-600 hover:bg-stone-800 rounded-full">Ед.Одоб</a>

                            <button wire:click='deleteCategory({{ $application->id }})'
                                wire:confirm="Дали сте сигурени дека сакате да ја избришете оваа категорија?"
                                class="px-2 py-1 text-xs text-white bg-red-600 hover-bg-red-800 rounded-full">Избриши</button>
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
