<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin')?>" class="brand-link">
      <img src="<?= base_url() ?>assets/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KREASI INDAH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/ft-admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama_user') ?></a>
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

               
          <li class="nav-item">
            <a href="<?= base_url('admin') ?>" class="nav-link <?= base_url('kategori') ?> <?php if(uri_string(1) == 'admin'){echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
                  <a href="<?= base_url('barang') ?>"  class="nav-link ?> <?php if(uri_string(1) == 'barang'){echo "active"; } ?>" class="nav-link">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>
                      Barang
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?= base_url('kategori') ?>" class="nav-link <?= base_url('kategori') ?> <?php if(uri_string(1) == 'kategori'){echo "active"; } ?>">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                      Kategori Barang
                    </p>
                  </a>
                </li>
          
          <li class="nav-item">
            <a href="<?= base_url('admin/pesanan_masuk') ?>" class="nav-link <?php if(uri_string(1) == 'admin/pesanan_masuk'){echo "active"; } ?>">
              <i class="nav-icon fas fa-download"></i>
              <p>
              Pesanan Masuk
              </p>
            </a>
          </li>

          <li class="nav-item">
                  <a href="kasir" class="nav-link <?php if(uri_string(1) == 'kasir'){echo "active"; } ?>">
                    <i class="nav-icon fas fa-inbox"></i>
                    <p>
                      Kasir Ofline
                    </p>
                  </a>
                </li>
          
          <li class="nav-item">
            <a href="<?= base_url('laporan') ?>" class="nav-link <?php if(uri_string(1) == 'laporan'){echo "active"; } ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Laporan Penjualan
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?= base_url('data_pelanggan') ?>" class="nav-link <?php if(uri_string(1) == 'data_pelanggan'){echo "active"; } ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pelanggan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('user') ?>" class="nav-link <?php if(uri_string(1) == 'user'){echo "active"; } ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/lokasi_toko') ?>" class="nav-link <?php if(uri_string(1) == 'admin/lokasi_toko'){echo "active"; } ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Alamat Toko
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('auth/logout_user') ?>" class="nav-link">
              <i class="nav-icon fas fa-angle-double-left"></i>
              <p>
                LogOut
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">