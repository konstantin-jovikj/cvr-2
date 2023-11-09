<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Администратори</h2>
            <span class="text-sm font-light text-sky-800">Супер-Администраторот може да ги менаџира само администраторите во сите сектори и локални оддели.</span>
        </div>
        <div>
            <livewire:alerts.alert-message />
        </div>

    </div>
    {{-- Filter po Sektor --}}
    <div class="container flex justify-space mx-auto bg-sky-100 my-4 items-center">
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
        </div>

        {{-- Filter po Oddel --}}
    @if(!is_null($filterDepartment))
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
    @endif

    @if(!is_null($filterDepartment))
    <div class="my-4 mx-4">
        <button wire:click='resetFilter()' class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Ресетирај филтер</б>
    </div>
    @endif
    </div>




    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow ">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Име и Презиме
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Е-маил
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Улога
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Сектор и Оддел
                    </th>

                    <th class="px-6 py-2 text-xs text-gray-800">
                        Додаден на
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Едитирање и Бришење
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300 text-center">
                @foreach ($users as $user)
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-1 text-sm text-gray-800">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-1">
                            <div class="text-sm text-gray-900">
                                {{ $user->email }}
                            </div>
                        </td>

                        <td class="px-6 py-1">
                            <span class="text-sm text-green-700 font-bold">
                                {{ $user->role->role_name }}
                            </span>
                        </td>

                        <td class="px-6 py-1 text-left">
                            <span class="text-sm text-blue-700 font-bold ">
                                {{ $user->department->department_name }}
                            </span>
                            <span class="text-sm text-gray-700 font-bold"> - </span>
                            <span
                                class="text-sm text-red-700 font-bold ">{{ $user->localDepartment->local_department_name }}</span>
                        </td>

                        </form>
                        <td class="px-6 py-1 text-sm text-gray-500">
                            {{ $user->created_at }}
                        </td>
                        <td class="px-6 py-1">
                            <a wire:navigate href="{{ route('edit.admin', $user->id) }}"
                                class="px-4 py-1 text-xs text-white bg-emerald-600 hover:bg-emerald-800 rounded-full">Измени</a>

                            <a href="#"
                                class="px-4 py-1 text-xs text-white bg-red-600 hover-bg-red-800 rounded-full">Избриши</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
