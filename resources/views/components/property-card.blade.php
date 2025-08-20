@props(['title', 'price', 'image', 'slug', 'location' => null, 'type' => null])

<article class="bg-gray-50 rounded-xl shadow hover:shadow-lg transition transform duration-300 p-4">
    <!-- Gambar Properti dengan alt yang lebih deskriptif -->
    <img src="{{ $image }}" alt="Gambar dari {{ $title }} di {{ $location ?? 'lokasi tidak diketahui' }}"
        class="rounded-lg mb-4 w-full h-56 object-cover transition-all duration-300 transform hover:scale-105">

    <!-- Judul Properti -->
    <h3 class="text-xl font-semibold text-gray-800">{{ $title }}</h3>

    <!-- Harga Properti dengan ikon -->
    <p class="text-gray-600 flex items-center gap-1">
        <x-heroicon-o-currency-dollar class="w-5 h-5 text-emerald-600" /> {{ $price }}
    </p>

    <!-- Lokasi dan Tipe Properti dengan ikon -->
    <p class="text-sm text-gray-500 flex items-center gap-1 mt-1">
        <x-heroicon-o-map-pin class="w-5 h-5 text-gray-500" /> {{ $location ?? '-' }} • {{ $type ?? '-' }}
    </p>

    <!-- Link Detail Properti dengan transisi dan hover effect -->
    <a href="{{ route('property.show', $slug) }}"
        class="mt-3 inline-flex items-center gap-1 text-emerald-600 font-medium hover:underline focus:outline-none focus:ring-2 focus:ring-emerald-600 rounded">
        Detail <x-heroicon-o-arrow-right class="w-4 h-4" />
    </a>
</article>
