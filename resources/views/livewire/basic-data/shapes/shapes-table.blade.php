<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Облик на каросерија за поединечни категории на возила</h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        <div>
            <a href="{{ route('shape.add') }}" wire:navigate
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додај
                Нов Облик на Каросерија</a>
        </div>
    </div>
    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow ">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Облик на Каросерија
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Дополнителен Опис
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
                @foreach ($shapes as $shape)
                    <tr class="whitespace-wrap">
                        <td class="px-6 py-1 text-sm text-gray-800 font-bold">
                            {{ $shape->body_shape }}
                        </td>
                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900">
                                {{ $shape->additional_desc }}
                            </div>
                        </td>
                        <td class="px-6 py-1">
                            <span class="text-sm text-green-700 font-bold">
                                {{ $shape->note }}
                            </span>


                        </td>

                        </form>

                        <td class="px-6 py-1 flex  gap-2">
                            <a wire:navigate href="{{ route('shape.edit', $shape->id) }}"
                                class="px-4 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <button wire:click='deleteCategory({{ $shape->id }})'
                                wire:confirm="Дали сте сигурени дека сакате да го избришете овој Облик на Каросерија?"
                                class="px-4 py-1 text-xs text-white bg-red-600 hover-bg-red-800 rounded-full">Избриши</button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mx-auto mt-5">
        {{ $shapes->links() }}
    </div>
</div>
