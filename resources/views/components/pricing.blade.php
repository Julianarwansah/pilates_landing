<section class="py-24 px-6 border-t" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
    <div class="max-w-7xl mx-auto">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4" style="color: var(--text-primary);">
                Harga B2B
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-secondary);">
                Kami menyediakan paket pembelian untuk studio baru dengan harga khusus B2B
            </p>
        </div>

        {{-- Pricing Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @php
                $packages = [
                    [
                        'name' => 'Starter Studio',
                        'contents' => '1 Reformer',
                        'discount' => 'Hemat 15%',
                        'popular' => false,
                        'features' => ['Ideal untuk Home Studio', 'Instalasi Gratis', 'Garansi 1 Tahun']
                    ],
                    [
                        'name' => 'Standard Studio',
                        'contents' => '2–3 Reformer + Chair',
                        'discount' => 'Hemat 20%',
                        'popular' => true,
                        'features' => ['Best Seller', 'Cocok untuk Small Group', 'Training Penggunaan', 'Garansi 2 Tahun', 'Prioritas Support']
                    ],
                    [
                        'name' => 'Full Studio',
                        'contents' => 'Reformer + Cadillac + Chair + Barrel',
                        'discount' => 'Hemat 25%',
                        'popular' => false,
                        'features' => ['Lengkap untuk Profesional', 'Free Layout Consultation', 'Garansi 3 Tahun', 'VIP Support']
                    ]
                ];
            @endphp

            @foreach($packages as $index => $pkg)
                <div class="relative p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 border {{ $pkg['popular'] ? 'scale-105' : '' }}"
                    style="background-color: {{ $pkg['popular'] ? 'var(--bg-primary)' : 'var(--bg-primary)' }}; border-color: {{ $pkg['popular'] ? 'var(--accent-primary)' : 'var(--border-color)' }}; {{ $pkg['popular'] ? 'border-width: 2px;' : '' }}">

                    @if($pkg['popular'])
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full text-sm font-bold text-white"
                            style="background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));">
                            MOST POPULAR
                        </div>
                    @endif

                    <div class="mb-6">
                        <h3 class="text-xl font-bold mb-2" style="color: var(--text-primary);">
                            {{ $pkg['name'] }}
                        </h3>
                        <div class="text-3xl font-bold mb-2" style="color: var(--accent-primary);">
                            {{ $pkg['discount'] }}
                        </div>
                        <p class="text-sm" style="color: var(--text-secondary);">{{ $pkg['contents'] }}</p>
                    </div>

                    <div class="space-y-3 mb-8">
                        @foreach($pkg['features'] as $feature)
                            <div class="flex items-center gap-3 text-sm">
                                <div class="w-1 h-1 rounded-full flex-shrink-0"
                                    style="background-color: {{ $pkg['popular'] ? 'var(--accent-primary)' : 'var(--text-secondary)' }};">
                                </div>
                                <span style="color: var(--text-secondary);">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>

                    <button class="w-full py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg"
                        style="background: {{ $pkg['popular'] ? 'linear-gradient(135deg, var(--accent-primary), var(--accent-secondary))' : 'var(--bg-secondary)' }}; color: {{ $pkg['popular'] ? 'white' : 'var(--text-primary)' }};">
                        Pilih Paket
                    </button>
                </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="text-center mt-12">
            <button
                class="px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                style="background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));">
                Ajukan Penawaran untuk Studio Anda
            </button>
        </div>
    </div>
</section>