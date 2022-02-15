<!doctype html>

<title>Explorador de Equipamentos</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }
    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .clamp.one-line {
        -webkit-line-clamp: 1;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<body style="font-family: Open Sans, sans-serif" class="relative min-h-screen md:flex">
    @auth
        <div class="bg-blue-200 text-gray-700 flex justify-between md:hidden">
            <a href="" class="block p-4 text-white font-bold">Device Explorer</a>
            <button class="mobile-menu-button p-4 focus:outline-none hover:bg-blue-400 hover:rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <x-navbar.sidebar/>
        {{ $slot }}
    @else
        {{ $slot }}
    @endauth
    <x-flash/>
</body>

<script>
    const btn = document.querySelector('.mobile-menu-button');
    const sidebar = document.querySelector('.sidebar');

    btn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script>


