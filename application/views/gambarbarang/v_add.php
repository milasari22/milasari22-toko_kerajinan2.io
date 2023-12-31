
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Gambar Barang : <?= $barang->nama_barang?></h3>

                <div class="card-tools">
                
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                    if ($this->session->flashdata('pesan')) 
                    {
                        echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>';
                        echo $this->session->flashdata('pesan');
                        echo '</h5></div>';
                    }
                ?>

                
        <?php 
                //notif form tidak boleh kosong
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i>','</h5> </div>');

                //notif Gagal Upload
                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5> </div>';
                }
        ?>
                <?php 
                //notif form tidak boleh kosong
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i>','</h5> </div>');

                //notif Gagal Upload
                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5> </div>';
                }

                echo form_open_multipart('gambarbarang/add/' .$barang->id_barang) ?>


                    <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Keterangan Gambar</label>
                            <input name="keterangan_gambar" class="form-control" placeholder="Keterangan Gambar" value="<?= set_value('keterangan_gambar') ?>">
                        </div>
                    </div>    

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Gambar Barang</label>
                            <input type="file" name="gambar" class="form-control" id="preview_gambar" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <img src="<?= base_url('assets/gambar/nofoto.jpg') ?>" width="200px" id="gambar_load" alt="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    <a href="<?= base_url('gambarbarang') ?>" class="btn btn-info btn-sm">Kembali</a>
                </div>

                    <?php echo form_close() ?>

                <hr>
                <div class="row">
                <?php foreach ($gambar as $key => $value) { ?>
                <div class="col-sm-3">
                        <div class="form-group">
                            <img src="<?= base_url('assets/gambarbarang/'. $value->gambar) ?>" width="250px" height="300px" id="gambar_load" alt="">
                        </div>
                        <p>Ket: <?= $value->keterangan ?></p>
                    <a href="#" class="btn btn-danger btn-xs btn-block"><i class="fas fa-trash"></i> Delete</a>
                </div>
                <?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#preview_gambar').change(function() {
        bacaGambar(this);
    })
</script>