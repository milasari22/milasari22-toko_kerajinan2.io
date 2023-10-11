<div id="carouselExampleDark" class="carousel carousel-light">
  <img src="<?= base_url() ?>assets/bg-2.jpeg" width="1150px" height="470px">
  <div class="carousel-caption d-md-block text-dark" >
        <h5 class="text-orange"><u><br>TOKO KREASI INDAH <br></u></h5>
        <p>Selamat datang di toko kerajinan "Kreasi Indah",
        </p>
        <p> tempat di mana seni, kreativitas, dan keindahan bertemu.</p><a href="#produk_kami" class="btn btn-outline-warning">Belanja</a>
  </div>
      <br>
</div>

<!--About--->
<br><div class="content">
      <div class="container">
            <div>
              <div id="tentang"><br><br><br>
                <h1 class="text-center"><b>Tentang</b><i class="text-orange">Kami</i></h1>
              </div>
              
        <div class="row">
          <div class="col-lg-6">
              <div class="card-body form-group">
                <img class="d-block w-100" src="<?php base_url() ?>assets/des1.jpeg">
              </div>
            </div>
            
          <div class="col-lg-6">
              <div class="card-body form-group"><br>
                <h4>Kenapa Harus Kreasi Indah?</h4>
                <p class="card-text-">
                  Karena Toko kami merupakan destinasi terbaik bagi pecinta seni dan
                  orang-orang yang menghargai keunikan produk-produk handmade
                  berkualitas tinggi. Dengan keanggunan dan inovasi, kami menghadirkan
                  beragam kerajinan tangan dari para pengrajin berbakat dan
                  berpengalaman.
                </p>
                <p>
                Di Toko kami terdapat banyak hasil karya seni kerajinan yang kami
                jual. Mulai dari bambu, kertas, batok kelapa, totol bekas, cangkang
                telu, pelepah pisang, tanah liat dan masih banyak lagi.
                </p>
              </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!--produk kami--->
<br><br><br><br  id="produk_kami" ><br><h1 class="text-center"><b>Produk</b><i class="text-orange"> <b>Kami</b></i></h1>
<div class="card-solid">
        <div class="card-body pb-0">
          <div class="row">
          <?php foreach ($barang as $key => $value) { ?>
          <div class="col-sm-4 text-center">
            <?php 
            echo form_open('belanja/add');
            echo form_hidden('id', $value->id_barang);
            echo form_hidden('qty', 1);
            echo form_hidden('price', $value->harga);
            echo form_hidden('name', $value->nama_barang);
            echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
            ?>
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                      <h2 class="lead"><b><?= $value->nama_barang ?></b></h2>
                      <p class="text-muted text-sm"><b>Kategori: </b> <?= $value->nama_kategori ?> </p>
                </div>
                <div class="card-body pt-0">
                  <div class="row">

                    <div class="col-12 text-center">
                      <img src="<?= base_url('assets/gambar/'.$value->gambar) ?>"width="200px" height="250px">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="text-left">
                        <h5><span class="badge bg-success">Rp. <?= number_format($value->harga, 0) ?></span></h5>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="text-right">
                        <a href="<?= base_url('home/detail_barang/' .$value->id_barang)?>" class="btn btn-sm btn-warning">
                          <i class="fas fa-eye"></i>
                        </a>
                        <button type="submit" class="btn btn-sm btn-primary swalDefaultSuccess">
                          <i class="fas fa-cart-plus">Add</i>
                        </button>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
              <?php echo form_close(); ?>
            </div>

            <?php } ?>

          </div>
        </div>
</div>

<script src="<?=base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Barang Berhasil Ditambahkan Ke Keranjang!!!.'
      })
    });
  });
</script><br><br>


<!--Galeri kami--->
<br><br><br><br  id="produk_kami" ><br><h1 class="text-center"><b>Galeri</b><i class="text-orange"> <b>Toko</b></i></h1>
<div class="card-solid">
          <div class="col-12">
              <div class="card-body">
                <div>
                  <div class="filter-container p-0 row">
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="<?= base_url() ?>assets/bg-2.jpeg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 2 - black">
                        <img src="<?= base_url() ?>assets/bg-2.jpeg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 3 - red">
                        <img src="<?= base_url() ?>assets/bg-2.jpeg" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 4 - red">
                        <img src="<?= base_url() ?>assets/bg-2.jpeg" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 5 - black">
                        <img src="<?= base_url() ?>assets/bg-2.jpeg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 6 - white">
                        <img src="<?= base_url() ?>assets/bg-2.jpeg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 7 - white">
                        <img src="<?= base_url() ?>assets/bg-2.jpeg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 8 - black">
                        <img src="<?= base_url() ?>assets/bg-2.jpeg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 9 - red">
                        <img src="<?= base_url() ?>assets/slider-1.jpeg" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 10 - white">
                        <img src="<?= base_url() ?>assets/slider-2.jpeg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 11 - white">
                        <img src="<?= base_url() ?>assets/slider-3.jpeg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="assets/bg-2.jpeg" data-toggle="lightbox" data-title="sample 12 - black">
                        <img src="<?= base_url() ?>assets/slider-4.jpeg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          