<div class="col-md-12">
    <div class="card card-primary">
            <div class="card-header">
                    <h3 class="card-title">Setting Lokasi Toko</h3>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('barang/add') ?>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select name="provinsi" class="form-control"></select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>kota</label>
                            <select name="kota" class="form-control"></select>
                        </div>
                    </div>
                </div>

                <?php echo form_close() ?>
            </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/provinsi') ?>",
            success: function(hasil_provinsi){
                //console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });
    });
</script>