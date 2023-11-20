<div class="flex justify-center items-center mx-auto w-full sm:max-w-3xl h-auto  mt-6">
    <form wire:submit="updateCustomer" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">

        <div class="flex w-full mt-4 gap-4">

            <!-- Customer Type -->
            <div class="w-2/5">
                <x-input-label for="selectedCustomerType" :value="__('Тип на Сопственик')" />
                <select wire:model.live="selectedCustomerType"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Тип на Сопственик -- </option>
                    @foreach ($customerTypes as $customerType)
                        <option value="{{ $customerType->id }}">{{ $customerType->customer_type }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedCustomerType')" class="mt-2" />
            </div>

            <!-- Customer Name -->
            <div class="w-3/5">
                <x-input-label for="customer_name" :value="__('Име и Презиме (Назив на Правно Лице)')" />
                <x-text-input wire:model="customer_name" id="customer_name" class="block mt-1 w-full" type="text"
                    name="customer_name" required autofocus autocomplete="customer_name" />
                <x-input-error :messages="$errors->get('customer_name')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-4 gap-4">
            <!-- Customer address -->
            <div class="w-3/5">
                <x-input-label for="address" :value="__('Адреса')" />
                <x-text-input wire:model="address" id="address" class="block mt-1 w-full" type="text"
                    name="address" required autofocus autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Customer city -->
            <div class="w-2/5">
                <x-input-label for="selectedCity" :value="__('Град')" />
                <select wire:model="selectedCity"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Град -- </option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->zip }}-{{ $city->city_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedCity')" class="mt-2" />
            </div>
        </div>

        @if ($selectedType == 1 || $selectedCustomerType == 1)
            <div class="flex w-full mt-4 gap-4">
                <!-- ЕМБГ -->
                <div class="w-1/2">
                    <x-input-label for="embg" :value="__('ЕМБГ')" />
                    <x-text-input wire:model="embg" id="embg" class="block mt-1 w-full" type="text"
                        name="embg"  autofocus autocomplete="embg" />
                    <x-input-error :messages="$errors->get('embg')" class="mt-2" />
                </div>

                <!-- id_number -->
                <div class="w-1/2">
                    <x-input-label for="id_number" :value="__('Број на Лична Карта')" />
                    <x-text-input wire:model="id_number" id="id_number" class="block mt-1 w-full" type="text"
                        name="id_number"  autofocus autocomplete="id_number" />
                    <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
                </div>
            </div>
        @endif

        @if ($selectedType == 2 || $selectedCustomerType == 2)
            <!-- ЕМБС -->
            <div class="mt-4">
                <x-input-label for="embs" :value="__('ЕМБС')" />
                <x-text-input wire:model="embs" id="embs" class="block mt-1 w-full" type="text" name="embs"
                    required autofocus autocomplete="embs" />
                <x-input-error :messages="$errors->get('embs')" class="mt-2" />
            </div>
        @endif

        <div class="flex w-full mt-4 gap-4">
            <!-- phone -->
            <div class="w-1/2">
                <x-input-label for="phone" :value="__('Телефон')" />
                <x-text-input wire:model="phone" id="phone" class="block mt-1 w-full" type="text"
                    name="phone"  autofocus autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- discount -->
            <div class="w-1/2">
                <x-input-label for="discount" :value="__('Попуст')" />
                <x-text-input wire:model="discount" id="discount" class="block mt-1 w-full" type="text"
                    name="discount"  autofocus autocomplete="discount" />
                <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
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
            <a wire:navigate href="{{ route('customers.all') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Ажурирај') }}
            </x-primary-button>
        </div>
    </form>
</div>
