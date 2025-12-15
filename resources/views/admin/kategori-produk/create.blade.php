@extends('layoutsadmin.app')

@section('title', 'Tambah Kategori')

@section('head')
@endsection

@section('content')
    <script src="https://cdn.tiny.cloud/1/pxtqyte6btxrd0039qdxzx1frknn13n8l8nbob563irb7q96/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>
    <div class="container-fluid px-3 md:px-4 animate-fade-in-up">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
            <div class="mb-4 md:mb-0">
                <div class="flex items-center space-x-2 text-sm theme-text-secondary mb-2">
                    <a href="{{ route('admin.kategori-produks.index') }}"
                        class="text-blue-400 hover:text-blue-300 transition-colors duration-200">
                        Kategori
                    </a>
                    <span>/</span>
                    <span>Tambah Kategori</span>
                </div>
                <h1 class="text-xl md:text-2xl font-bold text-blue-400">Tambah Kategori Baru</h1>
                <p class="theme-text-secondary text-sm md:text-base">Kelola kategori produk Anda</p>
            </div>
            <a href="{{ route('admin.kategori-produks.index') }}"
                class="inline-flex items-center px-4 py-2 theme-bg-secondary theme-border border rounded-lg font-semibold text-xs theme-text-primary uppercase tracking-widest hover:border-blue-400 transition w-full md:w-auto justify-center mt-4 md:mt-0 shadow-md hover:shadow-lg">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Daftar
            </a>
        </div>

        <!-- Storage Info Banner -->
        <div
            class="mb-6 bg-blue-500/10 border border-blue-500/30 rounded-lg p-4 backdrop-blur-sm animate-fade-in-up delay-100">
            <div class="flex items-start">
                <i class="fas fa-cloud text-blue-400 mt-0.5 mr-3 flex-shrink-0 text-lg"></i>
                <div>
                    <h4 class="text-sm font-medium text-blue-400">Cloudinary Storage Active</h4>
                    <p class="text-xs theme-text-secondary mt-1 opacity-90">
                        Gambar kategori akan dioptimalkan secara otomatis dan disimpan di Cloudinary untuk performa terbaik.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 animate-fade-in-up delay-200">
            <!-- Main Form -->
            <div class="xl:col-span-2">
                <form action="{{ route('admin.kategori-produks.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf

                    <!-- Basic Info Card -->
                    <div class="bg-gradient-card backdrop-blur-md theme-border border rounded-xl shadow-2xl p-4 md:p-6">
                        <h3 class="font-bold text-lg mb-4 text-blue-400">Informasi Dasar</h3>

                        <div class="mb-4">
                            <label for="nama_kategori" class="block text-sm font-semibold theme-text-secondary mb-2">Nama
                                Kategori
                                *</label>
                            <input type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori') }}"
                                required
                                class="w-full px-4 py-3 text-lg font-semibold theme-bg-secondary theme-border border rounded-lg focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition theme-text-primary placeholder-gray-500"
                                placeholder="Masukkan nama kategori...">
                            @error('nama_kategori')
                                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Rich Text Editor Card -->
                    <div class="bg-gradient-card backdrop-blur-md theme-border border rounded-xl shadow-2xl p-4 md:p-6">
                        <label for="deskripsi" class="block text-sm font-semibold theme-text-secondary mb-2">
                            Deskripsi
                            <span class="text-xs theme-text-secondary opacity-70 font-normal ml-2 hidden md:inline">
                                <i class="fas fa-file-word mr-1"></i>
                                Paste from Word/Google Docs - formatting preserved!
                            </span>
                        </label>

                        <div class="theme-tinymce-wrapper">
                            <textarea name="deskripsi" id="deskripsi"
                                class="tinymce-editor">{{ old('deskripsi') }}</textarea>
                        </div>

                        @error('deskripsi')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Featured Image Card -->
                    <div class="bg-gradient-card backdrop-blur-md theme-border border rounded-xl shadow-2xl p-4 md:p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-bold text-blue-400">Gambar Kategori</h3>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                <i class="fas fa-check-circle mr-1"></i>
                                Cloudinary
                            </span>
                        </div>

                        <div class="mb-4">
                            <label for="gambar" class="block text-sm font-semibold theme-text-secondary mb-2">Upload
                                Gambar</label>
                            <input type="file" name="gambar" id="gambar" accept="image/*"
                                class="w-full px-3 py-2 theme-bg-secondary theme-border border rounded-lg focus:outline-none focus:border-blue-400 transition text-sm theme-text-primary file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-500/10 file:text-blue-400 hover:file:bg-blue-500/20">
                            <p class="mt-1 text-xs theme-text-secondary opacity-70">
                                Format: JPEG, PNG, JPG, GIF, WEBP. Max: 5MB.
                            </p>
                            @error('gambar')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div id="imagePreview" class="hidden mt-4">
                            <div class="relative inline-block">
                                <img id="previewImage"
                                    class="max-w-full h-auto rounded-lg shadow-lg theme-border border ring-2 ring-blue-400/30">
                                <div
                                    class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full shadow-lg">
                                    Ready
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="bg-gradient-card backdrop-blur-md theme-border border rounded-xl shadow-2xl p-4 md:p-6">
                        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 gap-4">
                            <a href="{{ route('admin.kategori-produks.index') }}"
                                class="px-6 py-2.5 theme-bg-secondary theme-border border theme-text-primary rounded-lg hover:border-blue-400 transition text-center w-full md:w-auto font-medium">
                                Batal
                            </a>
                            <button type="submit"
                                class="px-6 py-2.5 bg-gradient-primary text-white rounded-lg hover:shadow-lg hover:shadow-blue-500/30 transition flex items-center justify-center w-full md:w-auto font-bold transform hover:-translate-y-0.5">
                                <i class="fas fa-save mr-2"></i>
                                Simpan Kategori
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Settings -->
                <div class="bg-gradient-card backdrop-blur-md theme-border border rounded-xl shadow-2xl p-4 md:p-6">
                    <h3 class="text-lg font-bold text-blue-400 mb-4">Pengaturan</h3>

                    <div class="mb-4">
                        <label for="urutan" class="block text-sm font-semibold theme-text-secondary mb-2">Urutan</label>
                        <input type="number" name="urutan" id="urutan" value="{{ old('urutan') }}"
                            class="w-full px-4 py-2 theme-bg-secondary theme-border border rounded-lg focus:outline-none focus:border-blue-400 transition theme-text-primary"
                            min="0">
                        <p class="mt-1 text-xs theme-text-secondary opacity-70">Biarkan kosong untuk urutan otomatis</p>
                        @error('urutan')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- SEO Metadata -->
                <div class="bg-gradient-card backdrop-blur-md theme-border border rounded-xl shadow-2xl p-4 md:p-6">
                    <h3 class="text-lg font-bold text-blue-400 mb-4">SEO & Metadata</h3>

                    <div class="mb-4">
                        <label for="meta_title" class="block text-sm font-semibold theme-text-secondary mb-2">Meta
                            Title</label>
                        <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}"
                            class="w-full px-4 py-2 theme-bg-secondary theme-border border rounded-lg focus:outline-none focus:border-blue-400 transition theme-text-primary">
                    </div>

                    <div class="mb-4">
                        <label for="meta_description" class="block text-sm font-semibold theme-text-secondary mb-2">Meta
                            Description</label>
                        <textarea name="meta_description" id="meta_description" rows="3"
                            class="w-full px-4 py-2 theme-bg-secondary theme-border border rounded-lg focus:outline-none focus:border-blue-400 transition theme-text-primary">{{ old('meta_description') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="meta_keywords" class="block text-sm font-semibold theme-text-secondary mb-2">Meta
                            Keywords</label>
                        <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords') }}"
                            class="w-full px-4 py-2 theme-bg-secondary theme-border border rounded-lg focus:outline-none focus:border-blue-400 transition theme-text-primary">
                    </div>
                </div>

                <!-- Cloudinary Benefits -->
                <div class="bg-blue-500/5 rounded-xl border border-blue-500/20 p-4 md:p-6 backdrop-blur-sm">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-star text-blue-400 mr-2 text-xl"></i>
                        <h3 class="text-lg font-bold text-blue-400">Cloudinary Benefits</h3>
                    </div>
                    <ul class="space-y-2 text-sm theme-text-secondary">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-400 mr-2 mt-1 flex-shrink-0"></i>
                            <span><strong>Auto Optimization:</strong> Images optimized automatically</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-400 mr-2 mt-1 flex-shrink-0"></i>
                            <span><strong>Fast Delivery:</strong> Global CDN for quick loading</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize TinyMCE
            tinymce.init({
                selector: '.tinymce-editor',
                height: 500,
                menubar: true,
                skin: 'oxide-dark',
                content_css: 'dark',
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'wordcount', 'paste'
                ],
                toolbar: 'undo redo | formatselect | bold italic underline strikethrough | ' +
                    'forecolor backcolor | alignleft aligncenter alignright alignjustify | ' +
                    'bullist numlist outdent indent | link image media | removeformat code fullscreen',
                paste_as_text: false,
                paste_retain_style_properties: 'color font-size font-weight font-style text-decoration',
                paste_word_valid_elements: 'b,strong,i,em,h1,h2,h3,h4,h5,h6,p,ul,ol,li,a[href],span[style],div[align]',
                paste_webkit_styles: 'color font-size font-weight font-style',
                paste_merge_formats: true,
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial; font-size: 16px; line-height: 1.6; color: #e2e8f0; background-color: #1e293b; } ' +
                    'p { margin: 0 0 1rem 0; } ' +
                    'h1 { font-size: 2.25rem; font-weight: 700; margin: 2rem 0 1.5rem; color: #60a5fa; } ' +
                    'h2 { font-size: 1.875rem; font-weight: 700; margin: 1.75rem 0 1.25rem; color: #60a5fa; } ' +
                    'h3 { font-size: 1.5rem; font-weight: 700; margin: 1.5rem 0 1rem; color: #60a5fa; }',
                automatic_uploads: false,
                link_default_target: '_blank',
                link_title: false,
                verify_html: false,
                mobile: {
                    theme: 'mobile',
                    plugins: ['autosave', 'lists', 'autolink'],
                    toolbar: ['undo', 'bold', 'italic', 'styleselect']
                },
                setup: function (editor) {
                    editor.on('init', function () {
                        console.log('TinyMCE initialized (Dark Mode)');
                    });
                }
            });

            // Image preview
            const featuredImageInput = document.getElementById('gambar');
            const imagePreview = document.getElementById('imagePreview');
            const previewImage = document.getElementById('previewImage');

            if (featuredImageInput) {
                featuredImageInput.addEventListener('change', function (e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            previewImage.src = e.target.result;
                            imagePreview.classList.remove('hidden');
                        };
                        reader.readAsDataURL(file);
                    } else {
                        imagePreview.classList.add('hidden');
                    }
                });
            }
        });
    </script>

    <style>
        .tox-tinymce {
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 0.5rem !important;
        }

        .tox-tinymce:focus-within {
            border-color: #60a5fa !important;
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.2) !important;
        }

        @media (max-width: 768px) {
            .tox-tinymce {
                height: 400px !important;
            }
        }
    </style>
@endsection