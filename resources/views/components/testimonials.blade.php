<section class="py-24 px-6 border-t" style="background-color: var(--bg-primary); border-color: var(--border-color);">
    <div class="max-w-5xl mx-auto">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4" style="color: var(--text-primary);">
                Apa Kata Klien Kami
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-secondary);">
                Dipercaya oleh studio Pilates dan gym terkemuka di Indonesia
            </p>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @php
                $testimonials = [
                    [
                        'quote' => 'Kualitas reformernya sangat bagus. Instalasi rapi dan supportnya cepat.',
                        'author' => 'Studio Pilates Jakarta',
                        'role' => 'Owner'
                    ],
                    [
                        'quote' => 'Harga B2B membuat kami lebih hemat biaya untuk membuka cabang baru.',
                        'author' => 'Gym & Wellness Center',
                        'role' => 'Manager'
                    ]
                ];
            @endphp

            @foreach($testimonials as $index => $testimonial)
                <div class="p-8 rounded-2xl border transition-all duration-300 hover:-translate-y-2"
                    style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                    <div class="text-5xl mb-4 opacity-20" style="color: var(--accent-primary);">❝</div>
                    <p class="text-lg mb-6 leading-relaxed italic" style="color: var(--text-primary);">
                        {{ $testimonial['quote'] }}
                    </p>
                    <div class="pt-4 border-t" style="border-color: var(--border-color);">
                        <h4 class="font-bold" style="color: var(--text-primary);">
                            {{ $testimonial['author'] }}
                        </h4>
                        <p class="text-sm" style="color: var(--text-secondary);">
                            {{ $testimonial['role'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>