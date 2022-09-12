<div class="main-sidebar sidebar-style-2 d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <aside class="sidebar-wrapper">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link active" aria-current="page">
            <i class="fa-solid fa-gauge"></i>
            Dashboard
            </a>
        </li>

        <li class="mb-1">
            <i class="fa-solid fa-box-open"></i>
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
              Produk
            </button>
            <div class="collapse show" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="/barang" class="link-dark d-inline-flex text-decoration-none rounded"><i class="fa-solid fa-box"></i> Barang</a></li>
                <li><a href="/kategori" class="link-dark d-inline-flex text-decoration-none rounded"><i class="fa-solid fa-tags"></i> Kateogori</a></li>
              </ul>
            </div>
        </li>

        <li>
            <a href="/supplier" class="nav-link link-dark">
            <i class="fa-solid fa-truck"></i>
            Supplier
            </a>
        </li>

        <li>
            <a href="/pembeli" class="nav-link link-dark">
            <i class="fa-solid fa-person"></i>
            Pembeli
            </a>
        </li>

        <li>
            <a href="/pembelian" class="nav-link link-dark">
            <i class="fa-solid fa-cart-shopping"></i>
            Pembelian
            </a>
        </li>

        <li>
            <a href="/penjualan" class="nav-link link-dark">
            <i class="fa-solid fa-basket-shopping"></i>
            Penjualan
            </a>
        </li>

    </ul>
    <hr>
    {{-- <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div> --}}
    </aside>
</div>