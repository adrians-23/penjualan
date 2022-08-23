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
                <h5>10 Barang</h5> <i class="fa fa-boxes"></i>
                <br><br>
            </div>
        </div>
    
        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <h5>15 Kategori</h5> <i class="fa fa-tags"></i>
                <br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <h5>5 Supplier</h5> <i class="fa fa-truck"></i>
                <br><br>
            </div>
        </div>
    </div>

    <div class="row g-3 p-1 text-center">
        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <h5>5 Pembeli</h5> <i class="fa fa-person"></i>
                <br><br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <h5>5 Pembelian</h5> <i class="fa fa-cart-shopping"></i>
                <br><br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <h5>5 Penjualan</h5> <i class="fa fa-basket-shopping"></i>
                <br><br><br>
            </div>
        </div>
    </div>
@endsection