@props([
    'title' => 'PropertiKu - Jual Tanah & Sewa Villa',
    'description' => 'Temukan penawaran terbaik untuk penjualan tanah dan penyewaan villa di Indonesia.',
    'keywords' => 'properti, jual tanah, sewa villa, investasi properti',
    'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
    'type' => 'website',
])

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ url()->current() }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "RealEstateAgent",
      "name": "PropertiKu",
      "url": "{{ url('/') }}",
      "logo": "https://yourdomain.com/logo.png",
      "sameAs": [
        "https://www.facebook.com/propertiku",
        "https://www.instagram.com/propertiku"
      ],
      "description": "PropertiKu membantu Anda menemukan tanah dan villa terbaik untuk investasi maupun liburan."
    }
    </script>
