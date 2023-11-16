<div class="flex justify-center items-center mx-auto w-full sm:max-w-3xl h-auto  mt-6">
    <form wire:submit="addNote" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">


            <!-- note_desc -->
            <div class="mt-4">
                <x-input-label for="note_desc" :value="__('Краток Опис')" />
                <x-text-input wire:model="note_desc" id="color_code" class="block mt-1 w-full" type="text"
                    name="note_desc" required autofocus autocomplete="note_desc" />
                <x-input-error :messages="$errors->get('note_desc')" class="mt-2" />
            </div>


        <!-- Note -->
        <div class="mt-4">
            <x-input-label for="note_text" :value="__('Текст во Забелешка')" />
            <textarea wire:model="note_text" name="note_text" id="note_text" rows="12" autocomplete="note_text"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
            <x-input-error :messages="$errors->get('note_text')" class="mt-2" />
        </div>

        <div class="flex justify-between">
            <a wire:navigate href="{{ route('notes.all') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Додај') }}
            </x-primary-button>
        </div>
    </form>
</div>
