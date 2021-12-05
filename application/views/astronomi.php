<div class="container fluid">

    <div class="row text-center mt-4">

        <?php foreach ($astronomi as $bk) : ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$bk->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $bk->judul_buku ?></h5>
                    <small><?php echo $bk->tahun_terbit ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($bk->harga, 0,',','.') ?></span>
                    <?php echo anchor('index.php/dashboard/tambah_ke_keranjang/'. $bk->id_buku,'<div class="btn btn-sm btn-info">Tambah ke Keranjang</div>') ?>
                    <?php echo anchor('index.php/dashboard/detail/'. $bk->id_buku,'<div class="btn btn-sm btn-success">Detail</div>') ?>

                </div>
            </div>

            

        <?php endforeach; ?>
    </div>
</div>