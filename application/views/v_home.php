<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="<?= base_url() ?>assets/bg-10.jpeg" class="d-block w-100" >
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?= base_url() ?>assets/slider-1.jpeg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url() ?>assets/slider-2.jpeg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

<!--About--->
<br><div class="content">
      <div class="container">
            <div>
              <div id="tentang"><br><br>
                <!-- <h1 class="text-center"><b>Tentang</b><i class="text-orange">Kami</i></h1> -->
              </div>
              
              <div class="row">
    <div class="col-lg-6">
        <div class="card-body form-group">
            <img class="img-fluid rounded" src="<?= base_url() ?>assets/des2.jpeg" alt="Beautiful Background">
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-body form-group">
            <h4 class="text-grey">Kenapa Harus Kreasi Indah?</h4>
            <p class="lead">
                Karena Toko kami merupakan destinasi terbaik bagi pecinta seni dan
                orang-orang yang menghargai keunikan produk-produk handmade
                berkualitas tinggi. Dengan keanggunan dan inovasi, kami menghadirkan
                beragam kerajinan tangan dari para pengrajin berbakat dan
                berpengalaman.
            </p>
            <p class="text-muted">
                Di Toko kami terdapat banyak hasil karya seni kerajinan yang kami
                jual. Mulai dari bambu, kertas, batok kelapa, totol bekas, cangkang
                telu, pelepah pisang, tanah liat dan masih banyak lagi.
            </p>
        </div>
    </div>
</div>


<!--produk kami---><!-- Bagian Header Produk Kami -->
<br><br><br><div id="produk_kami" class="container text-center mt-5">
    <h1><b>Produk</b><i class="text-orange"> <b>Kami</b></i></h1>
    <p class="lead">
        Di toko kami, Anda memiliki dua opsi: ambil di toko dan pesan antar. <br>
        Pesan terlebih dahulu jika Anda berada jauh dari lokasi toko kami. <br>
        Jika Anda memiliki permintaan khusus terkait ukuran atau warna, <a href="https://api.whatsapp.com/send?phone=628123456789" target="_blank">Hubungi Kami di WhatsApp</a>.
    </p>
</div><br><br>
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
                    <div class="col-sm-2">
                      <div class="text-left">
                        <h5><span class="badge bg-danger">Rp. <?= number_format($value->harga, 0) ?></span></h5>
                      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="text-right">
                        <a href="<?= base_url('home/detail_barang/' .$value->id_barang)?>" class="btn btn-sm btn-warning">
                          <i class="fas fa-eye"></i>
                        </a>
                        <button type="submit" class="btn btn-sm btn-primary swalDefaultSuccess">
                          <i class="fas fa-cart-plus">Keranjang</i>
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


  <!-- Gaya CSS kustom -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      color: #343a40;
      margin: 0;
      padding: 0;
    }

    /* Carousel */
    #carouselExampleDark {
      border-radius: 10px;
      overflow: hidden;
    }

    .carousel-inner img {
      width: 100%;
      height: auto;
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
    }

    /* About Section */
    #tentang {
      text-align: center;
      padding: 50px 20px;
    }

    /* Produk Section */
    #produk_kami {
      text-align: center;
      padding: 50px 20px;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease;
    }

    .card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Add more styles as needed */
  </style>
