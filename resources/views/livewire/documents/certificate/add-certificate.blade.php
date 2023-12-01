<div class="flex flex-col justify-center items-center mx-auto w-full sm:max-w-5xl h-auto  mt-6 mb-32">
    {{-- Customer Details --}}
    <div class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4 mb-2">

        <h2 class=" text-xl font-bold border-b-2 border-sky-600 pb-2">{{ $customer->customer_name }}</h2>

        <dl class=" text-gray-900 divide-y divide-gray-200 grid grid-cols-2 divide-x ">
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">ЕМБГ</dt>
                <dd class="text-sm font-semibold">{{ $customer->embg }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">ЕМБС</dt>
                <dd class="text-sm font-semibold">{{ $customer->embs }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Адреса</dt>
                <dd class="text-sm font-semibold">{{ $customer->address }} /
                    {{ $customer->city->zip }}-{{ $customer->city->city_name }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Телефон</dt>
                <dd class="text-sm font-semibold">{{ $customer->phone }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Попуст</dt>
                <dd class="text-sm font-semibold">{{ $customer->discount }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Забелешка</dt>
                <dd class="text-sm font-semibold">{{ $customer->note }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Производител</dt>
                <dd class="text-sm font-semibold">{{ $application->manufacturer->name }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Марка</dt>
                <dd class="text-sm font-semibold">{{ $application->brand->brand_name }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Тип</dt>
                <dd class="text-sm font-semibold">{{ $application->type->type_name }}</dd>
            </div>

        </dl>
    </div>


    {{-- Vehicle Info --}}

    <div class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4 mb-2">

        <h2 class=" text-xl font-bold border-b-2 border-sky-600 pb-2">Возило</h2>

        <dl class=" text-gray-900 divide-y divide-gray-200 grid grid-cols-3 divide-x">
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Производител</dt>
                <dd class="text-sm font-semibold">{{ $application->manufacturer->name }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Марка</dt>
                <dd class="text-sm font-semibold">{{ $application->brand->brand_name }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Тип</dt>
                <dd class="text-sm font-semibold">{{ $application->type->type_name }}</dd>
            </div>

        </dl>
    </div>
    <form wire:submit="addCertificate" class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4">
        <h2 class=" text-xl font-bold border-b-2 border-sky-600 pb-2">Потврда за Сообразност</h2>

        <div class="flex w-full mt-4 gap-4">
            <div class="w-1/3">
                <x-input-label for="certDate" :value="__('Датум')" />
                <input wire:model='certDate' type="date" name="certDate" id="certDate" value="{{ $certDate }}"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <x-input-error :messages="$errors->get('certDate')" class="mt-2" />
            </div>

            <div class="w-1/3">
                <x-input-label for="variant" :value="__('Варијанта')" />
                <x-text-input wire:model="variant" id="variant " class="block mt-1 w-full" type="text"
                    name="variant" required autofocus autocomplete="variant" />
                <x-input-error :messages="$errors->get('variant')" class="mt-2" />
            </div>

            <div class="w-1/3">
                <x-input-label for="edition" :value="__('Изведба')" />
                <x-text-input wire:model="edition" id="edition " class="block mt-1 w-full" type="text"
                    name="variant" required autofocus autocomplete="edition" />
                <x-input-error :messages="$errors->get('edition')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-12 gap-4">
            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="selectedProductionYear" :value="__('Година на производство')" />
                <select wire:model="selectedProductionYear"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" disabled selected> -- Одбери Година -- </option>
                    @for ($year = 1980; $year <= 2050; $year++)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
                <x-input-error :messages="$errors->get('selectedProductionYear')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="constTotalMass" :value="__('Најголема конструктивна вкупна маса на возилото (kg)')" />
                <x-text-input wire:model="constTotalMass" id="constTotalMass " class="block mt-1 w-full" type="number"
                    name="constTotalMass" required autofocus autocomplete="constTotalMass" />
                <x-input-error :messages="$errors->get('constTotalMass')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="legalTotalMass" :value="__('Најголема легална вкупна маса на возилото при регистрација (kg)')" />
                <x-text-input wire:model="legalTotalMass" id="legalTotalMass " class="block mt-1 w-full" type="number"
                    name="legalTotalMass" required autofocus autocomplete="legalTotalMass" />
                <x-input-error :messages="$errors->get('legalTotalMass')" class="mt-2" />
            </div>
        </div>


        <div class="flex w-full mt-12 gap-4">

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="legalTotalGroupMass" :value="__('Најголема легална вкупна маса на група возила при регистрација (kg)')" />
                <x-text-input wire:model="legalTotalGroupMass" id="legalTotalGroupMass " class="block mt-1 w-full"
                    type="number" name="legalTotalGroupMass" required autofocus
                    autocomplete="legalTotalGroupMass" />
                <x-input-error :messages="$errors->get('legalTotalGroupMass')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="vehicleMass" :value="__('Маса на возилото (kg)')" />
                <x-text-input wire:model="vehicleMass" id="vehicleMass " class="block mt-1 w-full" type="number"
                    name="vehicleMass" required autofocus autocomplete="vehicleMass" />
                <x-input-error :messages="$errors->get('vehicleMass')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="vehicleType" :value="__('Вид на возилото')" />
                <x-text-input wire:model="vehicleType" id="vehicleType " class="block mt-1 w-full" type="text"
                    name="vehicleType" required autofocus autocomplete="vehicleType" />
                <x-input-error :messages="$errors->get('vehicleType')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-12 gap-4">

            <div class="w-1/3 flex-col justify-between">
                <x-input-label for="selectedChassis" :value="__('Облик и намена на каросеријата')" />
                <select wire:model="selectedChassis"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" disabled selected> -- Одбери каросеријата -- </option>
                    @foreach ($chassis as $singleChassis)
                        <option value="{{ $singleChassis->id }}">{{ $singleChassis->body_shape }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedChassis')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="applicationMarkMKD" :value="__('Ознака на одобрение во РМ')" />
                <x-text-input wire:model="applicationMarkMKD" id="applicationMarkMKD " class="block mt-1 w-full"
                    type="text" name="applicationMarkMKD" autofocus autocomplete="applicationMarkMKD" />
                <x-input-error :messages="$errors->get('applicationMarkMKD')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="applicationMarkEU" :value="__('Ознака на одобрение во ЕУ')" />
                <x-text-input wire:model="applicationMarkEU" id="applicationMarkEU " class="block mt-1 w-full"
                    type="text" name="applicationMarkEU" required autofocus autocomplete="applicationMarkEU" />
                <x-input-error :messages="$errors->get('applicationMarkEU')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-12 gap-4">

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="CocNumber" :value="__('Број на ЕУ потврдата за сообразност (СОС)')" />
                <x-text-input wire:model="CocNumber" id="CocNumber " class="block mt-1 w-full" type="text"
                    name="CocNumber" autofocus autocomplete="CocNumber" />
                <x-input-error :messages="$errors->get('CocNumber')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="numberOfAxles" :value="__('Број на оски')" />
                <x-text-input wire:model="numberOfAxles" id="numberOfAxles " class="block mt-1 w-full"
                    type="number" name="numberOfAxles" autofocus autocomplete="numberOfAxles" />
                <x-input-error :messages="$errors->get('numberOfAxles')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="allowedPneumatics" :value="__('Дозволени пневматици и наплатки')" />
                <x-text-input wire:model="allowedPneumatics" id="allowedPneumatics " class="block mt-1 w-full"
                    type="text" name="allowedPneumatics" required autofocus autocomplete="allowedPneumatics" />
                <x-input-error :messages="$errors->get('allowedPneumatics')" class="mt-2" />
            </div>
        </div>

        <div class="flex w-full mt-12 gap-4">

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="length" :value="__('Должина на возилото (mm)')" />
                <x-text-input wire:model="length" id="length " class="block mt-1 w-full" type="number"
                    name="length" autofocus autocomplete="length" />
                <x-input-error :messages="$errors->get('length')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="width" :value="__('Ширина на возилото (mm)')" />
                <x-text-input wire:model="width" id="width " class="block mt-1 w-full" type="number"
                    name="width" autofocus autocomplete="width" />
                <x-input-error :messages="$errors->get('width')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="height" :value="__('Висина на возилото (mm)')" />
                <x-text-input wire:model="height" id="height " class="block mt-1 w-full" type="number"
                    name="height" required autofocus autocomplete="height" />
                <x-input-error :messages="$errors->get('height')" class="mt-2" />
            </div>
        </div>


        <div class="flex w-full mt-12 gap-4">

            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="axelMassDistibution_1" :value="__('Распределба и најголема конструктивна вкупна маса по оски (kg) 1.')" />
                <x-text-input wire:model="axelMassDistibution_1" id="axelMassDistibution_1 "
                    class="block mt-1 w-full" type="number" name="axelMassDistibution_1" autofocus
                    autocomplete="axelMassDistibution_1" />
                <x-input-error :messages="$errors->get('axelMassDistibution_1')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="axelMassDistibution_2" :value="__('Распределба и најголема конструктивна вкупна маса по оски (kg) 2.')" />
                <x-text-input wire:model="axelMassDistibution_2" id="axelMassDistibution_2 "
                    class="block mt-1 w-full" type="number" name="axelMassDistibution_2" autofocus
                    autocomplete="axelMassDistibution_2" />
                <x-input-error :messages="$errors->get('axelMassDistibution_2')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="axelMassDistibution_3" :value="__('Распределба и најголема конструктивна вкупна маса по оски (kg) 3.')" />
                <x-text-input wire:model="axelMassDistibution_3" id="axelMassDistibution_3 "
                    class="block mt-1 w-full" type="number" name="axelMassDistibution_3" autofocus
                    autocomplete="axelMassDistibution_3" />
                <x-input-error :messages="$errors->get('axelMassDistibution_3')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="axelMassDistibution_4" :value="__('Распределба и најголема конструктивна вкупна маса по оски (kg) 4.')" />
                <x-text-input wire:model="axelMassDistibution_4" id="axelMassDistibution_4 "
                    class="block mt-1 w-full" type="number" name="axelMassDistibution_4" autofocus
                    autocomplete="axelMassDistibution_4" />
                <x-input-error :messages="$errors->get('axelMassDistibution_4')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="axelMassDistibution_5" :value="__('Распределба и најголема конструктивна вкупна маса по оски (kg) 5.')" />
                <x-text-input wire:model="axelMassDistibution_5" id="axelMassDistibution_5 "
                    class="block mt-1 w-full" type="number" name="axelMassDistibution_5" autofocus
                    autocomplete="axelMassDistibution_5" />
                <x-input-error :messages="$errors->get('axelMassDistibution_5')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="connectionPointlMassDistibution" :value="__('Распределба на најголема конст. вк. маса на приклучната точка')" />
                <x-text-input wire:model="connectionPointlMassDistibution" id="connectionPointlMassDistibution "
                    class="block mt-1 w-full" type="number" name="connectionPointlMassDistibution" autofocus
                    autocomplete="connectionPointlMassDistibution" />
                <x-input-error :messages="$errors->get('connectionPointlMassDistibution')" class="mt-2" />
            </div>

        </div>



        <div class="flex w-full mt-12 gap-4">
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="maxStructuralAxleLoad_1" :value="__('Најголемо конструктивно осно оптоварување (kg) 1')" />
                <x-text-input wire:model="maxStructuralAxleLoad_1" id="maxStructuralAxleLoad_1 "
                    class="block mt-1 w-full" type="number" name="maxStructuralAxleLoad_1" autofocus
                    autocomplete="maxStructuralAxleLoad_1" />
                <x-input-error :messages="$errors->get('maxStructuralAxleLoad_1')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="maxStructuralAxleLoad_2" :value="__('Најголемо конструктивно осно оптоварување (kg) 2')" />
                <x-text-input wire:model="maxStructuralAxleLoad_2" id="maxStructuralAxleLoad_2 "
                    class="block mt-1 w-full" type="number" name="maxStructuralAxleLoad_2" autofocus
                    autocomplete="maxStructuralAxleLoad_2" />
                <x-input-error :messages="$errors->get('maxStructuralAxleLoad_2')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="maxStructuralAxleLoad_3" :value="__('Најголемо конструктивно осно оптоварување (kg) 3')" />
                <x-text-input wire:model="maxStructuralAxleLoad_3" id="maxStructuralAxleLoad_3 "
                    class="block mt-1 w-full" type="number" name="maxStructuralAxleLoad_3" autofocus
                    autocomplete="maxStructuralAxleLoad_3" />
                <x-input-error :messages="$errors->get('maxStructuralAxleLoad_3')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="maxStructuralAxleLoad_4" :value="__('Најголемо конструктивно осно оптоварување (kg) 4')" />
                <x-text-input wire:model="maxStructuralAxleLoad_3" id="maxStructuralAxleLoad_3 "
                    class="block mt-1 w-full" type="number" name="maxStructuralAxleLoad_3" autofocus
                    autocomplete="maxStructuralAxleLoad_3" />
                <x-input-error :messages="$errors->get('maxStructuralAxleLoad_3')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="maxStructuralAxleLoad_5" :value="__('Најголемо конструктивно осно оптоварување (kg) 5')" />
                <x-text-input wire:model="maxStructuralAxleLoad_5" id="maxStructuralAxleLoad_5 "
                    class="block mt-1 w-full" type="number" name="maxStructuralAxleLoad_5" autofocus
                    autocomplete="maxStructuralAxleLoad_5" />
                <x-input-error :messages="$errors->get('maxStructuralAxleLoad_5')" class="mt-2" />
            </div>
            <div class="w-1/6 flex flex-col justify-between">
                <x-input-label for="maxConnectionPointLoad" :value="__('Најголемо конст. осно оптов. на приклучната точка')" />
                <x-text-input wire:model="maxConnectionPointLoad" id="connectionPointlMassDistibution "
                    class="block mt-1 w-full" type="number" name="maxConnectionPointLoad" autofocus
                    autocomplete="maxConnectionPointLoad" />
                <x-input-error :messages="$errors->get('maxConnectionPointLoad')" class="mt-2" />
            </div>

        </div>



        <div class="flex w-full mt-12 gap-4">

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="brakedTrailerMaxMass" :value="__('Најголема конструктивна вкупна маса на кочена приколка ( kg )')" />
                <x-text-input wire:model="brakedTrailerMaxMass" id="brakedTrailerMaxMass " class="block mt-1 w-full" type="number"
                    name="brakedTrailerMaxMass" autofocus autocomplete="brakedTrailerMaxMass" />
                <x-input-error :messages="$errors->get('brakedTrailerMaxMass')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="unbrakedTrailerMaxMass" :value="__('Најголема конструктивна вкупна маса на некочена приколка ( kg )')" />
                <x-text-input wire:model="unbrakedTrailerMaxMass" id="unbrakedTrailerMaxMass " class="block mt-1 w-full" type="number"
                    name="unbrakedTrailerMaxMass" autofocus autocomplete="unbrakedTrailerMaxMass" />
                <x-input-error :messages="$errors->get('unbrakedTrailerMaxMass')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="trailerConnectionPointMaxLoad" :value="__('Најголемо конструктивно оптоварување во приклучокот за приколка ( kg )')" />
                <x-text-input wire:model="trailerConnectionPointMaxLoad" id="trailerConnectionPointMaxLoad " class="block mt-1 w-full" type="number"
                    name="trailerConnectionPointMaxLoad" required autofocus autocomplete="trailerConnectionPointMaxLoad" />
                <x-input-error :messages="$errors->get('trailerConnectionPointMaxLoad')" class="mt-2" />
            </div>
        </div>





        <div class="flex w-full mt-12 gap-4">

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="pluginDeviceApprovalMark" :value="__('Ознака за одобрување на приклучниот уред')" />
                <x-text-input wire:model="brakedTrailerMaxMass" id="brakedTrailerMaxMass " class="block mt-1 w-full" type="text"
                    name="brakedTrailerMaxMass" autofocus autocomplete="brakedTrailerMaxMass" />
                <x-input-error :messages="$errors->get('brakedTrailerMaxMass')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="engineVolume" :value="__('Зафатнина на моторот ( cm3 )')" />
                <x-text-input wire:model="engineVolume" id="engineVolume " class="block mt-1 w-full" type="number"
                    name="engineVolume" autofocus autocomplete="engineVolume" />
                <x-input-error :messages="$errors->get('engineVolume')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="enginePower" :value="__('Силина на моторот ( kW )')" />
                <x-text-input wire:model="enginePower" id="enginePower " class="block mt-1 w-full" type="number"
                    name="enginePower" required autofocus autocomplete="enginePower" />
                <x-input-error :messages="$errors->get('enginePower')" class="mt-2" />
            </div>
        </div>


        <div class="flex w-full mt-12 gap-4">

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="selectedFuel" :value="__('Вид на гориво')" />
                <select wire:model="selectedFuel"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="" disabled selected> -- Одбери Гориво -- </option>
                    @foreach ($fuels as $fuel)
                        <option value="{{ $fuel->id }}">{{ $fuel->fuel_type}}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('selectedFuel')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="engineRevolutions" :value="__('Број на вртежи ( min-1 ')" />
                <x-text-input wire:model="engineRevolutions" id="engineRevolutions " class="block mt-1 w-full" type="number"
                    name="engineRevolutions" autofocus autocomplete="engineRevolutions" />
                <x-input-error :messages="$errors->get('engineRevolutions')" class="mt-2" />
            </div>

            <div class="w-1/3 flex flex-col justify-between">
                <x-input-label for="powerMassDistribution" :value="__('Однос силина/маса (само за моторцикли) ( kW/kg )')" />
                <x-text-input wire:model="powerMassDistribution" id="powerMassDistribution " class="block mt-1 w-full" type="number"
                    name="powerMassDistribution" required autofocus autocomplete="powerMassDistribution" />
                <x-input-error :messages="$errors->get('powerMassDistribution')" class="mt-2" />
            </div>
        </div>




        <div class="flex justify-between content-center">
            <a wire:navigate href="{{ route('fuel.all') }}"
                class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-12">
                {{ __('Назад') }}
            </a>
            <x-primary-button class="mt-12 ">
                {{ __('Додај') }}
            </x-primary-button>
        </div>

    </form>
</div>
