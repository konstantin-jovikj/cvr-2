<div class="flex justify-center items-center mx-auto w-full sm:max-w-3xl h-auto  mt-6">
    <form wire:submit="updateApplicationType" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">

        <!-- additional_desc -->
        <div class="mt-4">
            <x-input-label for="app_type_name" :value="__('Тип на Барање')" />
            <x-text-input wire:model="app_type_name" id="app_type_name" class="block mt-1 w-full" type="text"
                name="app_type_name" required autofocus autocomplete="app_type_name" />
            <x-input-error :messages="$errors->get('app_type_name')" class="mt-2" />
        </div>


        <div class="flex justify-between">
            <a wire:navigate href="{{ route('applicationtype.all') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Ажурирај') }}
            </x-primary-button>
        </div>
    </form>
</div>
