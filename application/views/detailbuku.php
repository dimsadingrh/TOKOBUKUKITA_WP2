<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Buku</h5>
        <div class="card-body">

            <?php foreach($buku as $bk): ?>
            <div class="row">
               <div class="col-md-4">
                   <img src="<?php echo base_url().'/uploads/'.$bk->image ?>" class="card-img-top">
               </div>
               <div class="col-md-8">
                   <table class="table">

                       <tr>
                           <td>Judul Buku</td>
                           <td><strong><?php echo $bk->judul_buku ?></strong></td>
                       </tr>

                       <tr>
                           <td>Kategori</td>
                           <td><strong><?php echo $bk->kategori ?></strong></td>
                       </tr>

                       <tr>
                           <td>Pengarang</td>
                           <td><strong><?php echo $bk->pengarang ?></strong></td>
                       </tr>

                       <tr>
                           <td>Penerbit</td>
                           <td><strong><?php echo $bk->penerbit ?></strong></td>
                       </tr>

                       <tr>
                           <td>Tahun Terbit</td>
                           <td><strong><?php echo $bk->tahun_terbit ?></strong></td>
                       </tr>

                       <tr>
                           <td>Stok</td>
                           <td><strong><?php echo $bk->stok ?></strong></td>
                       </tr>

                       <tr>
                           <td>Harga</td>
                           <td><strong><div class="btn btn-sm btn-danger">Rp. <?php echo number_format($bk->harga,0,',','.') ?></div></strong></td>
                       </tr>
                    </table>

                    <?php echo anchor('index.php/dashboard/tambah_ke_keranjang/'. $bk->id_buku,'<div class="btn btn-sm btn-primary">Masukan ke Keranjang</div>') ?>
                    <?php echo anchor('index.php/selamatdatang','<div class="btn btn-sm btn-info">Kembali</div>') ?>

                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>