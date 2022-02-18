<x-layout>
    <x-panel class="flex flex-1 flex-col">
        <x-title>
            {{ ucwords('Página Inicial')}}
        </x-title>
        <div class="-my-2 overflow-x-auto">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow border-b border-gray-200 sm:rounded-lg bg-blue-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Nome</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Municipio</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Zona</th>
                                <th scope="col" class="relative px-6 py-3 text-right text-xs font-medium text-gray-700 uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($institutions as $institution )
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <a href="#" class="flex items-center mr-0">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/60?u={{ $institution->id}}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $institution->type->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $institution->county->initials }}</div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $institution->county->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $institution->county->zone}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 mx-2">
                    {{ $institutions->links() }}
                </div>
            </div>
        </div>
    </x-panel>

</x-layout>
