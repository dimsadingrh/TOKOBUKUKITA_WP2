<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BUKU</h3>

    <?php foreach($buku as $bk) : ?>
        
        <form method="post" action="<?php echo base_url(). 'index.php/admin/databuku/update' ?>">

            <div class="for-group">
                <label>Judul buku</label>
                <input type="text" name="judul_buku" class="form-control" value="<?php echo $bk->judul_buku ?>">
            </div>
            <div class="for-group">
                <label>Kategori </label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $bk->kategori ?>">
            </div>
            <div class="for-group">
                <label>Pengarang</label>
                <input type="hidden" name="id_buku" class="form-control" value="<?php echo $bk->id_buku?>">
                <input type="text" name="pengarang" class="form-control" value="<?php echo $bk->pengarang ?>">
            </div>
            <div class="for-group">
                <label>Penerbit</label>
                <input type="hidden" name="id_buku" class="form-control" value="<?php echo $bk->id_buku ?>">
                <input type="text" name="penerbit" class="form-control" value="<?php echo $bk->penerbit ?>">
            </div>
            <div class="for-group">
                <label>Tahun Terbit</label>
                <input type="hidden" name="id_buku" class="form-control" value="<?php echo $bk->id_buku ?>">
                <input type="text" name="tahun_terbit" class="form-control" value="<?php echo $bk->tahun_terbit ?>">
            </div>
            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $bk->stok ?>">
            </div>
            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $bk->harga ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan </button>

    </form>


    <?php endforeach; ?>
</div>