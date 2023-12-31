 
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-orange">
    <div class="container ">
      <img src="<?= base_url() ?>assets/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <a href="#" class="navbar-brand">
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        
      </button>

      <ul class="navbar-nav">
  <li class="nav-item">
    <a style="margin-right: 10px;" class="btn btn-outline-light" href="<?= base_url() ?>" class="nav-link">Home</a>
  </li>
  <?php $kategori = $this->m_home->get_all_data_kategori() ?>

  <li class="nav-item">
    <a style="margin-right: 10px;" class="btn btn-outline-light" href="<?= base_url("#tentang") ?>" class="nav-link">Tentang</a>
  </li>
  
  <li class="nav-item">
    <a style="margin-right: 10px;" class="btn btn-outline-light" href="<?= base_url("#footer_depan") ?>" class="nav-link">Kontak</a>
  </li>

  <li class="nav-item dropdown">
    <a style="margin-right: 10px;" id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle btn btn-outline-light">Kategori</a>
    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
      <?php foreach ($kategori as $key => $value) { ?>
        <li><a href="<?= base_url('home/kategori/' .$value->id_kategori) ?>" class="dropdown-item"><?= $value->nama_kategori ?> </a></li>
      <?php } ?>
    </ul>
  </li>
</ul>


      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          
              <?php if ($this->session->userdata('nama_pelanggan') == "") { ?>
                <a class="nav-link btn btn-outline-light" href="<?= base_url('pelanggan/login') ?>" >
                  <span class="brand-text font-weight-light">Login/Register</span>
                </a>

              <?php } else { ?>
                <a style="margin-right: 10px;" class="btn btn-outline-light"data-toggle="dropdown" href="#">
                  <span class="brand-text font-weight-light"><?= $this->session->userdata('nama_pelanggan') ?></span>
                </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('pelanggan/akun') ?>" class="dropdown-item">
                <i class="fas fa-user mr-2"></i>Akun Saya
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('pesanan_saya') ?>" class="dropdown-item">
                <i class="fas fa-shopping-cart mr-2"></i>Pesanan Saya
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('pelanggan/logout')?>" class="dropdown-item dropdown-footer">Keluar</a>
            </div>
          <?php } ?>
        </li>

        <?php
        $keranjang = $this->cart->contents(); 
        $jml_item = 0;
        foreach ($keranjang as $key => $value) {
          $jml_item = $jml_item + $value['qty'];
        }
        ?>

          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-shopping-cart"></i>
              <span class="badge badge-danger navbar-badge"><?= $jml_item ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <?php if (empty($keranjang)) { ?>
                <a href="#" class="dropdown-item">
                  <p>Keranjang Belanja Anda Kosong</p>
                </a>
              <?php }else{
                foreach ($keranjang as $key => $value) { 
                    $barang = $this->m_home->detail_barang($value['id']);
                  ?>
                  <!-- Barang Start -->
              <a href="#" class="dropdown-item">
                <div class="media">
                  <img src="<?= base_url('assets/gambar/' .$barang->gambar) ?>" alt="User Avatar" class="img-size-50 mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      <?= $value['name'] ?>
                    </h3>
                    <p class="text-sm"><?= $value['qty'] ?> x Rp. <?= number_format($value['price'],0 )?></p>
                    <p class="text-sm text-muted">
                      <i class="fa fa-calculator"></i>Rp. <?= $this->cart->format_number($value['subtotal']) ; ?>
                    </p>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <?php } ?>
                <!-- Barang End -->

              <a href="#" class="dropdown-item">
                <div class="media">
                  <div class="media-body">
                  <tr>
                    <td colspan="2"> </td>
                    <td class="right"><strong>Total :</strong></td>
                    <td class="right">Rp. <?= $this->cart->format_number($this->cart->total()); ?></td>
                  </tr>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('belanja') ?>" class="dropdown-item dropdown-footer">Lihat Keranjang</a>
              <a href="<?= base_url('belanja/chekout')?>" class="dropdown-item dropdown-footer">Beli Sekarang </a>
              <?php } ?>

            </div>
          </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->
  