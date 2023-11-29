<div class="flex flex-col justify-center items-center mx-auto w-full sm:max-w-5xl h-auto  mt-6 mb-32">
    <div class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4 mb-2">

        <h2 class=" text-xl font-bold border-b-2 border-sky-600 pb-2">Детали од Барање со деловоден број:
            {{ $application->app_number }}</h2>

        <dl class="text-gray-900 divide-y divide-gray-200 grid grid-cols-1 md:grid-cols-2 divide-x">
            @if ($application->appType && $application->appType->app_type_name != null)
                <div class="flex flex-col p-2">
                    <dt class="mb-1 text-gray-500 text-xs ">Тип на Барање</dt>
                    <dd class="text-sm font-semibold">{{ $application->appType->app_type_name }}</dd>
                </div>
            @endif
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

        {{-- <button wire:click="generatePdf($application->id)" >PRINTAJ</button> --}}



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

    {{-- Images --}}
    <div class="container rounded-lg bg-white p-6 shadow-md">
        <div class="border-2 border-sky-600">

            <h2 class="mb-1 text-sky-700 text-xs bg-gray-300 p-4">Прикачени Фотографии:</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 p-4">
                @if ($images)
                    @foreach ($images as $image)
                        <div class="p-2 rounded border-2 border-sky-600 shadow" id="img-wrap">
                            <img src="{{ asset('storage/' . $image->image_path) }}" class="object-scale-down h-48 w-96"
                                alt="">
                            <span
                                class="text-xs text-sky-800 font-semibold bg-slate-300 w-full p-1 block rounded my-1">{{ $image->image_name }}</span>
                            <a class="bg-sky-600 w-full py-2 block rounded text-center text-white hover:bg-sky-700"
                                href="{{ asset('storage/' . $image->image_path) }}" download>Сними Фотографија</a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


    {{-- Documents --}}
    <div class="container rounded-lg bg-white p-6 shadow-md">
        <div class="border-2 border-sky-600">

            <h2 class="mb-1 text-sky-700 text-xs bg-gray-300 p-4">Прикачени Документи:</h2>

            <div class="p-4">
                @if ($documents)
                    <ul class="space-y-4 text-left text-gray-600">
                        @foreach ($documents as $document)
                            <div class="border-b-2 border-sky-700 p-4">

                                <li
                                    class="flex items-center space-x-3 rtl:space-x-reverse border-b-2 border-slate-300 pb-4">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span class="text-xs">{{ $document->document_desc }}</span>
                                </li>
                                <div class="p-2">

                                    <button
                                        wire:click="download('{{ $document->document_path }}', '{{ $document->document_desc }}')"
                                        class="bg-sky-600 px-4 py-2 block rounded text-center text-white hover:bg-sky-700">
                                        Сними Документ
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
