<div class="container  mx-auto w-full ">

    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Улоги</h2>
        </div>
        <div>
            <a href="{{ route('role.add') }}"
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Додади Нова Улога</a>
        </div>
    </div>

    <table class="w-full divide-y divide-gray-300 shadow">
        <thead class="bg-sky-100">
            <tr>
                <th scope="col" class="px-6 py-2 text-xs text-gray-800">
                    Улоги
                </th>
                <th scope="col" class="px-6 py-2 text-xs text-gray-800">
                    Пермисии ( Дозволи ) Овластувања
                </th>
                <th scope="col" class="px-6 py-2 text-xs text-gray-800">
                    Акции
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-300 text-center">
            @foreach ($roles as $role)
                <form wire:submit.prevent="savePermissions({{ $role->id }})">
                    <tr class="whitespace-nowrap my-4">
                        <th scope="row" class="px-6 py-1 text-sm text-gray-800">
                            {{ $role->role_name }}
                        </th>
                        <td class="px-6 py-1 text-sm text-gray-800">
                            @foreach ($permissions as $permision)
                                <div class="flex items-center">
                                    <input wire:click="togglePermission({{ $role->id }}, {{ $permision->id }})"
                                            {{ $role->permisions->contains('id', $permision->id) ? 'checked' : '' }}
                                            id="permisions_{{ $permision->id }}"
                                            type="checkbox"
                                            value="{{ $permision->id }}"
                                            class="px-2 py-2 text-sm text-gray-800 w-4 h-4 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                                    <label for="permissions_{{ $permision->id }}"
                                        class="ml-2 text-sm font-medium text-gray-900 ">{{ $permision->permision_name }}</label>
                                </div>
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            <button type="submit"
                                class="px-3 py-2 mx-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Зачувај</button>

                        </td>
                    </tr>
                </form>
            @endforeach

        </tbody>
    </table>
</div>
