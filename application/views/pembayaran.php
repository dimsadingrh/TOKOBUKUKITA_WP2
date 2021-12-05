<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-info">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) 
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "<h4>Total Harga Buku Yang Anda Beli: Rp. ".number_format($grand_total, 0,',','.');    
                 ?>
            </div><br><br>

            <h3>Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>index.php/dashboard/proses_pesanan">
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>TIKI</option>
                        <option>POS Indonesia</option>
                        <option>Gojek</option>
                        <option>JnT</option>
                        <option>Grab</option>
                        <option>JNE</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BNI - 3XXXXX4</option>
                        <option>BRI - 4XXXXX5</option>
                        <option>MANDIRI - 5XXXXX6</option>
                        <option>BCA - 2XXXXX3</option>
                        <option>BSI - 6XXXXX7</option>
                        <option>MUAMALAT - 7XXXXX8</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-success mb-3">PESAN</button>

            </form>

            <?php
            } else
            {
                echo "<h4>Keranjang Belanja Anda Masih Kosong";
            }
             ?>
        </div>

        <div class="col-md-2"></div>

    </div>
</div>