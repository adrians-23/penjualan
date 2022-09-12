{{-- navbar --}}
<nav class="navbar-bg"></nav>
<nav class="navbar navbar-expand-lg bg-light" style="height: 70px; border-radius: 0px 0px 10px 10px;">
    <div class="form-inline mr-auto container-fluid">
        <a class="navbar-brand" href="/"><i class="fa-solid fa-shop"></i> TokoKu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#"class="nav-link nav-link-lg">
                <figure class="avatar mr-2 avatar-sm">
                    <i class="fa fa-user"></i>
                </figure>
            </li>
        </ul> --}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                {{-- Menu Database --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/barang">Barang</a></li>
                        <li><a class="dropdown-item" href="/kategori">Kategori</a></li>
                        <li><a class="dropdown-item" href="/supplier">Supplier</a></li>
                        <li><a class="dropdown-item" href="/pembeli">Pembeli</a></li>
                        <li><a class="dropdown-item" href="/pembelian">Pembelian</a></li>
                        <li><a class="dropdown-item" href="/penjualan">Penjualan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">About Us</a></li>
                    </ul>
                </li> --}}
                {{-- End Menu Database --}}

                {{-- Navbar Menu --}}
                <li class="nav-item">
                    <a class="nav-link" href="/barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kategori">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/supplier">Supplier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pembeli">Pembeli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pembelian">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan">Penjualan</a>
                </li>
                {{-- End Navbar Menu --}}

            </ul>
        </div>
    </div>
</nav>