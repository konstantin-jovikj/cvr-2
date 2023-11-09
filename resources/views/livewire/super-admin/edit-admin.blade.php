<div class="flex justify-center items-center mx-auto w-full sm:max-w-md h-auto  mt-6   ">
    <form wire:submit="registerAdmin" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Име и Презиме')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Е-маил')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>



        <!-- Department -->
        <div class="mt-4">
            <x-input-label for="department" :value="__('Сектор')" />
            <select wire:model.live="department" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="" selected> -- Одбери Сектор -- </option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('selectedDepartment')" class="mt-2" />
        </div>

        <!-- Local Department -->
        @if (!is_null($department))
            <div class="mt-4">
                <x-input-label for="localDepartment" :value="__('Локален Оддел')" />
                <select wire:model="localDepartment" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Оддел -- </option>
                    @foreach ($localDepartments as $localDepartment)
                        <option value="{{ $localDepartment->id }}">{{ $localDepartment->local_department_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('local_department_id')" class="mt-2" />
            </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Додај') }}
            </x-primary-button>
        </div>
    </form>
</div>
