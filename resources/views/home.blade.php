@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="card mt-2">
        <div class="card-body mt-3">
            <h2>Dashboard</h2>
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

        <div class="row card-body m-2 g-2">
            <div class="feature col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="card feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 px-4">
                    <i class="fa-solid fa-box"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="mx-2">
                            <h4 class="opacity-75">Barang</h4>
                            <h5>{{ $barang }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="feature col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="card feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 px-4">
                    <i class="fa-solid fa-tags"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="mx-2">
                            <h4 class="opacity-75">Kategori</h4>
                            <h5>{{ $kategori }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="feature-col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="card feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 px-4">
                    <i class="fa-solid fa-truck"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="mx-2">
                            <h4 class="opacity-75">Supplier</h4>
                            <h5>{{ $supplier }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="row card-body m-2 g-2">
            <div class="feature col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="card feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 px-4">
                    <i class="fa-solid fa-person"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="mx-2">
                            <h4 class="opacity-75">Pembeli</h4>
                            <h5>{{ $pembeli }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="feature col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="card feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 px-4">
                    <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="mx-2">
                            <h4 class="opacity-75">Pembelian</h4>
                            <h5>{{ $pembelian }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="feature-col col-4">
                <a href="#" class="list-group-item list-group-item-action bg-gradient d-flex gap-3">
                    <div class="card feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 px-4">
                    <i class="fa-solid fa-basket-shopping"></i>
                    </div>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="mx-2">
                            <h4 class="opacity-75">Penjualan</h4>
                            <h5>{{ $penjualan }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection