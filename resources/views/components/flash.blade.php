@if (session()->has('success'))
    <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed bottom-5 right-5 bg-green-500 text-white py-2 px-4 rounded-xl">
        <p>
            {{ session('success') }}
        </p>
    </div>
@elseif (session()->has('error'))
    <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 8000)"
        x-show="show"
        class="fixed bottom-5 right-5 bg-red-500 text-white py-2 px-4 rounded-xl">
        <p>
            {{ session('error') }}
        </p>
    </div>
@endif
