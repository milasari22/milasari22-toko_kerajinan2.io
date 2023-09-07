<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="<?php base_url() ?>assets/slider1.jpg">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="<?php base_url() ?>assets/slider2.jpg">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="<?php base_url() ?>assets/slider3.jpg">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="<?php base_url() ?>assets/slider4.jpg">
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-custom-icon" aria-hidden="true">
        <i class="fas fa-chevron-left"></i>
    </span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-custom-icon" aria-hidden="true">
        <i class="fas fa-chevron-right"></i>
    </span>
    <span class="sr-only">Next</span>
    </a>
</div>


<div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">

          <?php foreach ($barang as $key => $value) { ?>

          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                      <h2 class="lead"><b><?= $value->nama_barang ?></b></h2>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">

                      <p class="text-muted text-sm"><b>Kategori: </b> <?= $value->nama_kategori ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><Rp. class="fa-li"><i class="fas fa-lg fa-file-invoice-dollar"></i><span class="badge bg-primary"><?= number_format($value->harga, 0) ?></span></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?php base_url() ?>template/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>

          </div>
        </div>
</div>