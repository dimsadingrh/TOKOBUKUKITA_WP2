<div class="container fluid">

    <div class="row text-center mt-3">

        <?php foreach ($buku as $bk) : ?>

            <div class="card ml-4 mb-4" style="width: 17rem;">
                <img src="<?php echo base_url().'/uploads/'.$bk->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $bk->judul_buku ?></h5>
                    <small><?php echo $bk->tahun_terbit ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($bk->harga, 0,',','.') ?></span>
                    <?php echo anchor('index.php/dashboard/tambah_ke_keranjang/'. $bk->id_buku,'<div class="btn btn-sm btn-info mb-3">Masukan ke Keranjang</div>') ?>
                    <?php echo anchor('index.php/dashboard/detail/'. $bk->id_buku,'<div class="btn btn-sm btn-warning">Detail Buku</div>') ?>

                </div>
            </div>
            
        <?php endforeach; ?>

    </div>

</div>