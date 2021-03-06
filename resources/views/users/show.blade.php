<x-layout>
    <div class="flex flex-1 flex-col shadow">
        <x-title class="mb-10">
            <x-slot name="subtitle">Detalhes do Utilizador</x-slot>
            {{ $user->name }}
        </x-title>

        <div class="bg-white shadow-xl overflow-hidden sm:rounded-lg mx-auto max-w-2xl">
            <dl>
                <div class="bg-blue-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-blue-500">Nome Completo</dt>
                    <dd class="mt-1 text-sm text-blue-900 sm:mt-0 sm:col-span-2">{{ $user->name }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-blue-500">Número Mecanografico</dt>
                    <dd class="mt-1 text-sm text-blue-900 sm:mt-0 sm:col-span-2">{{ $user->mecanografico }}</dd>
                </div>
                <div class="bg-blue-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-blue-500">Endereço de Email</dt>
                    <dd class="mt-1 text-sm text-blue-900 sm:mt-0 sm:col-span-2">{{ $user->email }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-blue-500">Categoria</dt>
                    <dd class="mt-1 text-sm text-blue-900 sm:mt-0 sm:col-span-2">Especialist/Technical <strong>[HARD CODED]</strong></dd>
                </div>
                <div class="bg-blue-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-blue-500">Local de Trabalho Principal</dt>
                    <dd class="mt-1 text-sm text-blue-900 sm:mt-0 sm:col-span-2">{{ $user->workspace->unit->name }}<br>{{ $user->workspace->name }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-blue-500">About</dt>
                    <dd class="mt-1 text-sm text-blue-900 sm:mt-0 sm:col-span-2">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                </div>
                <div class="bg-blue-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-blue-500">Attachments</dt>
                    <dd class="mt-1 text-sm text-blue-900 sm:mt-0 sm:col-span-2">
                        <ul role="list" class="border border-blue-200 rounded-md divide-y divide-blue-200 bg-white">
                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                <div class="w-0 flex-1 flex items-center">
                                <!-- Heroicon name: solid/paper-clip -->
                                    <svg class="flex-shrink-0 h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 flex-1 w-0 truncate"> resume_back_end_developer.pdf </span>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 hover:font-bold"> Download </a>
                                </div>
                            </li>
                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                <div class="w-0 flex-1 flex items-center">
                                    <!-- Heroicon name: solid/paper-clip -->
                                    <svg class="flex-shrink-0 h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 flex-1 w-0 truncate"> coverletter_back_end_developer.pdf </span>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 hover:font-bold"> Download </a>
                                </div>
                            </li>
                        </ul>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</x-layout>
