<div class="flex justify-center items-center mx-auto w-full sm:max-w-3xl h-auto  mt-6">
    <form wire:submit="updateType" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">
        <!-- Manufacturer -->
        <div class="mt-4">
            <x-input-label for="selectedManufacturer" :value="__('Производител')" />
            <select wire:model.live="selectedManufacturer"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="" selected> -- Одбери Производител -- </option>
                @foreach ($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('selectedManufacturer')" class="mt-2" />
        </div>

        <!-- Brand -->
        @if(!is_null($selectedManufacturer))
        <div class="mt-4">
            <x-input-label for="selectedBrand" :value="__('Марка на возило')" />
            <select wire:model="selectedBrand"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="" selected> -- Одбери Марка -- </option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('selectedBrand')" class="mt-2" />
        </div>
        @endif

        <!-- type_name -->
        <div class="mt-4">
            <x-input-label for="type_name" :value="__('Тип на Возило - Опис')" />
            <x-text-input wire:model="type_name" id="type_name" class="block mt-1 w-full" type="text"
                name="type_name" required autofocus autocomplete="type_name" />
            <x-input-error :messages="$errors->get('type_name')" class="mt-2" />
        </div>

        <!-- commercial_mark -->
        <div class="mt-4">
            <x-input-label for="commercial_mark" :value="__('Комерцијална Ознака')" />
            <x-text-input wire:model="commercial_mark" id="commercial_mark" class="block mt-1 w-full" type="text"
                name="commercial_mark" autofocus autocomplete="commercial_mark" />
            <x-input-error :messages="$errors->get('commercial_mark')" class="mt-2" />
        </div>

        <!-- variant -->
        <div class="mt-4 flex gap-4 w-full">

            <div class="w-1/2">
                <x-input-label for="variant" :value="__('Варијанта')" />
                <x-text-input wire:model="variant" id="variant" class="block mt-1 w-full" type="text"
                    name="variant" autofocus autocomplete="variant" />
                <x-input-error :messages="$errors->get('variant')" class="mt-2" />
            </div>

            <!-- configuration -->
            <div class="w-1/2">
                <x-input-label for="configuration" :value="__('Изведба')" />
                <x-text-input wire:model="configuration" id="configuration" class="block mt-1 w-full" type="text"
                    name="configuration" autofocus autocomplete="configuration" />
                <x-input-error :messages="$errors->get('configuration')" class="mt-2" />
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
            <a wire:navigate href="{{ route('types.all') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Ажурирај') }}
            </x-primary-button>
        </div>
    </form>
</div>
