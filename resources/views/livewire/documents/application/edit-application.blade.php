<div class="flex flex-col justify-center items-center mx-auto w-full sm:max-w-5xl h-auto  mt-6 mb-32">
    {{-- Customer Details --}}
    <div class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4 mb-2">

        <h2 class=" text-xl font-bold border-b-2 border-sky-600 pb-2">{{ $currentApp->customer->customer_name }}</h2>

        <dl class=" text-gray-900 divide-y divide-gray-200 grid grid-cols-2 divide-x ">
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">ЕМБГ</dt>
                <dd class="text-sm font-semibold">{{ $currentApp->customer->embg }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">ЕМБС</dt>
                <dd class="text-sm font-semibold">{{ $currentApp->customer->embs }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Адреса</dt>
                <dd class="text-sm font-semibold">{{ $currentApp->customer->address }} /
                    {{ $currentApp->customer->city->zip }}-{{ $currentApp->customer->city->city_name }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Телефон</dt>
                <dd class="text-sm font-semibold">{{ $currentApp->customer->phone }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Попуст</dt>
                <dd class="text-sm font-semibold">{{ $currentApp->customer->discount }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Забелешка</dt>
                <dd class="text-sm font-semibold">{{ $currentApp->customer->note }}</dd>
            </div>

        </dl>
    </div>
    <form wire:submit="updateApplication" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">
        <div class="{{ $selectedAppTypeName == 6 ? '' : 'flex' }} w-full mt-4 gap-4"">
            <!-- Tip na Baranje -->
            <div class="{{ $selectedAppTypeName == 2 || $selectedAppTypeName == 3 ? 'w-2/3' : 'w-full' }}">
                <x-input-label for="selectedAppTypeName" :value="__('Тип на Барање')" class="text-sky-700 font-bold" />
                <select wire:model.live="selectedAppTypeName"
                    class="block mt-1 w-full border-sky-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    {{-- <option value=""  disabled selected> -- Одбери Тип на Барање -- </option> --}}
                    @foreach ($appTypes as $appType)
                        <option value="{{ $appType->id }}"
                            {{ $appType->id == $currentApp->app_type_id ? 'selected' : ''  }}>
                            {{ $appType->app_type_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedAppTypeName')" class="mt-2" />
            </div>

            @if ($selectedAppTypeName != 6)
                @if ($selectedAppTypeName == 2 || $selectedAppTypeName == 3)
                    <div class="w-1/3">
                        <x-input-label for="selectedIsLegalisation" :value="__('Дали е легализација?')" />
                        <select wire:model="selectedIsLegalisation"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="" disabled selected> -- Одбери дали е легализација? -- </option>
                            @foreach ($legalisations as $legalisation)
                                <option value="{{ $legalisation->id }}"
                                    {{ $legalisation->id == $currentApp->legalisation_id ? 'selected' : ''  }}>
                                    {{ $legalisation->legalisation_name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('selectedIsLegalisation')" class="mt-2" />
                    </div>
                @endif
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
                    <option value="" disabled selected> -- Одбери Посредник -- </option>
                    @foreach ($mediators as $mediator)
                        <option value="{{ $mediator->id }}"
                            {{ $mediator->id == $currentApp->mediator_id  ? 'selected' : ''  }}>
                            {{ $mediator->mediator_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedMediator')" class="mt-2" />
            </div>

            <!-- Category -->
            <div class="w-1/3">
                <x-input-label for="selectedCategory" :value="__('Категорија')" />
                <select wire:model="selectedCategory"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" > -- Одбери Категорија -- </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $currentApp->category_id == $category->id ? 'selected' : '' }} >
                            {{ $category->category_name }}</option>
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
                    <option value="" disabled  selected> -- Одбери Производител -- </option>
                    @foreach ($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}"
                            {{ $manufacturer->id == $selectedManufacturer ? 'selected' : '' }}>
                            {{ $manufacturer->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedManufacturer')" class="mt-2" />
            </div>

            @if(!is_null($selectedManufacturer))
            <!-- Brand -->
            <div class="w-1/3">
                <x-input-label for="selectedBrand" :value="__('Марка')" />
                <select wire:model.live="selectedBrand"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" disabled selected> -- Одбери Марка -- </option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}"
                            {{ $brand->id == $selectedBrand ? 'selected' : '' }}>
                            {{ $brand->brand_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedBrand')" class="mt-2" />
            </div>
            @endif
            <!-- Type -->
            <div class="w-1/3">
                <x-input-label for="selectedType" :value="__('Тип')" />
                <select wire:model="selectedType"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" disabled selected> -- Одбери Тип -- </option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}"
                            {{ $type->id == $selectedType ? 'selected' : '' }} >
                            {{ $type->type_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedType')" class="mt-2" />
            </div>

        </div>

        <div class="flex w-full mt-4 gap-4">
            <!-- VIN  -->
            <div class="w-1/3">
                <x-input-label for="vinNumber" :value="__('VIN код - Број на шасија')" />
                <x-text-input wire:model="vinNumber" id="vinNumber " class="block mt-1 w-full" type="text"
                    name="vinNumber" required autofocus autocomplete="vin_number" />
                <x-input-error :messages="$errors->get('vinNumber')" class="mt-2" />
            </div>

            <!-- Тип на Мотор  -->
            <div class="w-1/3">
                <x-input-label for="engineType" :value="__('Тип на мотор')" />
                <x-text-input wire:model="engineType" id="engineType" class="block mt-1 w-full" type="text"
                    name="engineType" required autofocus autocomplete="engine_type" />
                <x-input-error :messages="$errors->get('engineType')" class="mt-2" />
            </div>

            <!-- Број на Мотор  -->
            <div class="w-1/3">
                <x-input-label for="engineNumber" :value="__('Број на мотор')" />
                <x-text-input wire:model="engineNumber" id="engineNumber" class="block mt-1 w-full" type="text"
                    name="engineNumber" required autofocus autocomplete="engineNumber" />
                <x-input-error :messages="$errors->get('engineNumber')" class="mt-2" />
            </div>

        </div>

        @if ($selectedAppTypeName == 1)

            <!-- Confirmation - Potvrda  -->
            <div class="mt-4">
                <x-input-label for="selectedConfirmation" :value="__('Тип на Потврда')" />
                <select wire:model="selectedConfirmation"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" selected> -- Одбери Тип на Потврда -- </option>
                    @foreach ($confirmations as $confirmation)
                        <option value="{{ $confirmation->id }}"
                            {{ $confirmation->id == $selectedConfirmation ? 'selected' : '' }} >
                            {{ $confirmation->confirmation_name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedConfirmation')" class="mt-2" />
            </div>
        @endif

        <div class="flex w-full mt-4 gap-4">
            <!-- is_correction  Ima Prepravka  - Nema Prepravka-->
            @if ($selectedAppTypeName == 1)
                <div class="w-1/2">
                    <x-input-label for="selectedCorrection" :value="__('Преправка')" />

                    <select wire:model="selectedCorrection"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="" selected> -- Одбери Преправка -- </option>
                        @foreach ($corrections as $correction)
                            <option value="{{ $correction->id }}"
                                {{$correction->id == $selectedCorrection ? 'selected' : '' }}>
                                {{ $correction->correction_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('selectedCorrection')" class="mt-2" />
                </div>
            @endif

            <!-- Is change  -->
            <div class="{{ $selectedAppTypeName == 1 ? 'w-1/2' : 'w-full' }}">
                <x-input-label for="isChange" :value="__('Дали има Измена?')" />
                <x-text-input wire:model="isChange" id="isChange" class="block mt-1 w-full" type="text"
                    name="isChange" required autofocus autocomplete="isChange " />
                <x-input-error :messages="$errors->get('isChange')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-4 gap-4">
            <!-- Note  -->
            <div class="w-1/2">
                <x-input-label for="note" :value="__('Забелешка')" />
                <x-text-input wire:model="note" id="note" class="block mt-1 w-full" type="text"
                    name="note " autofocus autocomplete="note " />
                <x-input-error :messages="$errors->get('note')" class="mt-2" />
            </div>


            <!-- Agreed Price  -->
            <div class="w-1/2">
                <x-input-label for="agreedPrice" :value="__('Договорена Цена')" />
                <x-text-input wire:model="agreedPrice" id="agreedPrice" class="block mt-1 w-full" type="text"
                    name="agreedPrice" autofocus autocomplete="agreedPrice" />
                <x-input-error :messages="$errors->get('agreedPrice')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-4 gap-4">
            @if ($selectedAppTypeName == 4 || $selectedAppTypeName == 7 || $selectedAppTypeName == 8)
                <!-- Reg Number -->
                <div class="{{ $selectedAppType == 4 ? 'w-1/2' : 'w-full' }}">
                    <x-input-label for="regNumber" :value="__('Регистерски Број')" />
                    <x-text-input wire:model="regNumber" id="regNumber" class="block mt-1 w-full" type="text"
                        name="regNumber" autofocus autocomplete="regNumber" />
                    <x-input-error :messages="$errors->get('regNumber')" class="mt-2" />
                </div>
            @endif

            @if ($selectedAppTypeName == 4)
                <!-- ModificationType -->
                <div class="w-1/2">
                    <x-input-label for="selectedModificationType" :value="__('Вид на Преправка / Поправка')" />
                    <select wire:model="selectedModificationType"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="" selected> -- Одбери Вид на Преправка / Поправка -- </option>
                        @foreach ($modificationTypes as $modificationType)
                            <option value="{{ $modificationType->id }}"
                                {{$modificationType->id == selectedModificationType ? 'selected' : '' }}>
                                {{ $modificationType->modification_name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('selectedModificationType')" class="mt-2" />
                </div>
            @endif
        </div>


        @if ($selectedAppTypeName == 4)
            <div class="flex w-full mt-4 gap-4">
                <!-- mod_repair_note -->
                <div class="w-1/2">
                    <x-input-label for="modRepairNote" :value="__('Забелешка за преправка/поправка')" />
                    <x-text-input wire:model="modRepairNote" id="modRepairNote" class="block mt-1 w-full"
                        type="text" name="modRepairNote" autofocus autocomplete="modRepairNote" />
                    <x-input-error :messages="$errors->get('modRepairNote')" class="mt-2" />
                </div>


                <!-- Modified Or Repaired -->
                <div class="w-1/2">
                    <x-input-label for="selectedModOrRepaired" :value="__('Преправено или Поправено?')" />
                    <select wire:model="selectedModOrRepaired"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="" selected> -- Одбери дали е Преправено или Поправено -- </option>
                        @foreach ($modOrRepaired as $modOrRepair)
                            <option value="{{ $modOrRepair->id }}"
                                {{$modOrRepair->id == selectedModOrRepaired ? 'selected' : ''}}>
                                {{ $modOrRepair->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('selectedModOrRepaired')" class="mt-2" />
                </div>
            </div>
        @endif


        @if ($selectedAppTypeName == 7 || $selectedAppTypeName == 8)
            <div class="flex w-full mt-4 gap-4">
                <!-- Soobrakjajna -->
                <div class="w-1/3">
                    <x-input-label for="trafficPermitNr" :value="__('Број на сообраќајна')" />
                    <x-text-input wire:model="trafficPermitNr" id="trafficPermitNr" class="block mt-1 w-full"
                        type="text" name="trafficPermitNr" autofocus autocomplete="trafficPermitNr" />
                    <x-input-error :messages="$errors->get('trafficPermitNr')" class="mt-2" />
                </div>

                <!-- God na Proizvodstvo -->
                <div class="w-1/3">
                    <x-input-label for="productionYear" :value="__('Година на производство')" />
                    <x-text-input wire:model="productionYear" id="productionYear" class="block mt-1 w-full"
                        type="text" name="productionYear" autofocus autocomplete="productionYear" />
                    <x-input-error :messages="$errors->get('productionYear')" class="mt-2" />
                </div>


                <!-- Вид на возило -->
                <div class="w-1/3">
                    <x-input-label for="selectedVehicleTypeId" :value="__('Вид на возило')" />
                    <select wire:model="selectedVehicleTypeId"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="" selected> -- Одбери Вид на возило -- </option>
                        @foreach ($selectedVehicleTypes as $selectedVehicleType)
                            <option value="{{ $selectedVehicleType->id }}"
                                {{$selectedVehicleType->id == selectedVehicleTypeId ? 'selected' : ''}}>
                                {{ $selectedVehicleType->vehicle_type }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('selectedVehicleTypeId')" class="mt-2" />
                </div>
            </div>
        @endif

        @if ($selectedAppTypeName == 7 || $selectedAppTypeName == 8)
            <div class="flex w-full mt-4 gap-4">
                <!-- Број на одобрение -->
                <div class="w-1/3">
                    <x-input-label for="approvalNumber" :value="__('Број на одобрение')" />
                    <x-text-input wire:model="approvalNumber" id="approvalNumber" class="block mt-1 w-full"
                        type="text" name="approvalNumber" autofocus autocomplete="approvalNumber" />
                    <x-input-error :messages="$errors->get('approvalNumber')" class="mt-2" />
                </div>

                <!-- Датум на одобрение/потврда -->
                <div class="w-1/3">
                    <x-input-label for="approvalDate" :value="__('Датум на одобрение/потврда')" />
                    <input wire:model='approvalDate' type="date" name="approvalDate" id="approvalDate"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <x-input-error :messages="$errors->get('approvalDate')" class="mt-2" />
                </div>


                <!-- Потврда издадена од -->
                <div class="w-1/3">
                    <x-input-label for="certIssuedBy" :value="__('Потврда издадена од')" />
                    <x-text-input wire:model="certIssuedBy" id="certIssuedBy" class="block mt-1 w-full"
                        type="text" name="certIssuedBy" autofocus autocomplete="certIssuedBy " />
                    <x-input-error :messages="$errors->get('certIssuedBy')" class="mt-2" />
                </div>
            </div>
        @endif
        @endif
        {{-- <div class="container bg-amber-50 p-4 rounded-md mb-4">
            <!-- pictures -->
            <h2 class="text-xl text-center mb-4 bg-lime-300 py-4 rounded-md">Потребни (Задолжителни) Фотографии</h2>
            @if (count($appImages) === 0)
                <p>Откако ке го одберете типот на барање, ке може да ги прикачите бараните фотографии</p>
            @else
            <ul>
                @foreach ($appImages as $index => $appImage)
                    <div class="border border-lime-400 p-4 rounded-md mb-2">
                        <!-- Display the image -->
                        <div class="p-2 rounded border-2 border-sky-600 shadow" id="img-wrap">
                            <img src="{{ asset('storage/' . $appImage->image_path) }}" class="object-scale-down h-48 w-96"
                                alt="">
                                <span class="text-xs text-sky-800 font-semibold bg-slate-300 w-full p-1 block rounded my-1">{{$appImage->image_name}}</span>

                        </div>

                        <!-- File input for image update -->
                        <input type="file" wire:model="uploadedImages.{{ $index }}"
                            class="block w-full text-sm text-lime-500 ... other classes" />

                        @error('uploadedImages.' . $index)
                            <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                @endforeach
            </ul>
            @endif
        </div> --}}


        {{-- <div class="container bg-blue-100 p-4 rounded"> --}}
            {{-- Documents --}}
            {{-- <h2 class="text-xl text-center mb-4 bg-blue-300 py-4 rounded-md">Потребни (Задолжителни) Документи</h2> --}}
{{--
            @if (count($appDocs) === 0)
                <p>Откако ке го одберете типот на барање, ке може да ги прикачите бараните документи</p>
            @else
                <ul>
                    @foreach ($appDocs as $index => $appDoc)
                        <div class="border border-sky-400 p-4 rounded-md mb-2">
                            <label class="block" for="uploadedDocs.{{ $index }}">
                                <span class="mb-4 block  font-semibold">{{ $appDoc->document_desc }}</span>
                                <input type="file" wire:model="uploadedDocs.{{ $index }}"
                                    class="block w-full text-sm text-sky-700
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-sky-800 file:text-white
                                        hover:file:bg-sky-300 mt-2
                                        focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2
                                        ring ring-transparent ring-offset-4 rounded-full
                                        transition ease-in-out duration-150"
                                    id="uploadedDocs.{{ $appDoc->id }}"  />
                            </label>
                            @error('uploadedDocs.' . $index)
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    @endforeach
                </ul>
            @endif
        </div> --}}

        <div class="flex justify-between content-center">
            <a wire:navigate href="{{ route('applications.all') }}"
                class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Додај') }}
            </x-primary-button>
        </div>



    </form>
</div>