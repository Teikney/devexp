<div {{$attributes(['class' => 'px-4 py-5 sm:px-6 bg-gray-50 border-b border-blue-200'])}}>
    <h1 class="text-2xl leading-6 font-extrabold text-blue-900 italic">
        {{ $slot }}
    </h1>
    <p class="mt-2 max-w-2xl text-sm text-blue-500">
        {{ $subtitle ?? '' }}
    </p>
</div>
