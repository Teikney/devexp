<section class="sidebar bg-blue-200 text-gray-700 w-64 shadow-2xl px-1 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out border-r-2 border-style-outer border-blue-50">
    <a href="#" class="flex items-center space-x-2 mt-4 mb-8">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        <span class="text-2xl font-extrabold">
            Device Explorer
        </span>
    </a>

    <nav>
        <x-navbar.button href="/">Página Inicial</x-navbar.button>
        <x-navbar.button href="/users">Utilizadores</x-navbar.button>
        <x-navbar.button href="/devices">Equipamentos</x-navbar.button>
        <x-navbar.button href="#">Something Else</x-navbar.button>
        @auth
            <x-navbar.button href="" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Sair</x-navbar.button>
            <form action="/logout" method="post" class="hidden" id="logout-form">
                @csrf
            </form>
        @endauth
        {{-- <x-dropdown-item x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item> --}}
    </nav>
</section>
