<div class="flex justify-center items-center mx-auto w-full sm:max-w-3xl h-auto  mt-6">
    <form wire:submit="updateManufacturer" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">
        <!-- name -->
        <div>
            <x-input-label for="name" :value="__('Име на Производителот')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- address -->
        <div>
            <x-input-label for="address" :value="__('Адреса')" />
            <x-text-input wire:model="address" id="address" class="block mt-1 w-full" type="text" name="address"
                required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Note -->
        <div class="mt-4">
            <x-input-label for="note" :value="__('Забелешка')" />
            <textarea wire:model="note" name="note" id="note" rows="3" autocomplete="note"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
            <x-input-error :messages="$errors->get('note')" class="mt-2" />
        </div>

        <div class="flex justify-between">
            <a wire:navigate href="{{route('manufacturers.all')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Ажурирај') }}
            </x-primary-button>
        </div>
    </form>
</div>
