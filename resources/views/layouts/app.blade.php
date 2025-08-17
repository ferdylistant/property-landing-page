<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO Meta (dinamis, fallback default) --}}
    <x-seo-meta :title="$title ?? 'PropertiKu - Jual Tanah & Sewa Villa'" :description="$description ?? 'Temukan penawaran terbaik untuk tanah & villa di Indonesia.'" :image="$image ?? 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c'" :type="$type ?? 'website'" />

    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
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

    // Inisialisasi AOS
    AOS.init({
        duration: 1000, // durasi animasi 1 detik
        once: true // animasi cuma sekali
    });

    window.addEventListener('scroll', () => {
        // Navbar effect
        if (window.scrollY > 50) {
            // background putih + blur + shadow
            navbar.classList.add('bg-white/80', 'backdrop-blur-md', 'shadow');
            navbar.classList.remove('bg-transparent');

            // teks menu dan logo jadi gray
            navbarMenuLinks.forEach(link => {
                link.classList.remove('text-white', 'hover:text-blue-400');
                link.classList.add('text-gray-700', 'hover:text-blue-400');
            });
            navbarLogo.classList.remove('text-white');
            navbarLogo.classList.add('text-gray-800');

        } else {
            // kembali ke transparent
            navbar.classList.remove('bg-white/80', 'backdrop-blur-md', 'shadow');
            navbar.classList.add('bg-transparent');

            // teks menu dan logo putih
            navbarMenuLinks.forEach(link => {
                link.classList.remove('text-gray-700', 'hover:text-blue-500');
                link.classList.add('text-white', 'hover:text-blue-400');
            });
            navbarLogo.classList.remove('text-gray-800');
            navbarLogo.classList.add('text-white');
        }

        // Parallax effect
        let offset = window.scrollY * 0.4; // semakin kecil => lebih halus
        bg.style.transform = `translateY(${offset}px)`;
    });
</script>


</html>
