@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <strong>Dashboard </strong>| Selamat datang di dashboard TokoKu
        </div>
    </div>

    <div class="row g-3 p-1 text-center">
        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/barang"><h5>10 Barang</h5> <i class="fa fa-boxes"></i></a>
                <br><br>
            </div>
        </div>
    
        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/kategori"><h5>15 Kategori</h5> <i class="fa fa-tags"></i></a>
                <br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/supplier"><h5>5 Supplier</h5> <i class="fa fa-truck"></i></a>
                <br><br>
            </div>
        </div>
    </div>

    <div class="row g-3 p-1 text-center">
        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/pembeli"><h5>5 Pembeli</h5> <i class="fa fa-person"></i></a>
                <br><br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/pembelian"><h5>5 Pembelian</h5> <i class="fa fa-cart-shopping"></i></a>
                <br><br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/penjualan"><h5>5 Penjualan</h5> <i class="fa fa-basket-shopping"></i></a>
                <br><br><br>
            </div>
        </div>
    </div>
@endsection