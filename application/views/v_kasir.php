<br><section class="content">
    <div class="row">
        <!-- Kolom pertama -->
        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                    <!-- Form untuk tanggal, nama kasir, dan pelanggan -->
                    <table width="100%" style="margin-right: 10px;">
                        <tr>
                            <td style="vertical-align:top ">
                                <label for="date">Tanggal</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input value="<?php echo date('d-m-Y'); ?>" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="user">Kasir</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" id="user" value="#" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="customer">Pelanggan</label>
                            </td>
                            <td>
                                <div>
                                    <select id="customer" class="form-control">
                                        <option value="">Umum</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Kolom kedua -->
        <div class="col-lg-4">
            <!-- Form untuk barcode, jumlah, dan tombol "Add" -->
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top; width:30%">
                                <label for="barcode">Barcode</label>
                            </td>
                            <td>
                                <div class="form-group input-group">
                                    <input type="hidden" id="item_id">
                                    <input type="hidden" id="price">
                                    <input type="hidden" id="stock">
                                    <input type="text" id="barcode" class="form-control" autofocus>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="modal-item">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="qty">Jumlah</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="qty" value="1" min="1" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div>
                                    <button type="button" id="add_cart" class="btn btn-primary">
                                        <i class="fa fa-cart-plus"></i> Tambah
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Kolom ketiga -->
        <div class="col-lg-4">
            <!-- Informasi invoice dan total -->
            <div class="box box-widget">
                <div class="box-body">
                    <div align="right">
                        <h4>No Resi <b><span id="invoice">MP1909250001</span></b></h4>
                        <h1><b><span id="grand_total2" style="font-size:50pt">0</span></b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <!-- Baris keempat -->
    <div class="row">
        <!-- Kolom keempat -->
        <div class="col-lg-12">
            <!-- Tabel untuk menampilkan item yang ditambahkan -->
            <div class="box box-widget">
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Barcode</th>
                                <th>Produk Item</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th width="10%">Diskon Item</th>
                                <th width="15%">Total</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody id="cart-table">
                            <tr>
                                <td colspan="9" class="text-center">Tidak Ada Item</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><br>

    <!-- Baris kelima -->
    <div class="row">
        <!-- Kolom kelima -->
        <div class="col-lg-3">
            <!-- Form untuk subtotal, diskon, dan total keseluruhan -->
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="sub-total">Subtotal</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="sub-total" value="" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="discount">Diskon</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="discount" value="0" min="0" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="grand-total">Total Keseluruhan</label>
                            </td>
                            <td class="form-group">
                                <input type="number" id="grand-total" value="0" min="0" class="form-control" readonly>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    <!-- Kolom keenam -->
    <div class="col-lg-3">
        <!-- Form untuk uang tunai dan kembalian -->
        <div class="box box-widget">
            <div class="box-body">
                <table width="100%">
                    <!-- Baris uang tunai -->
                    <tr>
                        <td style="vertical-align:top; width:30%">
                            <label for="cash">Uang Tunai</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="number" id="cash" value="0" min="0" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <!-- Baris kembalian -->
                    <tr>
                        <td style="vertical-align:top">
                            <label for="change">Kembalian</label>
                        </td>
                        <td>
                            <div>
                                <input type="number" id="change" class="form-control" readonly>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- Kolom ketujuh -->
    <div class="col-lg-3">
        <!-- Form untuk catatan -->
        <div class="box box-widget">
            <div class="box-body">
                <table width="100%">
                    <!-- Baris catatan -->
                    <tr>
                        <td style="vertical-align:top">
                            <label for="note">Nota</label>
                        </td>
                        <td>
                            <div>
                                <textarea id="nota" rows="3" class="form-control"></textarea>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- Kolom kedelapan -->
    <div class="col-lg-3">
        <!-- Tombol untuk membatalkan pembayaran dan melakukan pembayaran -->
        <div>
            <button id="cancel_payment" class="btn btn-flat btn-danger">
                <i class="fa fa-refresh"></i> Batal
            </button><br><br>
            <button id="process_payment" class="btn btn-lg btn-primary">
                <i class="fa fa-paper-plane-o"></i> Proses Pembayaran
            </button>
        </div>
    </div>
</section><br>
