<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Support\Facades\Cache;

class KatalogController extends Controller
{
    const ITEMS_PER_PAGE = 12; // Jumlah item per halaman

    public function index(Request $request)
    {
        // Dapatkan parameter kategori dari URL (default: 'all')
        $kategoriAktif = $request->query('kategori', 'all');
        $halaman = $request->query('halaman', 1);

        // Cache kategori selama 1 jam
        $kategoris = Cache::remember('kategoris', 3600, function () {
            return Kategori::has('barang')
                ->withCount('barang')
                ->orderBy('nama')
                ->get();
        });

        // Inisialisasi variabel
        $katalog = [];
        $barang = null;
        $judulHalaman = 'Semua Produk';

        // Query untuk Semua Barang
        if ($kategoriAktif === 'all') {
            $barang = Barang::with('kategori')
                ->latest()
                ->paginate(self::ITEMS_PER_PAGE, ['*'], 'halaman')
                ->withQueryString();
            $judulHalaman = 'Semua Produk';
        } 
        // Query untuk Produk Unggulan
        elseif ($kategoriAktif === 'unggulan') {
            $barang = Barang::where('unggulan', true)
                ->with('kategori')
                ->latest()
                ->paginate(self::ITEMS_PER_PAGE, ['*'], 'halaman')
                ->withQueryString();
            $judulHalaman = 'Produk Unggulan';
        } 
        // Query untuk Kategori Tertentu
        else {
            $kategori = Kategori::findOrFail($kategoriAktif);
            $barang = Barang::where('kategori_id', $kategoriAktif)
                ->with('kategori')
                ->latest()
                ->paginate(self::ITEMS_PER_PAGE, ['*'], 'halaman')
                ->withQueryString();
            $judulHalaman = $kategori->nama;
        }

        return view('katalog', compact('kategoris', 'barang', 'kategoriAktif', 'judulHalaman'));
    }
}