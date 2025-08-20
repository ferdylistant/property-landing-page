<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO Meta (dinamis, fallback default) --}}
    <x-seo-meta :title="$title ?? 'PropertiKu - Jual Tanah & Sewa Villa'" :description="$description ?? 'Temukan penawaran terbaik untuk tanah & villa di Indonesia.'" :image="$image ?? 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c'" :type="$type ?? 'website'" />

    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <style>
        #navbar {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        #navbar h1 {
            transition: color 0.3s ease;
        }

        #navbar ul li a {
            transition: color 0.3s ease;
        }

        #mobile-menu {
            transition: transform 0.3s ease;
        }

        #mobile-menu.show {
            transform: translateX(0);
        }

        #mobile-menu.hidden {
            transform: translateX(100%);
        }

        #villa-day,
        #villa-night {
            transition: opacity 1s ease;
        }

        #villa-day.hidden,
        #villa-night.hidden {
            opacity: 0;
        }
    </style>
    @stack('head') {{-- kalau ada script/style tambahan --}}

</head>

<body class="bg-gray-50 text-gray-900">
    {{-- Navbar Global --}}
    @include('components.navbar')

    {{-- Konten Halaman --}}
    @yield('content')

    {{-- Footer Global --}}
    @include('components.footer')

    @stack('scripts')
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    const navbar = document.getElementById('navbar');
    const bg = document.getElementById('parallax-bg');
    const navbarMenuLinks = document.querySelectorAll('#navbar ul li a'); // ambil semua link menu
    const navbarLogo = document.querySelector('#navbar h1'); // logo
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("mobile-menu");

    // Inisialisasi AOS
    AOS.init({
        duration: 1000, // durasi animasi 1 detik
        once: true // animasi cuma sekali
    });

    window.addEventListener('scroll', () => {
        const scrollPos = window.scrollY;
        bg.style.opacity = 1 - (scrollPos / 1000);
        if (menu.classList.contains("hidden")) {
            // Navbar effect
            if (window.scrollY > 50) {
                // background putih + blur + shadow
                navbar.classList.add('bg-white/80', 'backdrop-blur-md', 'shadow');
                navbar.classList.remove('bg-transparent');

                // teks menu dan logo jadi gray
                navbarMenuLinks.forEach(link => {
                    link.classList.remove('text-white', 'hover:text-emerald-400');
                    link.classList.add('text-gray-700', 'hover:text-emerald-400');
                });
                navbarLogo.classList.remove('text-white');
                navbarLogo.classList.add('text-gray-800');
                toggle.classList.remove('text-white');
                toggle.classList.add('text-gray-800');

            } else {
                // kembali ke transparent
                navbar.classList.remove('bg-white/80', 'backdrop-blur-md', 'shadow');
                navbar.classList.add('bg-transparent');

                // teks menu dan logo putih
                navbarMenuLinks.forEach(link => {
                    link.classList.remove('text-gray-700', 'hover:text-emerald-500');
                    link.classList.add('text-white', 'hover:text-emerald-400');
                });
                navbarLogo.classList.remove('text-gray-800');
                navbarLogo.classList.add('text-white');
                toggle.classList.remove('text-gray-800');
                toggle.classList.add('text-white');
            }

            // Parallax effect
            let offset = window.scrollY * 0.6;
            if (window.innerWidth > 768) { // Hanya aktifkan parallax pada desktop
                bg.style.transform = `translateY(${offset}px)`;
            }
        }
    });
</script>


</html>
