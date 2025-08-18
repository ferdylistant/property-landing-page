<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 text-white bg-transparent">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <h1 class="text-2xl font-bold flex items-center gap-2 drop-shadow-md">
            PropertiKu
        </h1>
        <!-- Menu desktop -->
        <ul class="hidden md:flex space-x-8 font-medium">
            <li><a href="#home" class="hover:text-green-400">Beranda</a></li>
            <li><a href="#properties" class="hover:text-green-400">Properti</a></li>
            <li><a href="#testimonials" class="hover:text-green-400">Testimoni</a></li>
            <li><a href="#contact" class="hover:text-green-400">Kontak</a></li>
        </ul>

        <!-- Tombol hamburger -->
        <div class="md:hidden">
            <button id="menu-toggle"
                class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:text-green-400">
                <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Menu mobile -->
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-2">
        <a href="#home" class="block py-2 hover:text-green-400">Beranda</a>
        <a href="#properties" class="block py-2 hover:text-green-400">Properti</a>
        <a href="#testimonials" class="block py-2 hover:text-green-400">Testimoni</a>
        <a href="#contact" class="block py-2 hover:text-green-400">Kontak</a>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("mobile-menu");
        const iconOpen = document.getElementById("icon-open");
        const iconClose = document.getElementById("icon-close");
        const navbar = document.getElementById('navbar');
        const navbarMenuLinks = document.querySelectorAll('#navbar ul li a');
        const navbarLogo = document.querySelector('#navbar h1');

        toggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            iconOpen.classList.toggle("hidden");
            iconClose.classList.toggle("hidden");

            // Saat menu dibuka -> pakai background putih blur
            if (!menu.classList.contains("hidden")) {
                navbar.classList.add('bg-white/80', 'backdrop-blur-md', 'shadow');
                navbar.classList.remove('bg-transparent');

                navbarMenuLinks.forEach(link => {
                    link.classList.remove('text-white');
                    link.classList.add('text-gray-700', 'hover:text-green-400');
                });
                menu.classList.remove('text-white');
                menu.classList.add('text-gray-800');
                navbarLogo.classList.remove('text-white');
                navbarLogo.classList.add('text-gray-800');
                toggle.classList.remove('text-white');
                toggle.classList.add('text-gray-800');
            } else {
                // Kalau ditutup balik sesuai posisi scroll
                if (window.scrollY < 50) {
                    navbar.classList.remove('bg-white/80', 'backdrop-blur-md', 'shadow');
                    navbar.classList.add('bg-transparent');

                    navbarMenuLinks.forEach(link => {
                        link.classList.remove('text-gray-700');
                        link.classList.add('text-white', 'hover:text-green-400');
                    });
                    menu.classList.remove('text-gray-800');
                    menu.classList.add('text-white');
                    navbarLogo.classList.remove('text-gray-800');
                    navbarLogo.classList.add('text-white');
                    toggle.classList.remove('text-gray-800');
                    toggle.classList.add('text-white');
                }
            }
        });
    });
</script>
