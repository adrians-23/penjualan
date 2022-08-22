<?php

use Illuminate\Support\Facades\Route;

// Routes Halaman Utama
Route::get('/', function () {
    return view('layout.app');
});

// Routes Barang
Route::get('/barang', function () {
    return view('barang.index');
});

//  Routes Ketegori
Route::get('/kategori', function () {
    return view('kategori.index');
});

// Routes Supplier
Route::get('/supplier', function () {
    return view('supplier.index');
});

// Routes Pembeli
Route::get('/pembeli', function () {
    return view('pembeli.index');
});

// Routes Pembelian
Route::get('/pembelian', function () {
    return view('pembelian.index');
});

// Routes Penjualan
Route::get('/penjualan', function () {
    return view('penjualan.index');
});