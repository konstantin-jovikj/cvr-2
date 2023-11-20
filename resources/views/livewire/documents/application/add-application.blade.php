<div class="flex flex-col justify-center items-center mx-auto w-full sm:max-w-5xl h-auto  mt-6">
    {{-- Customer Details --}}
    <div class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4 mb-2">

        <h2 class=" text-xl font-bold border-b-2 border-sky-600 pb-2">{{ $currentCustomer->customer_name }}</h2>

        <dl class=" text-gray-900 divide-y divide-gray-200 grid grid-cols-2 divide-x ">
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">ЕМБГ</dt>
                <dd class="text-sm font-semibold">{{ $currentCustomer->embg }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">ЕМБС</dt>
                <dd class="text-sm font-semibold">{{ $currentCustomer->embs }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Адреса</dt>
                <dd class="text-sm font-semibold">{{ $currentCustomer->address }} /
                    {{ $currentCustomer->city->zip }}-{{ $currentCustomer->city->city_name }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Телефон</dt>
                <dd class="text-sm font-semibold">{{ $currentCustomer->phone }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Попуст</dt>
                <dd class="text-sm font-semibold">{{ $currentCustomer->discount }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Забелешка</dt>
                <dd class="text-sm font-semibold">{{ $currentCustomer->note }}</dd>
            </div>

        </dl>
    </div>
    <form wire:submit="addApplication" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">

        <!-- Tip na Baranje -->
        <div class="mt-4">
            <div class="mt-4">
                <x-input-label for="selected_app_type_name" :value="__('Тип на Барање')" />
                <select wire:model="selected_app_type_name"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Тип на Барање -- </option>
                    @foreach ($appTypes as $appType)
                        <option value="{{ $appType->id }}">{{ $appType->app_type_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selected_app_type_name')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-4 gap-4">
            <!-- Date -->
            <div class="w-1/3">
                <x-input-label for="appDate" :value="__('Датум')" />
                <input wire:model='appDate' type="date" name="appDate" id="appDate" value="{{ $appDate }}"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <x-input-error :messages="$errors->get('appDate')" class="mt-2" />
            </div>

            <!-- Mediator -->
            <div class="w-1/3">
                <x-input-label for="selectedMediator" :value="__('Посредник')" />
                <select wire:model="selectedMediator"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Посредник -- </option>
                    @foreach ($mediators as $mediator)
                        <option value="{{ $mediator->id }}">{{ $mediator->mediator_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedMediator')" class="mt-2" />
            </div>

            <!-- Category -->
            <div class="w-1/3">
                <x-input-label for="selectedCategory" :value="__('Категорија')" />
                <select wire:model="selectedCategory"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Категорија -- </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedCategory')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-4 gap-4">
            <!-- Manufacturer -->
            <div class="w-1/3">
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
            <div class="w-1/3">
                <x-input-label for="selectedBrand" :value="__('Марка')" />
                <select wire:model.live="selectedBrand"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Марка -- </option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedBrand')" class="mt-2" />
            </div>

            <!-- Type -->
            <div class="w-1/3">
                <x-input-label for="selectedType" :value="__('Тип')" />
                <select wire:model="selectedType"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Тип -- </option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedType')" class="mt-2" />
            </div>

        </div>

        <div class="flex w-full mt-4 gap-4">
            <!-- VIN  -->
            <div class="w-1/3">
                <x-input-label for="vin_number" :value="__('VIN код - Број на шасија')" />
                <x-text-input wire:model="vin_number " id="vin_number " class="block mt-1 w-full" type="text"
                    name="vin_number " required autofocus autocomplete="vin_number " />
                <x-input-error :messages="$errors->get('vin_number ')" class="mt-2" />
            </div>

            <!-- Тип на Мотор  -->
            <div class="w-1/3">
                <x-input-label for="engine_type" :value="__('Тип на мотор')" />
                <x-text-input wire:model="engine_type" id="engine_type" class="block mt-1 w-full" type="text"
                    name="engine_type" required autofocus autocomplete="engine_type" />
                <x-input-error :messages="$errors->get('engine_type')" class="mt-2" />
            </div>

            <!-- Број на Мотор  -->
            <div class="w-1/3">
                <x-input-label for="engine_number" :value="__('Број на мотор')" />
                <x-text-input wire:model="engine_number " id="engine_number " class="block mt-1 w-full"
                    type="text" name="engine_number " required autofocus autocomplete="engine_number " />
                <x-input-error :messages="$errors->get('engine_number ')" class="mt-2" />
            </div>

        </div>


        <!-- VIN  -->
        <div class="mt-4">
            <x-input-label for="selectedConfirmation" :value="__('Тип на Потврда')" />
            <ul
                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex ">
                <li class="flex w-full border-b border-gray-200 sm:border-b-0">
                    @foreach ($confirmations as $confirmation)
                        <div class="flex items-center ps-3 w-1/3">
                            <input wire:model='selectedConfirmation'
                                id="selectedConfirmation_{{ $confirmation->id }}" type="radio"
                                value="{{ $confirmation->id }}" name="selectedConfirmation"
                                class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500  focus:ring-2">
                            <label for="selectedConfirmation_{{ $confirmation->id }}"
                                class="w-full py-3 ms-2 text-sm text-gray-900 font-semibold">{{ $confirmation->confirmation_name }}</label>
                        </div>
                    @endforeach
                </li>
            </ul>
            <x-input-error :messages="$errors->get('selectedConfirmation ')" class="mt-2" />
        </div>

        <div class="flex w-full mt-4 gap-4">
            <!-- is_change  -->
            <div class="w-1/2">
                <x-input-label for="isChange" :value="__('Преправка')" />
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    @foreach ($isCnanges as $isCnangeLabel => $isCnangeValue)
                        <li class="flex w-full border-b border-gray-200 sm:border-b-0">
                            <div class="flex items-center ps-3 w-1/3">
                                <input wire:model='selectedChange' id="isChange{{ $loop->index }}"
                                    type="radio" value="{{ $isCnangeValue }}" name="isChange"
                                    class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 focus:ring-2">
                                <label for="isChange{{ $loop->index }}"
                                    class="w-full py-3 ms-2 text-sm text-gray-900 font-semibold">{{ $isCnangeLabel }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <x-input-error :messages="$errors->get('selectedChange')" class="mt-2" />
            </div>


            <!-- Број на Мотор  -->
            <div class="w-1/2">
                <x-input-label for="engine_number " :value="__('Број на мотор')" />
                <x-text-input wire:model="engine_number " id="engine_number " class="block mt-1 w-full"
                    type="text" name="engine_number " required autofocus autocomplete="engine_number " />
                <x-input-error :messages="$errors->get('engine_number ')" class="mt-2" />
            </div>
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
