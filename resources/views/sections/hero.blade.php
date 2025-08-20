<section id="home" class="relative h-screen flex items-center justify-center overflow-hidden">

    <!-- Background parallax -->
    <div id="parallax-bg" class="absolute inset-0 bg-no-repeat bg-center bg-cover"
        style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80');">
    </div>

    <!-- Overlay gradient biru -->
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/80 via-black/50 to-emerald-900/80"></div>

    <!-- Konten hero -->
    <div class="relative z-10 text-center text-white max-w-2xl px-6">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
            <span data-aos="fade-down" data-aos-delay="200">Jual Tanah &</span>
            <span data-aos="fade-down" data-aos-delay="400">Sewa Villa</span>
            <span data-aos="fade-down" data-aos-delay="600"><span class="text-emerald-400">Terbaik</span> di
                Indonesia</span>
        </h1>
        <p class="mt-4 text-lg sm:text-xl text-gray-200" data-aos="fade-up" data-aos-delay="800">
            Dapatkan pilihan properti terbaik, mulai dari tanah strategis hingga villa eksklusif dengan harga
            transparan.
        </p>
        <div class="mt-6 flex flex-col md:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="1000">
            <a href="#properties" aria-label="Lihat Properti"
                class="bg-emerald-600 text-white px-6 py-3 rounded-lg shadow-lg transition duration-300 hover:bg-emerald-700 flex items-center gap-2">
                <x-heroicon-o-eye class="w-5 h-5" /> Lihat Properti
            </a>
            <a href="#contact" aria-label="Konsultasi Gratis"
                class="bg-white border border-emerald-600 text-emerald-600 px-6 py-3 rounded-lg transition duration-300 hover:bg-emerald-50 flex items-center gap-2">
                <x-heroicon-o-chat-bubble-left-right class="w-5 h-5" /> Konsultasi Gratis
            </a>
        </div>
    </div>
</section>
