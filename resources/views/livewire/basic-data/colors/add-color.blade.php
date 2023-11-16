<div class="flex justify-center items-center mx-auto w-full sm:max-w-3xl h-auto  mt-6">
    <form wire:submit="addColor" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">

        <!-- color_name -->
        <div class="mt-4 flex W-full gap-4" >

            <div class="w-2/3">
                <x-input-label for="color_name" :value="__('Опис на Боја')" />
                <x-text-input wire:model="color_name" id="color_name" class="block mt-1 w-full" type="text"
                    name="color_name" required autofocus autocomplete="color_name" />
                <x-input-error :messages="$errors->get('color_name')" class="mt-2" />
            </div>

            <!-- color_code -->
            <div class="w-1/3">
                <x-input-label for="color_code" :value="__('Шифра на Боја')" />
                <x-text-input wire:model="color_code" id="color_code" class="block mt-1 w-full" type="text"
                    name="color_code" required autofocus autocomplete="color_code" />
                <x-input-error :messages="$errors->get('color_code')" class="mt-2" />
            </div>
        </div>


        <!-- Note -->
        <div class="mt-4">
            <x-input-label for="note" :value="__('Забелешка')" />
            <textarea wire:model="note" name="note" id="note" rows="3" autocomplete="note"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
            <x-input-error :messages="$errors->get('note')" class="mt-2" />
        </div>

        <div class="flex justify-between">
            <a wire:navigate href="{{ route('fuel.all') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Додај') }}
            </x-primary-button>
        </div>
    </form>
</div>
