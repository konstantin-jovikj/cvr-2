<div class="flex items-center justify-center  w-full">
    <div class="w-3/6">
        <form wire:submit="saveUserUpdate" class="bg-white p-6 rounded-xl shadow">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Име')" />
                <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text"
                    name="name"/>

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Е-маил')" />
                <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email"
                    name="email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Role -->
            <div class="mt-4">
                <x-input-label for="role_id" :value="__('Улога')" />
                <select wire:model="role_id" id="role_id" name="role_id"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-sky-500 focus:border-sky-500 block w-full py-2 px-4 mt-1">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @if ($user->role_id == $role->id) selected @endif>
                        {{ $role->role_name }}</option>
                @endforeach
            </select>
                <x-input-error :messages="$errors->get('role_id')" class="mt-2" />
            </div>



            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Зачувај Измени') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
