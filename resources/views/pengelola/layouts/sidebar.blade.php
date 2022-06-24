 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('pengelola') }}" class="brand-link">
        <img src="{{ asset('assets/admin/img/blanjaloka-white.png') }}" alt="AdminLTE Logo"
            class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light text-bold"><b>Pengelola Pasar</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/img/avatar.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->nama_pengelola }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('pengelola') }}"
                        class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
            @if ($title == 'Data Admin' || $title == 'Data Customers' || $title == 'Data Pedagang' || $title == 'Data Driver' || $title == 'Data Pemda')
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                    @else
                <li class="nav-item">
                    <a href="#" class="nav-link">
            @endif
            <i class="fas fa-users nav-icon"></i>
            <p>
                Modul Users
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ url('pengelola/users/pedagang') }}"
                        class="nav-link {{ $title === 'Data Pedagang' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pedagang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pengelola/users/customer') }}"
                        class="nav-link {{ $title === 'Data Customer' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customer</p>
                    </a>
                </li>
            </ul>
            </li>
                @if ($title == 'Data Toko' || $title == 'Sewa Toko')
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                        @else
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                @endif
                <i class="fas fa-house-user nav-icon"></i>
                <p>
                    Modul Toko
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('pengelola/toko') }}"
                            class="nav-link {{ $title === 'Data Toko' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Toko</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('pengelola/sewatoko') }}"
                            class="nav-link {{ $title === 'Sewa Toko' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sewa Toko</p>
                        </a>
                    </li>
                </ul>
            </li>

            @if ($title == 'Data Produk' || $title == 'Kategori Produk')
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                        @else
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                @endif
                <i class="fas fa-shopping-bag nav-icon"></i>
                <p>
                    Modul Produk
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('pengelola/produk/kategori') }}"
                            class="nav-link {{ $title === 'Kategori Produk' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kategori Produk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('pengelola/produk') }}"
                            class="nav-link {{ $title === 'Data Produk' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Produk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('pengelola/stok') }}"
                            class="nav-link {{ $title === 'Stok Gudang' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Stok Gudang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('pengelola/penjualan') }}"
                            class="nav-link {{ $title === 'Penjualan Produk' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Penjualan Produk</p>
                        </a>
                    </li>
                </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('logout') }}" class="nav-link">
                        <i class="fas fa-door-open nav-icon"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
