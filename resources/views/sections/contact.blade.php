<section id="contact" class="relative py-20 bg-gradient-to-r from-green-600 to-emerald-500 text-white overflow-hidden">
    <!-- Decorative blurred shapes -->
    <div class="absolute -top-20 -left-20 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -right-24 w-96 h-96 bg-green-900/20 rounded-full blur-2xl"></div>
    <div class="container mx-auto px-6 relative z-10 grid md:grid-cols-2 gap-10 items-center"> <!-- Text content -->
        <div class="text-center md:text-left">
            <h2 id="contact-title"
                class="text-3xl md:text-4xl font-bold mb-6 flex items-center justify-center md:justify-start gap-2">
                <x-heroicon-o-phone-arrow-up-right class="w-8 h-8" /> Siap Investasi atau Sewa Villa?
            </h2>
            <p id="contact-text" class="mb-8 text-lg opacity-90"> Hubungi tim kami untuk konsultasi gratis dan temukan
                properti impian
                Anda. </p> <a id="contact-btn" href="https://wa.me/6281234567890"
                class="px-6 py-3 rounded-2xl shadow-lg transition font-semibold inline-flex items-center gap-2">
                <x-heroicon-o-chat-bubble-left-right class="w-5 h-5" /> Hubungi via WhatsApp </a>
        </div> <!-- Custom SVG Illustration -->
        <div class="flex justify-center md:justify-end"> <!-- Siang --> <svg id="villa-day"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" class="w-80 md:w-96 drop-shadow-2xl hidden">
                <!-- Matahari -->
                <circle cx="320" cy="60" r="40" fill="#FFD93D" /> <!-- Palm tree -->
                <rect x="75" y="130" width="12" height="100" fill="#8D5524" />
                <path d="M76 120 C60 110, 50 100, 70 90 C90 100, 110 110, 76 120Z" fill="#34D399" />
                <path d="M76 115 C90 100, 120 95, 115 115 C100 125, 85 130, 76 115Z" fill="#10B981" />
                <!-- Villa body -->
                <rect x="130" y="140" width="140" height="90" fill="#fff" stroke="#e5e7eb" stroke-width="2"
                    rx="6" /> <!-- Roof -->
                <polygon points="120,140 200,90 280,140" fill="#ef4444" /> <!-- Door -->
                <rect x="185" y="180" width="30" height="50" fill="#6b7280" rx="3" /> <!-- Windows -->
                <rect x="145" y="160" width="25" height="25" fill="#93c5fd" stroke="#1e3a8a" stroke-width="2"
                    rx="3" />
                <rect x="230" y="160" width="25" height="25" fill="#93c5fd" stroke="#1e3a8a" stroke-width="2"
                    rx="3" /> <!-- Ground -->
                <rect x="0" y="230" width="400" height="20" fill="#34d399" />
            </svg> <!-- Malam --> <svg id="villa-night" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"
                class="w-80 md:w-96 drop-shadow-2xl hidden"> <!-- Bulan -->
                <circle cx="320" cy="60" r="35" fill="#FDE68A" />
                <circle cx="335" cy="50" r="25" fill="#111827" /> <!-- bayangan bulan --> <!-- Bintang -->
                <circle cx="280" cy="40" r="3" fill="#F9FAFB" />
                <circle cx="300" cy="90" r="2" fill="#F9FAFB" />
                <circle cx="350" cy="70" r="4" fill="#F9FAFB" /> <!-- Palm tree -->
                <rect x="75" y="130" width="12" height="100" fill="#4B5563" />
                <path d="M76 120 C60 110, 50 100, 70 90 C90 100, 110 110, 76 120Z" fill="#1F2937" />
                <path d="M76 115 C90 100, 120 95, 115 115 C100 125, 85 130, 76 115Z" fill="#374151" />
                <!-- Villa body -->
                <rect x="130" y="140" width="140" height="90" fill="#1F2937" stroke="#374151" stroke-width="2"
                    rx="6" /> <!-- Roof -->
                <polygon points="120,140 200,90 280,140" fill="#6B7280" /> <!-- Door -->
                <rect x="185" y="180" width="30" height="50" fill="#9CA3AF" rx="3" />
                <!-- Windows (kuning menyala) -->
                <rect x="145" y="160" width="25" height="25" fill="#FACC15" stroke="#CA8A04" stroke-width="2"
                    rx="3" />
                <rect x="230" y="160" width="25" height="25" fill="#FACC15" stroke="#CA8A04" stroke-width="2"
                    rx="3" /> <!-- Ground -->
                <rect x="0" y="230" width="400" height="20" fill="#065f46" />
            </svg> </div>
    </div> <!-- Wave transition -->
    <div id="contact-wave" class="absolute bottom-0 left-0 right-0 overflow-hidden leading-none"> <svg
            viewBox="0 0 1440 150" xmlns="http://www.w3.org/2000/svg">
            <path fill="#111827" fill-opacity="1"
                d="M0,96L80,80C160,64,320,32,480,26.7C640,21,800,43,960,69.3C1120,96,1280,128,1360,144L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg> </div>
</section>

<script defer>
    document.addEventListener("DOMContentLoaded", function() {
        const hour = new Date().getHours();
        const section = document.getElementById("contact");
        const btn = document.getElementById("contact-btn");
        const title = document.getElementById("contact-title");
        const text = document.getElementById("contact-text");
        const wave = document.getElementById("contact-wave");

        if (hour >= 6 && hour < 18) {
            // 🌞 Siang
            document.getElementById("villa-day").classList.remove("hidden");
            section.classList.add("bg-gradient-to-b", "from-sky-200", "to-white", "text-gray-800");

            title.classList.add("text-gray-900");
            text.classList.add("text-gray-700");
            btn.classList.add("bg-green-600", "text-white", "hover:bg-green-700");
            wave.setAttribute("fill", "#111827");
        } else {
            // 🌙 Malam
            document.getElementById("villa-night").classList.remove("hidden");
            section.classList.add("bg-gradient-to-b", "from-indigo-900", "to-gray-900", "text-white");

            title.classList.add("text-white");
            text.classList.add("text-gray-300");
            btn.classList.add("bg-yellow-400", "text-gray-900", "hover:bg-yellow-300");
            wave.setAttribute("fill", "#000000");
        }
    });
</script>
