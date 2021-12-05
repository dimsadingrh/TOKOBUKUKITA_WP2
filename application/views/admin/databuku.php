<div class="container-fluid">
    <button class="btn btn-sm btn-info mb-3" data-toggle="modal" data-target="#tambah_buku"><i class="fas fa-plus fa-sm">Tambah Barang</i></button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Kategori</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Harga</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach($buku as $bk) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $bk->judul_buku ?></td>
            <td><?php echo $bk->kategori ?></td>
            <td><?php echo $bk->pengarang ?></td>
            <td><?php echo $bk->penerbit ?></td>
            <td><?php echo $bk->tahun_terbit ?></td>
            <td><?php echo $bk->stok ?></td>
            <td><?php echo $bk->harga ?></td>
            <td><?php echo anchor('index.php/admin/databuku/edit/' .$bk->id_buku, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('index.php/admin/databuku/hapus/' .$bk->id_buku, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_buku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'index.php/admin/databuku/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="judul_buku" class="form-control">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                <option>Antrologi</option>
                <option>Astronomi</option>
                <option>Biografi</option>
                <option>Bisnis</option>
                <option>Ekonomi</option>
                <option>Etika</option>
                <option>Filsafat</option>
                <option>Komputer</option>
                <option>Masak</option>
                <option>Medis</option>
                <option>Musik</option>
                <option>Pemasaran</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pengarang</label>
                <input type="text" name="pengarang" class="form-control">
            </div>
            <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control">
            </div>
            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar Buku</label>
                <input type="file" name="image" class="form-control">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
    </div>
  </div>
</div>