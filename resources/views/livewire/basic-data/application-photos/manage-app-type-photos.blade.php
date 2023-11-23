<div class="container  mx-auto w-full ">

    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Задолжителни фотографии за типови на Барања</h2>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        {{-- <div>
            <a href="{{ route('role.add') }}"
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додади Нова Улога</a>
        </div> --}}
    </div>

    <table class="w-full divide-y divide-gray-300 shadow">
        <thead class="bg-sky-100">
            <tr>
                <th scope="col" class="px-6 py-2 text-xs text-gray-800">
                    Типови на Барање
                </th>
                <th scope="col" class="px-6 py-2 text-xs text-gray-800">
                    Фотографии
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-300 text-left">
            @foreach ($applicationTypes as $applicationType)
            <tr class="whitespace-wrap my-2"> <!-- Move the border class inside the loop -->
                <td scope="row" class="px-6 py-1 text-sm text-gray-800 font-bold">
                    {{ $applicationType->app_type_name }}
                </td>
                <td class="px-6 py-1 text-sm text-gray-800 ">
                    <div class="grid grid-cols-3 gap-0 ">
                        @foreach ($pictures as $picture)
                        <div class="flex items-center ">
                            <input wire:click="toggleApplicationTypePhotos({{ $applicationType->id }}, {{ $picture->id }})"
                                {{ $applicationType->pictures->contains('id', $picture->id) ? 'checked' : '' }}
                                {{-- id="pictures_{{ $picture->id }}" --}}
                                type="checkbox"
                                id="img_{{ $applicationType->id }}_{{ $picture->id }}"
                                value="{{ $picture->id }}"
                                class="px-2 py-2 text-sm text-gray-800 w-4 h-4 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="img_{{ $applicationType->id }}_{{ $picture->id }}"
                                class="ml-2 text-sm font-medium text-gray-900">{{ $picture->picture_name }}</label>
                        </div>
                        @endforeach
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
