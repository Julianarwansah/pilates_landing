@extends('layoutsadmin.app')

@section('title', 'Kategori Produk')
@section('page-title', 'Manajemen Kategori Produk')

@section('content')
    <!-- Header Section -->
    <div class="mb-6 animate-fade-in-up">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-blue-400">Kategori Produk</h2>
                <p class="text-sm theme-text-secondary mt-1">Kelola kategori dan klasifikasi produk</p>
            </div>
            <a href="{{ route('admin.kategori-produks.create') }}"
                class="inline-flex items-center justify-center px-4 py-2 bg-gradient-primary hover:shadow-lg hover:shadow-blue-500/30 text-white font-medium rounded-lg transition-all duration-300 transform hover:-translate-y-1">
                <i class="fas fa-plus mr-2"></i>
                <span>Tambah Kategori</span>
            </a>
        </div>
    </div>

    <!-- Success/Error Messages -->
    @if (session('success'))
        <div class="mb-6 bg-green-500/10 border border-green-500/50 rounded-lg p-4 shadow-sm animate-fade-in-up">
            <div class="flex items-center">
                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                <p class="text-green-500 font-medium">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="mb-6 bg-red-500/10 border border-red-500/50 rounded-lg p-4 shadow-sm animate-fade-in-up">
            <div class="flex items-center">
                <i class="fas fa-exclamation-circle text-red-500 mr-3"></i>
                <p class="text-red-500 font-medium">{{ session('error') }}</p>
            </div>
        </div>
    @endif

    <!-- Main Content Card -->
    <div
        class="bg-gradient-card backdrop-blur-sm theme-border border rounded-xl shadow-2xl overflow-hidden animate-fade-in-up delay-100">
        <!-- Desktop Table View -->
        <div class="hidden md:block overflow-x-auto">
            <table class="min-w-full divide-y theme-divide">
                <thead class="theme-bg-secondary">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold theme-text-primary uppercase tracking-wider">
                            Urutan
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold theme-text-primary uppercase tracking-wider">
                            Kategori
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold theme-text-primary uppercase tracking-wider">
                            Slug
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold theme-text-primary uppercase tracking-wider">
                            Jumlah Produk
                        </th>
                        <th class="px-6 py-4 text-right text-xs font-semibold theme-text-primary uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y theme-divide">
                    @forelse($kategoris as $kategori)
                        <tr class="hover:bg-blue-400/5 transition duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-blue-400/10 text-blue-400 font-semibold text-sm">
                                    {{ $kategori->urutan }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if ($kategori->gambar)
                                        <img class="h-12 w-12 rounded-full object-cover mr-3 theme-border border ring-2 ring-blue-400/30"
                                            src="{{ Storage::url($kategori->gambar) }}" alt="">
                                    @else
                                        <div
                                            class="h-12 w-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 mr-3 flex items-center justify-center">
                                            <i class="fas fa-box text-white"></i>
                                        </div>
                                    @endif
                                    <div class="text-sm font-semibold theme-text-primary">{{ $kategori->nama_kategori }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm theme-text-secondary">
                                {{ $kategori->slug }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-500/10 text-blue-400">
                                    <i class="fas fa-box mr-1"></i>{{ $kategori->produk_count }} Produk
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.kategori-produks.show', $kategori->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-green-500/10 hover:bg-green-500/20 text-green-500 rounded-lg transition duration-150"
                                        title="Lihat">
                                        <i class="fas fa-eye text-sm"></i>
                                    </a>
                                    <a href="{{ route('admin.kategori-produks.edit', $kategori->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-blue-500/10 hover:bg-blue-500/20 text-blue-500 rounded-lg transition duration-150"
                                        title="Edit">
                                        <i class="fas fa-edit text-sm"></i>
                                    </a>
                                    @if (auth()->user()->role === 'super_admin')
                                        <form action="{{ route('admin.kategori-produks.destroy', $kategori->id) }}" method="POST"
                                            class="inline-block"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center px-3 py-1.5 bg-red-500/10 hover:bg-red-500/20 text-red-500 rounded-lg transition duration-150"
                                                title="Hapus">
                                                <i class="fas fa-trash text-sm"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fas fa-tags text-5xl theme-text-secondary mb-4 opacity-20"></i>
                                    <p class="theme-text-secondary font-medium">Belum ada kategori produk</p>
                                    <p class="theme-text-secondary text-sm mt-1 opacity-70">Klik tombol "Tambah Kategori" untuk
                                        memulai</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="md:hidden divide-y theme-divide">
            @forelse($kategoris as $kategori)
                <div class="p-4 hover:bg-blue-400/5 transition duration-150">
                    <div class="flex items-start gap-4">
                        @if ($kategori->gambar)
                            <img class="h-16 w-16 rounded-full object-cover theme-border border ring-2 ring-blue-400/30 flex-shrink-0"
                                src="{{ Storage::url($kategori->gambar) }}" alt="">
                        @else
                            <div
                                class="h-16 w-16 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-box text-white text-xl"></i>
                            </div>
                        @endif
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-2">
                                <span
                                    class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-blue-400/10 text-blue-400 font-semibold text-xs">
                                    {{ $kategori->urutan }}
                                </span>
                                <h3 class="text-base font-semibold theme-text-primary">{{ $kategori->nama_kategori }}</h3>
                            </div>
                            <p class="text-sm theme-text-secondary mb-2">{{ $kategori->slug }}</p>
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-500/10 text-blue-400">
                                <i class="fas fa-box mr-1"></i>{{ $kategori->produk_count }} Produk
                            </span>
                            <div class="flex gap-2 mt-3">
                                <a href="{{ route('admin.kategori-produks.show', $kategori->id) }}"
                                    class="flex-1 inline-flex items-center justify-center px-3 py-2 bg-green-500/10 hover:bg-green-500/20 text-green-500 rounded-lg transition text-sm font-medium">
                                    <i class="fas fa-eye mr-2"></i>Lihat
                                </a>
                                <a href="{{ route('admin.kategori-produks.edit', $kategori->id) }}"
                                    class="flex-1 inline-flex items-center justify-center px-3 py-2 bg-blue-500/10 hover:bg-blue-500/20 text-blue-500 rounded-lg transition text-sm font-medium">
                                    <i class="fas fa-edit mr-2"></i>Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="p-12 text-center">
                    <i class="fas fa-tags text-5xl theme-text-secondary mb-4 opacity-20"></i>
                    <p class="theme-text-secondary font-medium">Belum ada kategori produk</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if ($kategoris->hasPages())
            <div class="px-6 py-4 theme-bg-secondary theme-border border-t border-gray-200">
                {{ $kategoris->links() }}
            </div>
        @endif
    </div>
@endsection