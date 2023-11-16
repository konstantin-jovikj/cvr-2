<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Текст во забелешка на потврда за сообразност на преправено возило
            </h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        <div>
            <a href="{{ route('note.add') }}" wire:navigate
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додај
                Нова Забелешка</a>
        </div>
    </div>
    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow ">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Краток Опис
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Текст во Забелешка
                    </th>

                    <th class="px-6 py-2 text-xs text-gray-800">
                        Едитирање и Бришење
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300 text-left">
                @foreach ($notes as $note)
                    <tr class="whitespace-wrap">
                        <td class="px-6 py-1 text-sm text-gray-800 font-bold">
                            {{ $note->note_desc}}
                        </td>
                        <td class="px-6 py-1 text-sm text-gray-800 ">
                            {{ $note->note_text }}
                        </td>


                        <td class="px-6 py-1 text-center flex gap-2">
                            <a wire:navigate href="{{ route('note.edit', $note->id) }}"
                                class="px-4 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <button wire:click='deleteNote({{ $note->id }})'
                                wire:confirm="Дали сте сигурени дека сакате да ја избришете оваа забелешка?"
                                class="px-4 py-1 text-xs text-white bg-red-600 hover-bg-red-800 rounded-full">Избриши</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mx-auto mt-5">
        {{ $notes->links() }}
    </div>
</div>
