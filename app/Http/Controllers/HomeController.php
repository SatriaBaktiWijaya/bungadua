<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;  
use App\Models\Banner;
class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        $barangUnggulan = Barang::take(4)->get();
        $barangBaru = Barang::latest()->take(4)->get();
        return view('home', compact('barangUnggulan', 'barangBaru', 'banner'));
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang', compact('barang'));
    }


}
