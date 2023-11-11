<div class="flex justify-center items-center mx-auto w-full sm:max-w-3xl h-auto  mt-6">
    <form wire:submit="updateIt" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">
        <!-- Name -->
        <div>
            <x-input-label for="itName" :value="__('Акредитирано Тело ')" />
            <x-text-input wire:model="itName" id="itName" class="block mt-1 w-full" type="text" name="itName" required
                autofocus autocomplete="itName" />
            <x-input-error :messages="$errors->get('itName')" class="mt-2" />
        </div>
        <div class="w-full flex gap-4 mt-5">

            <div class="w-1/2">
                <x-input-label for="certNo" :value="__('Број на сертификат за Акредитација ')" />
                <x-text-input wire:model="certNo" id="certNo" class="block mt-1 w-full" type="text" name="certNo"
                    required autofocus autocomplete="certNo" />
                <x-input-error :messages="$errors->get('certNo')" class="mt-2" />
            </div>

            <div class="w-1/2">
                <x-input-label for="localDepartmentPrefix" :value="__('Префикс')" />
                <x-text-input wire:model="localDepartmentPrefix" id="localDepartmentPrefix" class="block mt-1 w-full"
                    type="text" name="localDepartmentPrefix" required autofocus
                    autocomplete="localDepartmentPrefix" />
                <x-input-error :messages="$errors->get('localDepartmentPrefix')" class="mt-2" />
            </div>
        </div>

        <div class="w-full flex gap-4 mt-5">

            <!-- Email Address -->
            <div class="w-1/2">
                <x-input-label for="email" :value="__('Е-маил')" />
                <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"
                    required autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <!-- Phone -->
            <div class="w-1/2">
                <x-input-label for="phone" :value="__('Телефон')" />
                <x-text-input wire:model="phone" id="phone" class="block mt-1 w-full" type="text" name="phone"
                    required autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
        </div>


        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="localDepartmentAddress" :value="__('Адреса')" />
            <x-text-input wire:model="localDepartmentAddress" id="localDepartmentAddress" class="block mt-1 w-full"
                type="text" name="localDepartmentAddress" required autocomplete="localDepartmentAddress" />
            <x-input-error :messages="$errors->get('localDepartmentAddress')" class="mt-2" />
        </div>

        <!-- Department -->
        <div class="mt-4 flex w-full gap-4">

            <div class="w-1/2">
                <x-input-label for="country" :value="__('Држава')" />
                <select wire:model.live="country"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Држава -- </option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>

            <!-- Local Department -->
            @if (!is_null($country))
                <div class="w-1/2">
                    <x-input-label for="cityId" :value="__('Град')" />
                    <select wire:model="cityId"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="" selected> -- Одбери Град -- </option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->city_name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('cityId')" class="mt-2" />
                </div>
            @endif
        </div>
        <div class="mt-4 flex w-full gap-4">

            <div class="w-1/2">
                <x-input-label for="startDate" :value="__('Прва акредитација')" />
                <x-text-input wire:model="startDate" id="startDate" class="block mt-1 w-full" type="date"
                    name="startDate" required autocomplete="startDate" />
                <x-input-error :messages="$errors->get('startDate')" class="mt-2" />
            </div>

            <div class="w-1/2">
                <x-input-label for="endDate" :value="__('Дата на важност на сертификатот')" />
                <x-text-input wire:model="endDate" id="endDate" class="block mt-1 w-full" type="date"
                    name="endDate" required autocomplete="endDate" />
                <x-input-error :messages="$errors->get('endDate')" class="mt-2" />
            </div>
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="locDepDesc" :value="__('Краток опис на опсегот на акредитација')" />
            <textarea wire:model="locDepDesc" name="locDepDesc" id="locDepDesc" rows="3" required autocomplete="locDepDesc"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>

            <x-input-error :messages="$errors->get('locDepDesc')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('Додај') }}
            </x-primary-button>
        </div>
    </form>
</div>
