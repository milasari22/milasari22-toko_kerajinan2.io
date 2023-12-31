        <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">      
             <div class="col-12">
                  <h4>
                    <i class="fas fa-shopping-cart"></i> <?= $title ?>
                    <small class="float-right">Tahun: <?= $tahun ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
            
              
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>No Order</th>
                      <th>Barang</th>
                      <th>Harga</th>
                      <th>Qty</th>
                      <th>Total Harga</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                          $grand_total = 0;
                         foreach ($laporan as $key => $value) { 
                          $tot_harga = $value->qty * $value->harga;
                          $grand_total = $grand_total + $tot_harga;
                        ?>
                          
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $value->no_order ?></td>
                      <td><?= $value->nama_barang ?></td>
                      <td>Rp.<?= number_format($value->harga, 0)?></td>
                      <td><?= $value->qty ?></td>
                      <td>Rp. <?= number_format($tot_harga, 0) ?></td>
                    </tr>
                   
                    <?php } ?>

                    </tbody>
                  </table>
                  <h1>Grand Total : Rp.</h1>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


              <!-- Tombol Print -->
              <div class="row no-print"><div class="col-12 left-20" style="text-align: right;">
                <button class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
              </div>

              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->