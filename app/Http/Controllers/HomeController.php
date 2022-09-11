<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Pembeli;
use App\Models\Pembelian;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $barang = Barang::all()->count();
        $kategori = Kategori::all()->count();
        $supplier = Supplier::all()->count();
        $pembeli = Pembeli::all()->count();
        $pembelian = Pembelian::all()->count();
        $penjualan = Penjualan::all()->count();

        return view('home', compact('barang', 'kategori', 'supplier', 'pembeli', 'pembelian', 'penjualan'));
    }
}
