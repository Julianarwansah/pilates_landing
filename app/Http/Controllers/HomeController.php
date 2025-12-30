<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Models\Artikel;
use App\Models\Testimoni;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch products from external API with caching (10 minutes)
        $products = Cache::remember('pilates_products', 600, function () {
            try {
                $response = Http::timeout(10)->get('https://joulwinn.com/api/products', [
                    'nama' => 'Pilates', // Filter by product name prefix
                    'per_page' => 50 // Get more products for landing page
                ]);

                if ($response->successful()) {
                    $data = $response->json();
                    return collect($data['data'] ?? [])->map(function ($product) {
                        // Transform API response to match view expectations
                        return (object) [
                            'id' => $product['id'],
                            'nama_produk' => $product['nama'],
                            'slug' => $product['slug'],
                            'deskripsi_lengkap' => $product['deskripsi'] ?? '',
                            'gambar_utama' => $product['gambar'][0]['url'] ?? null,
                            'kategori' => $product['kategori'] ?? null,
                            'brand' => $product['brand'] ?? null,
                            'created_at' => $product['created_at'] ?? null,
                        ];
                    });
                }

                return collect([]);
            } catch (\Exception $e) {
                // Log error and return empty collection
                \Log::error('Failed to fetch products from API: ' . $e->getMessage());
                return collect([]);
            }
        });

        // Use the same products for both featured and grid
        $featured = $products;

        // Get latest 3 published articles
        $latestArticles = Artikel::with('penulis')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->take(3)
            ->get();

        // Get latest testimonials
        $testimonials = Testimoni::latest()->take(6)->get();

        return view('pilates', compact('featured', 'products', 'latestArticles', 'testimonials'));
    }
}