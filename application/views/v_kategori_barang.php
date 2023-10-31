<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="<?= base_url() ?>assets/bg-10.jpeg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
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
</div><br><br>

<div class="card-orange card-outline">
<div class="card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">

          <?php foreach ($barang as $key => $value) { ?>

          <div class="col-sm-4 d-flex align-items-stretch">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                      <h2 class="lead"><b><?= $value->nama_barang ?></b></h2>
                      <p class="text-muted text-sm"><b>Kategori: </b> <?= $value->nama_kategori ?> </p>
                </div>
                <div class="card-body pt-0">
                  <div class="row">

                    <div class="col-12 text-center">
                      <img src="<?= base_url('assets/gambar/'.$value->gambar) ?>" alt="user-avatar" class="img-fluid" width="200px">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="text-left">
                        <h5><span class="badge bg-primary">Rp. <?= number_format($value->harga, 0) ?></span></h5>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="text-right">
                        <a href="#" class="btn btn-sm btn-success">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-primary">
                          <i class="fas fa-cart-plus">Keranjang</i>
                        </a>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>

            <?php } ?>

          </div>
        </div>
</div>
</div>
