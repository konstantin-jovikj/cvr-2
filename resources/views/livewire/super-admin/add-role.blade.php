<div class="flex justify-center items-center w-full">
    <form wire:submit="addNewRole" class="bg-white p-12 shadow">
        <!-- Role -->
        <div>
            <x-input-label for="role_name" :value="__('Име на Улогата')" />
            <x-text-input wire:model="role_name" id="role_name" class="block mt-1 w-full" type="text" name="role_name" required autofocus autocomplete="role_name" />
            <x-input-error :messages="$errors->get('role_name')" class="mt-2" />
        </div>

        <x-primary-button class="mt-12 w-full">
            {{ __('Додај') }}
        </x-primary-button>
    </form>
</div>
