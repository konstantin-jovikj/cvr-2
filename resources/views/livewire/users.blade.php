<div class="w-full mx-auto">
    <div class="bg-sky-100 container flex  mx-auto my-6 p-6 justify-between">

        <div class="">
            <h2 class="text-xl uppercase font-bold text-sky-700">Корисници</h2>
        </div>
        <div>
            <a href="{{ route('register') }}"
                class="bg-sky-800 px-4 py-2 rounded-md text-white text-sm hover:bg-sky-400 hover:text-sky-900 transition-all">Регистрирај
                Нов Корисник</a>
        </div>
    </div>
    <div class="container flex justify-center mx-auto">

        <table class="w-full divide-y divide-gray-300 shadow ">
            <thead class="bg-sky-100">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Име
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Е-маил
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-800">
                        Улога
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

                        </form>
                        <td class="px-6 py-1 text-sm text-gray-500">
                            {{ $user->created_at }}
                        </td>
                        <td class="px-6 py-1">
                            <a wire:navigate href="{{ route('edituser', $user->id) }}"
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
