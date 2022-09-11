@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="card mt-2">
        <div class="card-body mt-3">
            <h4>Dashboard</h4>
            <hr>
        </div>

    {{-- <div class="row g-3 p-1 text-center">
        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/barang"><h5>{{ $barang}} Barang</h5> <i class="fa fa-boxes"></i></a>
                <br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/kategori"><h5>{{ $kategori}} Kategori</h5> <i class="fa fa-tags"></i></a>
                <br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/supplier"><h5>{{ $supplier }} Supplier</h5> <i class="fa fa-truck"></i></a>
                <br><br>
            </div>
        </div>
    </div>

    <div class="row g-3 p-1 text-center">
        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/pembeli"><h5>{{ $pembeli }} Pembeli</h5> <i class="fa fa-person"></i></a>
                <br><br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/pembelian"><h5>{{ $pembelian }} Pembelian</h5> <i class="fa fa-cart-shopping"></i></a>
                <br><br><br>
            </div>
        </div>

        <div class="col-4">
            <div class="card p-3 border text-bg-light mt-2">
                <br><br>
                <a class="nav-link" href="/penjualan"><h5>{{ $penjualan }} Penjualan</h5> <i class="fa fa-basket-shopping"></i></a>
                <br><br><br>
            </div>
        </div>
    </div> --}}

        <div class="row card-body m-2">
            <div class="feature col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="feature-icon d-inline-flex align-items-center shadow-primary text-bg-primary p-5 fs-1">
                    <i class="fa-solid fa-box"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h4 class="mb-0 opacity-50">Barang</h4>
                            <h5 class="mb-0">{{ $barang }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="feature col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="feature-icon d-inline-flex align-items-center shadow-primary text-bg-primary p-5 fs-1">
                    <i class="fa-solid fa-tags"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h4 class="mb-0 opacity-50">Kategori</h4>
                            <h5 class="mb-0">{{ $kategori }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="feature-col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="feature-icon d-inline-flex align-items-center shadow-primary text-bg-primary p-5 fs-1">
                    <i class="fa-solid fa-truck"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h4 class="mb-0 opacity-50">Supplier</h4>
                            <h5 class="mb-0">{{ $supplier }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection