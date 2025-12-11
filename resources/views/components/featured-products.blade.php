<section class="py-24 px-6 border-t section-gradient"
    style="background-color: var(--bg-primary); border-color: var(--border-color);">
    <div class="max-w-7xl mx-auto">
        {{-- Section Header --}}
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-4" style="color: var(--text-primary);">
                Produk Unggulan
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-secondary);">
                Peralatan Pilates berkualitas tinggi untuk studio profesional Anda
            </p>
        </div>

        {{-- Products Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-grid">
            @php
                $products = [
                    [
                        'name' => 'Pilates Reformer',
                        'image' => '/images/reformer.png',
                        'features' => [
                            'Frame kuat dan stabil',
                            'Smooth carriage movement',
                            'Cocok untuk kelas privat & grup',
                            'Pilihan: Aluminium / Wooden Reformer'
                        ],
                        'cta' => 'Minta Katalog Lengkap'
                    ],
                    [
                        'name' => 'Cadillac & Tower Unit',
                        'image' => '/images/cadillac.png',
                        'features' => [
                            'Peralatan utama untuk program full-body',
                            'Cocok untuk studio Pilates profesional',
                            'Diskon B2B tersedia'
                        ],
                        'cta' => 'Lihat Penawaran'
                    ],
                    [
                        'name' => 'Wunda Chair & Ladder Barrel',
                        'image' => '/images/chair.png',
                        'features' => [
                            'Material premium',
                            'Tanpa perawatan rumit',
                            'Ideal untuk variasi kelas lanjutan'
                        ],
                        'cta' => 'Hubungi Kami'
                    ]
                ];
            @endphp

            @foreach($products as $index => $product)
                <div class="rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-2 border group stagger-item"
                    style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                    {{-- Product Image --}}
                    <div class="aspect-[4/3] overflow-hidden" style="background-color: var(--bg-tertiary);">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>

                    {{-- Product Content --}}
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4" style="color: var(--text-primary);">
                            {{ $product['name'] }}
                        </h3>
                        <ul class="space-y-2 mb-6">
                            @foreach($product['features'] as $feature)
                                <li class="flex items-start gap-2 text-sm" style="color: var(--text-secondary);">
                                    <span class="mt-1.5 w-1 h-1 rounded-full flex-shrink-0"
                                        style="background-color: var(--accent-primary);"></span>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <button
                            class="w-full py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg border"
                            style="background-color: var(--bg-primary); color: var(--text-primary); border-color: var(--border-color);">
                            {{ $product['cta'] }}
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>