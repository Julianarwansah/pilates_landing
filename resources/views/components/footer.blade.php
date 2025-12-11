<footer class="py-16 px-6 border-t" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
    <div class="max-w-7xl mx-auto">

        {{-- Top Section: Brand & Newsletter --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            {{-- Brand & Description --}}
            <div>
                <a href="/" class="text-3xl font-bold mb-4 inline-block" style="color: var(--text-primary);">
                    <span style="color: var(--accent-primary);">Pilates</span>Pro
                </a>
                <p class="text-sm leading-relaxed mb-6 max-w-md" style="color: var(--text-secondary);">
                    Supplier resmi peralatan Pilates untuk studio & gym di seluruh Indonesia.
                    Kami menyediakan produk berkualitas tinggi dengan harga B2B yang kompetitif.
                </p>

                {{-- Newsletter --}}
                <div class="flex gap-3">
                    <input type="email" placeholder="Email Address"
                        class="flex-1 px-4 py-3 rounded-lg border outline-none transition-colors text-sm"
                        style="background-color: var(--bg-primary); border-color: var(--border-color); color: var(--text-primary);">
                    <button
                        class="px-6 py-3 rounded-lg font-semibold text-white text-sm transition-all duration-300 hover:shadow-lg"
                        style="background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));">
                        Subscribe
                    </button>
                </div>
            </div>

            {{-- Social Media --}}
            <div>
                <h3 class="text-lg font-bold mb-6" style="color: var(--text-primary);">Follow us on ...</h3>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#"
                        class="flex items-center justify-between p-3 rounded-lg border transition-all duration-300 hover:-translate-y-1"
                        style="background-color: var(--bg-primary); border-color: var(--border-color);">
                        <span class="text-sm font-medium" style="color: var(--text-secondary);">Facebook</span>
                        <svg class="w-5 h-5" style="color: #1877F2;" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="flex items-center justify-between p-3 rounded-lg border transition-all duration-300 hover:-translate-y-1"
                        style="background-color: var(--bg-primary); border-color: var(--border-color);">
                        <span class="text-sm font-medium" style="color: var(--text-secondary);">Instagram</span>
                        <svg class="w-5 h-5" style="color: #E4405F;" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="flex items-center justify-between p-3 rounded-lg border transition-all duration-300 hover:-translate-y-1"
                        style="background-color: var(--bg-primary); border-color: var(--border-color);">
                        <span class="text-sm font-medium" style="color: var(--text-secondary);">YouTube</span>
                        <svg class="w-5 h-5" style="color: #FF0000;" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="flex items-center justify-between p-3 rounded-lg border transition-all duration-300 hover:-translate-y-1"
                        style="background-color: var(--bg-primary); border-color: var(--border-color);">
                        <span class="text-sm font-medium" style="color: var(--text-secondary);">LinkedIn</span>
                        <svg class="w-5 h-5" style="color: #0A66C2;" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Middle Section: Links --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-12 border-t border-b"
            style="border-color: var(--border-color);">
            {{-- Pages --}}
            <div>
                <h4 class="text-sm font-bold mb-4" style="color: var(--text-primary);">Pages</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">Beranda</a></li>
                    <li><a href="#features" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">Keunggulan</a></li>
                    <li><a href="#products" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">Produk</a></li>
                    <li><a href="#pricing" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">Harga</a></li>
                </ul>
            </div>

            {{-- Resources --}}
            <div>
                <h4 class="text-sm font-bold mb-4" style="color: var(--text-primary);">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="/artikel" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">Artikel</a></li>
                    <li><a href="#" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">Panduan</a></li>
                    <li><a href="#" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">FAQ</a></li>
                    <li><a href="#" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">Katalog</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="text-sm font-bold mb-4" style="color: var(--text-primary);">Contact</h4>
                <ul class="space-y-2">
                    <li><a href="mailto:joulwinnofficial@gmail.com" class="text-sm transition-colors hover:opacity-70"
                            style="color: var(--text-secondary);">joulwinnofficial@gmail.com</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=6281258887895" target="_blank"
                            class="text-sm transition-colors hover:opacity-70" style="color: var(--text-secondary);">+62
                            812 5888 7895 (WhatsApp)</a></li>
                </ul>
            </div>

            {{-- Location --}}
            <div>
                <h4 class="text-sm font-bold mb-4" style="color: var(--text-primary);">Location</h4>
                <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">
                    BSD Ruko Boulevard, Jalan Raya Taman Tekhno Lt.2,<br>
                    Blok AA No. 7, Ciater, Kec. Serpong,<br>
                    Kota Tangerang Selatan, Banten 15323
                </p>
            </div>
        </div>

        {{-- Bottom Section: Copyright --}}
        <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-sm" style="color: var(--text-tertiary);">
                © 2024 PilatesPro. All rights reserved.
            </p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-sm transition-colors hover:opacity-70"
                    style="color: var(--text-tertiary);">Privacy Policy</a>
                <span style="color: var(--border-color);">•</span>
                <a href="#" class="text-sm transition-colors hover:opacity-70"
                    style="color: var(--text-tertiary);">Terms & Conditions</a>
            </div>
        </div>

    </div>
</footer>