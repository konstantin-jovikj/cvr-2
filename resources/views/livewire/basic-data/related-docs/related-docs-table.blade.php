<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Приложени документи кон Барањето</h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        <div>
            <a href="{{ route('relateddoc.add') }}" wire:navigate
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додај Нов Прилог Документ</a>
        </div>
    </div>
    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow ">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Бр
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Опис
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Едитирање и Бришење
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300 text-left">
                @foreach ($relatedDocs as $relatedDoc)
                    <tr class="whitespace-wrap">
                        <td class="px-6 py-1 text-xs text-gray-800">
                            {{ $relatedDoc->id }}
                        </td>
                        <td class="px-6 py-1 text-xs text-gray-800">
                            {{ $relatedDoc->desc }}
                        </td>

                        <td class="px-6 py-1 text-center flex gap-2">
                            <a wire:navigate href="{{ route('relateddoc.edit', $relatedDoc->id) }}"
                                class="px-4 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <button wire:click='deleteRelatedDocs({{ $relatedDoc->id }})'
                                wire:confirm="Дали сте сигурени дека сакате да го избришете овој prilog dokument?"
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
