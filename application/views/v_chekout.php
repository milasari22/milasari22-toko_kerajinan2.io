<!-- Main content -->
<div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-shopping-cart"></i> Chek Out
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Barang</th>
                      <th>Harga Barang</th>
                      <th>Berat</th>
                      <th>Total Harga</th>
                    </tr>
                    </thead>

                    <tbody>
                        
                <?php $i = 1; ?>

                <?php foreach ($this->cart->contents() as $items) { 
                        $total_berat = 0;
                        $barang = $this->m_home->detail_barang($items['id']);
                        $berat = $items['qty'] * $barang-> berat;
                        $total_berat = $total_berat + $berat;
                    ?>
                    <tr>
                        <td><?php echo $items['qty']; ?></td>
                        <td><?php echo $items['name']; ?></td>
                        <td style="text-align">Rp. <?php echo number_format($items['price'], 0); ?></td>
                        <td class=""><?= $berat ?> gr</td>
                        <td style="text-align:">Rp. <?php echo number_format($items['subtotal'], 0);?></td>
                    </tr>
                <?php } ?>
                    </tbody>

                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-8">
                  Alamat Tujuan: <br>
                  
                <br><div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select name="provinsi" class="form-control"></select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>kota/Kabupaten</label>
                            <select name="kota" class="form-control"></option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Expedisi</label>
                            <select name="expedisi" class="form-control"></option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>paket</label>
                            <select name="paket" class="form-control"></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control">
                            </select>
                        </div>
                    </div>
                    
                </div>
                </div>
                
                <!-- /.col -->
                <div class="col-4">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <th>Rp. <?php echo number_format($this->cart->total(), 0); ?></th>
                      </tr>
                      <tr>
                        <th>Berat:</th>
                        <th><?= $total_berat?> gr</th>
                      </tr>
                      <tr>
                        <th>Ongkir:</th>
                        <th><label id="ongkir"></label></th>
                      </tr>
                      <tr>
                        <th>Total Bayar:</th>
                        <th><label id="total_bayar"></label></th>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?= base_url('belanja') ?>" class="btn btn-danger"><i class="fas fa-backward"></i> Kembali Ke Keranjang</a>
                  <button type="button" class="btn btn-info float-right"><i class="fas fa-shopping-cart"></i>Proses Chek Out
                  </button>
                </div>
              </div>
            </div>



            <script>
    $(document).ready(function(){
        //Pilih provinsi
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/provinsi') ?>",
            success: function(hasil_provinsi){
                //console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });

        //Pilih Kota
        $("select[name=provinsi]").on("change", function() {
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
            
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/kota') ?>",
            data: 'id_provinsi=' + id_provinsi_terpilih,
            
            success: function(hasil_kota){
                //console.log(hasil_kota);
                $("select[name=kota]").html(hasil_kota);
            }
        });
        });


        $("select[name=kota]").on("change", function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/expedisi') ?>",
            success: function(hasil_expedisi){
                //console.log(hasil_expedisi);
                $("select[name=expedisi]").html(hasil_expedisi);
            }
        });
        });
        

        //mendapatkan data paket
        $("select[name=expedisi]").on("change", function() {
          //mendapatkan expedisi terpilih
          var expedisi_terpilih = $("option:selected","select[name=expedisi]").val()
          //mendapakan id kota tujuan terpilih
          var id_kota_tujuan_terpilih = $("option:selected","select[name=kota]").attr('id_kota');
          //mengambil data ongkir
          var total_berat = <?= $berat?>; 

        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/paket') ?>",
            data : 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih +'&berat=' + total_berat,
            success: function(hasil_paket){
              $("select[name=paket]").html(hasil_paket);
            }
        });
        });


        $("select[name=paket]").on("change", function() {
          //menampilkan ongkir
          var dataongkir = "Rp. " + $("option:selected", this).attr('ongkir');
          var reverse = angka.
          $("#ongkir").html(dataongkir)

          //menghitung total bayar
          var ongkir = $("option:selected", this).attr('ongkir');
          var total_bayar = parseInt(ongkir) + parseInt(<?= $this->cart->total() ?>)
          $("#total_bayar").html("Rp. " + total_bayar);
        });

    });
</script>