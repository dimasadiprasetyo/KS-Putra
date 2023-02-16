<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">KS PROPERTY</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dasboard.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fas fa-desktop"></i>
              <p>
                Data Master
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('kategori.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori Kavling</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('subkategori.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SubKategori Kavling</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('datakavling.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kavling</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('metodepembayaran.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Metode Pembayaran</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('lamaangsuran.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lama Angsuran</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-server"></i>
              <p>
                Data Laporan
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Angsuran</p>
                </a>
              </li>
            </ul> --}}
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Tunai</p>
                </a>
              </li>
            </ul> --}}
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-user-friends"></i>
              <p>
                Data Pengguna
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('datapimpinan.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pimpinan</p>
                </a>
              </li>
            </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('datapembeli.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pembeli</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('datamarketing.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Marketing</p>
                  </a>
                </li>
              </ul>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
              <p>
                Data Penjualan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('penjualankavling.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan Angsuran</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('penjualantunai.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan Tunai</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-coins"></i>
              <p>
                Data Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nama Lengkap</p>
                </a>
              </li>
            </ul> --}}
          </li>
         
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-sign-out-alt"> LOG OUT</i>
            </a>
          </li>
      </nav>
    <!-- /.sidebar-menu -->
  </div>