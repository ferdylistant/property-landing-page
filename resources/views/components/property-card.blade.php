@props(['title', 'price', 'image', 'slug', 'location' => null, 'type' => null])

<article class="bg-gray-50 rounded-xl shadow hover:shadow-lg transition p-4">

    <img src="{{ $image }}" alt="{{ $title }} {{ $location ? 'di ' . $location : '' }}"
        class="rounded-lg mb-4 w-full h-56 object-cover">

    <h3 class="text-xl font-semibold">{{ $title }}</h3>
    <p class="text-gray-600 flex items-center gap-1">
        <x-heroicon-o-currency-dollar class="w-5 h-5 text-blue-600" /> {{ $price }}
    </p>
    <p class="text-sm text-gray-500 flex items-center gap-1 mt-1">
        <x-heroicon-o-map-pin class="w-5 h-5 text-gray-500" /> {{ $location ?? '-' }} • {{ $type ?? '-' }}
    </p>
    <a href="{{ route('property.show', $slug) }}"
        class="mt-3 inline-flex items-center gap-1 text-blue-600 font-medium hover:underline">
        Detail <x-heroicon-o-arrow-right class="w-4 h-4" />
    </a>
</article>
