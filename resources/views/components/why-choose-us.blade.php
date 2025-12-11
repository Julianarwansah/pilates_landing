<section class="py-24 px-6 border-t" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
    <div class="max-w-7xl mx-auto">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4" style="color: var(--text-primary);">
                Mengapa Bisnis Memilih Kami
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-secondary);">
                Kami adalah mitra terpercaya untuk studio Pilates dan gym di seluruh Indonesia
            </p>
        </div>

        {{-- Features Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-grid">
            @php
                $features = [
                    [
                        'title' => 'Supplier Resmi',
                        'description' => 'Supplier resmi peralatan Pilates untuk studio & gym'
                    ],
                    [
                        'title' => 'Harga B2B Kompetitif',
                        'description' => 'Harga B2B yang kompetitif untuk bisnis Anda'
                    ],
                    [
                        'title' => 'Produk Premium',
                        'description' => 'Produk premium (Reformer, Cadillac, Chair, Barrel, dsb.)'
                    ],
                    [
                        'title' => 'Instalasi & Training',
                        'description' => 'Instalasi & training penggunaan peralatan'
                    ],
                    [
                        'title' => 'Garansi Resmi',
                        'description' => 'Garansi + layanan purna jual terpercaya'
                    ],
                    [
                        'title' => 'Pengiriman Nasional',
                        'description' => 'Pengiriman seluruh Indonesia dengan aman'
                    ]
                ];
            @endphp

            @foreach($features as $index => $feature)
                <div class="p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 border group stagger-item"
                    style="background-color: var(--bg-primary); border-color: var(--border-color);">
                    <h3 class="text-xl font-bold mb-3 transition-colors duration-300" style="color: var(--text-primary);">
                        {{ $feature['title'] }}
                    </h3>
                    <p class="leading-relaxed" style="color: var(--text-secondary);">
                        {{ $feature['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>