<div class="flex flex-col justify-center items-center mx-auto w-full sm:max-w-5xl h-auto  mt-6 mb-32">
    <div class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4 mb-2">

        <h2 class=" text-xl font-bold border-b-2 border-sky-600 pb-2">Детали од Барање со деловоден број:
            {{ $application->app_number }}</h2>

        <dl class="text-gray-900 divide-y divide-gray-200 grid grid-cols-1 md:grid-cols-2 divide-x">
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Тип на Барање</dt>
                <dd class="text-sm font-semibold">{{ $application->appType->app_type_name }}</dd>
            </div>

            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Име и презиме / Назив</dt>
                <dd class="text-sm font-semibold">{{ $application->customer->customer_name }}</dd>
            </div>
            <div class="flex flex-col p-2">
                <dt class="mb-1 text-gray-500 text-xs ">Датум на барање</dt>
                <dd class="text-sm font-semibold">{{ $application->app_date }}</dd>
            </div>

            @if ($application->category && $application->category->category_name != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Категорија</dt>
                    <dd class="text-sm font-semibold">{{ $application->category->category_name }}</dd>
                </div>
            @endif

            @if ($application->manufacturer && $application->manufacturer->name != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Производител</dt>
                    <dd class="text-sm font-semibold">{{ $application->manufacturer->name }}</dd>
                </div>
            @endif

            @if ($application->brand && $application->brand->brand_name != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Марка</dt>
                    <dd class="text-sm font-semibold">{{ $application->brand->brand_name }}</dd>
                </div>
            @endif

            @if ($application->type && $application->type->type_name != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Тип на возило</dt>
                    <dd class="text-sm font-semibold">{{ $application->type->type_name }}</dd>
                </div>
            @endif

            @if ($application->type && $application->type->commercial_mark != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Комерцијална ознака</dt>
                    <dd class="text-sm font-semibold">{{ $application->type->commercial_mark }}</dd>
                </div>
            @endif

            @if ($application->vin_number != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Број на шасија (VIN)</dt>
                    <dd class="text-sm font-semibold">{{ $application->vin_number }}</dd>
                </div>
            @endif

            @if ($application->engine_type != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Тип на мотор</dt>
                    <dd class="text-sm font-semibold">{{ $application->engine_type }}</dd>
                </div>
            @endif

            @if ($application->engine_number != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Број на мотор</dt>
                    <dd class="text-sm font-semibold">{{ $application->engine_number }}</dd>
                </div>
            @endif

            @if ($application->note != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Забелешка</dt>
                    <dd class="text-sm font-semibold">{{ $application->note }}</dd>
                </div>
            @endif

            @if ($application->reg_number != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Регистарски број</dt>
                    <dd class="text-sm font-semibold">{{ $application->reg_number }}</dd>
                </div>
            @endif

            @if ($application->mediator && $application->mediator->mediator_name != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs">Посредник</dt>
                    <dd class="text-sm font-semibold">{{ $application->mediator->mediator_name }}</dd>
                </div>
            @endif

            {{-- ADD MORE DETAILS --}}
        </dl>

        {{-- Images --}}

        <h2 class="text-sm font-semibold fonr-gray700 border-b-2 border-t-2 border-sky-600 p-2">Прикачени Фотографии:
        </h2>

        <dl class="text-gray-900 divide-y divide-gray-200 grid grid-cols-1 md:grid-cols-2 divide-x">

        </dl>

            <div class="h-[200px] bg-slate-300 p-2">
                {{-- @if ($images) --}}

                <img src="{{ asset('2/4/2023/11/25/6/13mWhnnryTaMKaOzICciJ3lqWNtvJDA8keA5NJ64.jpg') }}" class="w-full h-full" alt="">
                @foreach ($images as $image)

                    <img src="{{ asset($image->image_path) }}" class="w-full h-full" alt="">
                @endforeach
                {{-- @endif --}}
            </div>




        <div class="border-2 border-sky-600">

            <h3 class="mb-1 text-sky-700 text-xs bg-gray-300 p-4">Изработено од:</h3>
            <div class="m-4">

                <h2 class=" text-sm font-semibold "><span class="text-gray-500 text-sm">Инспeкциско тело:</span>
                    {{ $application->user->localDepartment->local_department_name }}</h2>

                <h2 class=" text-sm font-semibold "><span class="text-gray-500 text-sm">Име и Презиме на
                        Оператор:</span> {{ $application->user->name }}</h2>
            </div>
        </div>
    </div>

    {{-- SLIKI --}}

    <div class="h-[300px] w-full p-2 border-2 border-red-600 flex-flex-col">
        {{-- @if ($images) --}}

        {{-- <img src="{{ asset('2/4/2023/11/25/6/13mWhnnryTaMKaOzICciJ3lqWNtvJDA8keA5NJ64.jpg') }}" class="w-full h-full" alt=""> --}}
        @foreach ($images as $image)

            <img src="{{ asset($image->image_path) }}" class="w-full h-full" alt="">
        @endforeach
        {{-- @endif --}}
    </div>
</div>
