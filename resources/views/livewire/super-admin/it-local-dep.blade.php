<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Инспекциски тела</h2>
            <span class="text-sm font-light text-sky-800">Инспекциски тела во Р.С.Македонија</span>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>
        <div>
            <a href="{{route('add.it')}}"
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додади Ново Инспекциско Тело</a>
        </div>

    {{-- </div> --}}
    {{-- Filter po Sektor --}}
    {{-- <div class="container flex justify-space mx-auto bg-sky-100 my-4 items-center">
        <div class="my-4 mx-4">
            <x-input-label for="filterDepartment" :value="__('Филтрирај по Сектор')" />
            <select wire:model.live="filterDepartment"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="" selected> -- Одбери Сектор -- </option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('selectedDepartment')" class="mt-2" />
        </div> --}}

        {{-- Filter po Oddel --}}
    {{-- @if(!is_null($filterDepartment))
        <div class="my-4 mx-4">
            <x-input-label for="filterLocalDepartment" :value="__('Филтрирај по Оддел')" />
            <select wire:model.live="filterLocalDepartment"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="" selected> -- Одбери Сектор -- </option>
                @foreach ($localDepartments as $localDepartment)
                    <option value="{{ $localDepartment->id }}">{{ $localDepartment->local_department_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('selectedDepartment')" class="mt-2" />
        </div>
    @endif --}}

    {{-- @if(!is_null($filterDepartment))
    <div class="my-4 mx-4">
        <button wire:click='resetFilter()' class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Ресетирај филтер</б>
    </div>
    @endif --}}
    </div>




    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow table-fixed whitespace-wrap">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Серт. за Акредирација Бр
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Акредитирано Тело
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Адреса
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Прва акредитација
                    </th>

                    <th class="px-6 py-2 text-xs text-gray-800">
                        Дата на важност на сертификато
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Едитирање и Бришење
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300 text-center">
                @foreach ($localDepartments as $localDepartment)
                    <tr class="whitespace-wrap">
                        <td class="px-6 py-1 text-sm text-gray-900 font-bold">
                            {{ $localDepartment->cert_no }}
                        </td>
                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900">
                                {{ $localDepartment->local_department_name }}
                            </div>
                        </td>

                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900">
                                {{ $localDepartment->department_address }}
                                {{ $localDepartment->city->zip}}
                                {{$localDepartment->city->city_name}}
                                {{$localDepartment->city->country->country_name}}
                            </div>
                        </td>


                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900">
                                {{ $localDepartment->start_date }}
                            </div>
                        </td>

                        </form>
                        @if (now() > \Carbon\Carbon::parse($localDepartment->end_date))
                        <td class="px-6 py-1 text-sm text-red-700 font-bold">
                            {{ \Carbon\Carbon::parse($localDepartment->end_date)->format('d.m.Y') }}
                        </td>
                            @else
                            <td class="px-6 py-1 text-sm text-emerald-700 font-bold">
                                {{ \Carbon\Carbon::parse($localDepartment->end_date)->format('d.m.Y') }}
                            </td>
                            @endif
                        <td class="px-6 py-1">
                            <a wire:navigate href="{{ route('edit.it', $localDepartment->id) }}"
                                class="px-4 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <button wire:click="deleteIt({{$localDepartment->id}})"
                                wire:confirm="Дали сте сигурен дека сакате да го избришете ова Инспекциско тело?"
                                class="px-4 py-1 text-xs text-white bg-red-600 hover-bg-red-800 rounded-full">Избриши</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $users->links() }} --}}

    </div>
</div>

