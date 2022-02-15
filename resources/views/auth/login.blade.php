<x-layout>
    <section class="flex-1 p-10">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel class="bg-gray-50 mt-40 mb-50 p-6">
                <h1 class="text-center font-bold text-xl">Requisição/Devolução de Equipamentos</h1>
                <form action="/login" method="POST" class="mt-10">
                    @csrf

                    <x-form.input name="mecanografico" type="number"/>
                    <x-form.input name="password" type="password" autocomplete="current-password"/>

                    <x-form.button>Entrar</x-button>

                    {{-- @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li class= "text-red-500 text-xs">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif --}}
                </form>
            </main>
        </x-panel>
    </section>
</x-layout>
