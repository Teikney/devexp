<x-layout>
    <div class="flex flex-1 flex-col mb-0">
        <x-title class="mb-4">
            Equipamentos
            <x-slot name="subtitle">
                Lista de todos os Equipamentos no Sistema <strong>DevExp</strong>
            </x-slot>
        </x-title>
        <div class="-my-2 overflow-x-auto">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow border-b border-gray-200 sm:rounded-lg bg-blue-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Nome</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Role</th>
                                <th scope="col" class="relative px-6 py-3 text-right text-xs font-medium text-gray-700 uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($devices as $device )
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <a href="/devices/{{ $device->mecanografico }}" class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/60?u={{ $device->id}}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $device->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $device->mecanografico }}</div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($device->available)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Disponível </span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> Ocupado </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 mx-2">
                    {{ $devices->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layout>

