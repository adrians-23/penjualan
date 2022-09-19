<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    BarangController,
    KategoriController,
    SupplierController,
    PembeliController,
    PembelianController,
    PenjualanController,
    HomeController
};

Route::middleware(['auth'])->group(function(){
    // Routes Halaman Utama
    Route::resource('/', HomeController::class);
    // Route::get('/', function () {
    //     return view('home');
    // });

    // Routes Barang
    Route::resource('/barang', BarangController::class);
    Route::get('/barang/edit/{id}', [BarangController::class, 'edit']);
    Route::get('/barang/hapus/{id}', [BarangController::class, 'destroy']);
    // Route::get('/barang', function () {
    //     return view('barang.index');
    // });

    //  Routes Ketegori
    Route::resource('/kategori', KategoriController::class);
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
    Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);
    // Route::get('/kategori', function () {
    //     return view('kategori.index');
    // });

    // Routes Supplier
    Route::resource('/supplier', SupplierController::class);
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit']);
    Route::get('/supplier/hapus/{id}', [SupplierController::class, 'destroy']);
    // Route::get('/supplier', function () {
    //     return view('supplier.index');
    // });

    // Routes Pembeli
    Route::resource('/pembeli', PembeliController::class);
    Route::get('/pembeli/edit/{id}', [PembeliController::class, 'edit']);
    Route::get('/pembeli/hapus/{id}', [PembeliController::class, 'destroy']);
    // Route::get('/pembeli', function () {
    //     return view('pembeli.index');
    // });

    // Routes Pembelian
    Route::resource('/pembelian', PembelianController::class);
    Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);
    Route::get('/pembelian/hapus/{id}', [PembelianController::class, 'destroy']);
    // Route::get('/pembelian', function () {
    //     return view('pembelian.index');
    // });

    // Routes Penjualan
    Route::resource('/penjualan', PenjualanController::class);
    Route::get('/penjualan/edit/{id}', [PenjualanController::class, 'edit']);
    Route::get('/penjualan/hapus/{id}', [PenjualanController::class, 'destroy']);
    // Route::get('/penjualan', function () {
    //     return view('penjualan.index');
    // });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
