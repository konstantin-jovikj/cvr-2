<div class="flex justify-center items-center mx-auto w-full sm:max-w-3xl h-auto  mt-6">
    <form wire:submit="addModification" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">

        <!-- Modification -->
        <div class="mt-4">
            <x-input-label for="modification_name" :value="__('Вид на Преправкa / Поправкa')" />
            <x-text-input wire:model="modification_name" id="modification_name" class="block mt-1 w-full" type="text"
                name="modification_name" required autofocus autocomplete="modification_name" />
            <x-input-error :messages="$errors->get('modification_name')" class="mt-2" />
        </div>



        <div class="flex justify-between">
            <a wire:navigate href="{{ route('modifications.all') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Додај') }}
            </x-primary-button>
        </div>
    </form>
</div>
