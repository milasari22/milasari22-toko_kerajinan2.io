 <!-- Default box -->
 <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="<?= base_url('assets/gambar/'.$barang->gambar) ?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/'.$barang->gambar) ?>" alt="Product Image"></div>
                <?php  foreach ($gambar as $key => $value) { ?>
                   <div class="product-image-thumb" ><img src="<?= base_url('assets/gambarbarang/'.$value->gambar) ?>" alt="Product Image"></div>
                <?php } ?>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?= $barang->nama_barang ?></h3><hr>
              <h5><?= $barang->nama_kategori ?></h5><hr>
              <p><?= $barang->deskripsi ?></p>
              <hr>


              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp. <?= number_format($barang->harga,0) ?>.00
                </h2>
              </div><hr>

              <?php 
                echo form_open('belanja/add');
                echo form_hidden('id', $barang->id_barang);
                echo form_hidden('price', $barang->harga);
                echo form_hidden('name', $barang->nama_barang);
                echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
              ?>

              <div>
              <h4 class="mt-3">Variasi Ukuran <small>Silahkan pilih salah satu</small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                  <span class="text-xl">S</span>
                  <br>
                  Kecil
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                  <span class="text-xl">M</span>
                  <br>
                  Sedang
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                  <span class="text-xl">L</span>
                  <br>
                  Besar
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                  <span class="text-xl">XL</span>
                  <br>
                  Jumbo
                </label>
              </div>

              <div class="mt-4">
                <div class="row">
                  <div class="col-sm-2">
                    <input type="number" name="qty" class="form-control" value="1" min="1">
                  </div>
                  <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary btn-flat swalDefaultSuccess">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Add to Cart
                    </button>
                    <a href="<?= base_url('belanja/chekout')?>" class="btn btn-success btn-flat"><i class="fas fa-inbox"></i>  Check Out</a>
                  </div>
                </div>
              </div>

                  <?php echo form_close(); ?>

            </div>
          </div>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
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
</script>