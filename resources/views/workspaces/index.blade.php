<x-layout>
    <div class="flex flex-1 flex-col mb-0">
        <x-title class="mb-4">
            {{ ucwords('Locais de Trabalho')}}
            <x-slot name="subtitle">
                Listagem de todos os Locais de Trabalho do Sistema <strong>DevExp</strong>
            </x-slot>
        </x-title>
        <div class="-my-2 overflow-x-auto">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="flex items-center my-4">
                    <x-table.search/>
                    <div class="ml-6 mr-2 w-full">
                        {{ $workspaces->links() }}
                    </div>
                </div>
                <div class="shadow border border-blue-200 sm:rounded-lg bg-blue-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th width="400px" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">@sortablelink('name','Local de Trabalho')</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">@sortablelink('institution_id','Instituição')</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Região</th>
                                <th scope="col" class="relative px-6 py-3 text-right text-xs font-medium text-gray-700 uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if ($workspaces->count() > 0)
                                @foreach ($workspaces as $workspace )
                                    @if($workspace->institution->type->id == 1)
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-6 py-3 whitespace-nowrap">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ ucwords( $workspace->name ) }}
                                                    </div>
                                                    <div class="text-xs text-gray-400">
                                                        @if($workspace->unit != null)
                                                            {{ $workspace->unit->name }}
                                                        @else
                                                            {{ ucwords( $workspace->name ) }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $workspace->institution->type->initials }}
                                                    </div>
                                                    <div class="text-xs text-gray-400">{{ $workspace->institution->county->name }}</div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3 whitespace-nowrap">
                                                {{ $workspace->institution->county->zone}}
                                            </td>
                                            <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
                                        </tr>
                                    @elseif($workspace->institution->type->id == 2)
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-6 py-3">
                                                <div class="ml-4">
                                                    @if( strtolower($workspace->unit->initials) == "gc" )
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ ucwords($workspace->name) }}
                                                        </div>
                                                    @else
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ ucwords( $workspace->unit->initials . " - " .$workspace->name  ) }}
                                                        </div>
                                                        <div class="text-xs text-gray-400">{{ $workspace->unit->name }}</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $workspace->institution->type->name }}
                                                    </div>
                                                    <div class="text-xs text-gray-400">{{ $workspace->institution->county->name }}</div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                                {{-- <div class="text-sm font-medium text-gray-900"> --}}
                                                    {{ $workspace->institution->county->zone}}
                                                {{-- </div> --}}
                                            </td>
                                            <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>
