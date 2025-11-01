<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', function () {
    $produk = [
        ['kode' => 'BRG001', 'nama' => 'Pena', 'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat tulis', 'harga' => 15000],
    ];

    return view('produk', compact('produk'));
});

Route::get('/produk/tambah', function () {
    return view('tambahproduk'); 
})->name('produk.tambah');

Route::get('/produk/tambah', function () {
    $jenis_produk = ['Alat tulis', 'Elektronik', 'Sembako','Pakaian','Lain-lain',];
    return view('tambahproduk', compact('jenis_produk')); 
})->name('produk.tambah');

