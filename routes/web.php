<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');

Route::get('/barang/{id}', [HomeController::class, 'show'])->name('barang.show');
