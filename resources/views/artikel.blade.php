<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Artikel Pilates | Tips & Panduan Studio Pilates</title>
    <meta name="description"
        content="Artikel, tips, dan panduan lengkap tentang Pilates, peralatan studio, dan bisnis Pilates di Indonesia.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <x-navbar />

    <!-- Theme Toggle Button -->
    <button id="theme-toggle"
        class="fixed top-6 right-6 z-50 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border"
        style="background-color: var(--bg-secondary); border-color: var(--border-color);" aria-label="Toggle theme">
    </button>

    <!-- Article Page Content -->
    <div class="min-h-screen py-24 px-6" style="background-color: var(--bg-primary);">
        <div class="max-w-6xl mx-auto">

            <!-- Page Header -->
            <div class="text-center mb-16 fade-in-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-4" style="color: var(--text-primary);">
                    Artikel & Panduan Pilates
                </h1>
                <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-secondary);">
                    Tips, panduan, dan informasi terkini seputar Pilates dan bisnis studio
                </p>
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-grid">
                @php
                    $articles = [
                        [
                            'title' => 'Panduan Memilih Reformer untuk Studio Baru',
                            'excerpt' => 'Tips memilih Pilates Reformer yang tepat untuk studio Anda, dari material hingga fitur yang harus diperhatikan.',
                            'date' => '10 Des 2024',
                            'category' => 'Peralatan'
                        ],
                        [
                            'title' => 'Cara Merawat Peralatan Pilates Agar Awet',
                            'excerpt' => 'Panduan lengkap perawatan rutin untuk menjaga kualitas dan umur peralatan Pilates studio Anda.',
                            'date' => '8 Des 2024',
                            'category' => 'Tips'
                        ],
                        [
                            'title' => 'Strategi Marketing untuk Studio Pilates',
                            'excerpt' => 'Cara efektif memasarkan studio Pilates Anda dan menarik lebih banyak klien di era digital.',
                            'date' => '5 Des 2024',
                            'category' => 'Bisnis'
                        ],
                        [
                            'title' => 'Perbedaan Reformer Aluminium vs Kayu',
                            'excerpt' => 'Perbandingan detail antara Reformer berbahan aluminium dan kayu untuk membantu Anda memilih.',
                            'date' => '3 Des 2024',
                            'category' => 'Peralatan'
                        ],
                        [
                            'title' => 'Setup Studio Pilates: Checklist Lengkap',
                            'excerpt' => 'Daftar lengkap peralatan dan persiapan yang dibutuhkan untuk membuka studio Pilates profesional.',
                            'date' => '1 Des 2024',
                            'category' => 'Panduan'
                        ],
                        [
                            'title' => 'Tren Pilates 2024 di Indonesia',
                            'excerpt' => 'Perkembangan terbaru industri Pilates di Indonesia dan peluang bisnis yang menjanjikan.',
                            'date' => '28 Nov 2024',
                            'category' => 'Bisnis'
                        ]
                    ];
                @endphp

                @foreach($articles as $index => $article)
                    <article
                        class="rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-2 border group stagger-item"
                        style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xs font-semibold px-3 py-1 rounded-full"
                                    style="background-color: var(--bg-tertiary); color: var(--accent-primary);">
                                    {{ $article['category'] }}
                                </span>
                                <span class="text-xs" style="color: var(--text-tertiary);">{{ $article['date'] }}</span>
                            </div>

                            <h3 class="text-xl font-bold mb-3 group-hover:text-opacity-80 transition-opacity"
                                style="color: var(--text-primary);">
                                {{ $article['title'] }}
                            </h3>

                            <p class="text-sm leading-relaxed mb-4" style="color: var(--text-secondary);">
                                {{ $article['excerpt'] }}
                            </p>

                            <a href="#"
                                class="inline-flex items-center gap-2 text-sm font-semibold transition-all group-hover:gap-3"
                                style="color: var(--accent-primary);">
                                Baca Selengkapnya
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </div>
</body>

</html>