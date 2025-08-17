@props(['title', 'price', 'description', 'image', 'location', 'type'])

<div class="grid md:grid-cols-2 gap-10">
    <img src="{{ $image }}" alt="{{ $title }} di {{ $location }}"
        class="rounded-xl shadow-lg w-full h-96 object-cover">

    <div>
        <h1 class="text-4xl font-bold text-blue-600 mb-4">{{ $title }}</h1>
        <p class="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-1">
            <x-heroicon-o-currency-dollar class="w-6 h-6 text-blue-600" /> {{ $price }}
        </p>
        <p class="text-gray-600 mb-6">{{ $description }}</p>

        <ul class="space-y-2 mb-6">
            <li class="flex items-center gap-2">
                <x-heroicon-o-map-pin class="w-5 h-5 text-gray-500" /> <strong>Lokasi:</strong> {{ $location }}
            </li>
            <li class="flex items-center gap-2">
                <x-heroicon-o-building-office-2 class="w-5 h-5 text-gray-500" /> <strong>Tipe:</strong>
                {{ $type }}
            </li>
        </ul>

        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($title) }}"
            class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 inline-flex items-center gap-2">
            <x-heroicon-o-chat-bubble-oval-left-ellipsis class="w-5 h-5" /> Hubungi via WhatsApp
        </a>
    </div>
</div>
