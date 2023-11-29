<div class="flex flex-col justify-center items-center mx-auto w-full sm:max-w-5xl h-auto  mt-6 mb-32">
    <div class="bg-white w-full shadow-md overflow-hidden sm:rounded-lg px-6 py-4 mb-2">

        <h2 class=" text-xl font-bold border-b-2 border-sky-600 pb-2">Приложени Фотографии за Барање со деловоден број:
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
        </dl>




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
                            <img src="{{ asset('storage/' . $image->image_path) }}" class="object-scale-down h-48 w-96" alt="">
                            <span class="text-xs text-sky-800 font-semibold bg-slate-300 w-full p-1 block rounded my-1">{{$image->image_name}}</span>
                            {{-- <form action="" enctype="multipart/form-data"> --}}
                                <input wire:model="newUploadedImages" type="file" />
                                {{-- @if ($newUploadedImages[$image->id ])
                                <img src="{{ $newUploadedImages->temporaryUrl() }}" class="object-scale-down h-48 w-96" alt="">
                                @endif --}}
                                <button wire:click="changeImage({{ $image->id }})" class="bg-sky-600 px-4 py-2 block rounded text-center text-white hover:bg-sky-700">Change</button>
                            {{-- </form> --}}
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</div>
