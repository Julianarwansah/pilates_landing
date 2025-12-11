<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <title>Supplier Alat Pilates Profesional untuk Studio & Gym | B2B Equipment</title>
    <meta name="description"
        content="Supplier resmi peralatan Pilates untuk studio & gym. Harga B2B kompetitif, produk premium (Reformer, Cadillac, Chair, Barrel), garansi resmi, instalasi & training. Pengiriman seluruh Indonesia.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <!-- Theme Toggle Button -->
    <button id="theme-toggle"
        class="fixed top-6 right-6 z-50 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border"
        style="background-color: var(--bg-secondary); border-color: var(--border-color);" aria-label="Toggle theme">
        <!-- Icon will be injected by JS -->
    </button>

    <div class="app">
        <x-hero />
        <x-why-choose-us />
        <x-featured-products />
        <x-pricing />
        <x-testimonials />
        <x-cta />
    </div>
</body>

</html>