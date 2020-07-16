<div class="content-wrapper">
  <section class="content">
    <form method="post" action="<?php echo base_url(). 'operator/O_fasilitas/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Fasilitas </label>
            <input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas'];?>">
            <input type="text" name="nama_fasilitas" placeholder="Nama Fasilitas" class="form-control" required="required" value="<?= $fasilitas['nama_fasilitas']; ?>">
          </div>
          <div class="form-group">
            <label class="form-label">Deskripsi Fasilitas</label>
              <textarea name="deskripsi_fasilitas" rows="2" class="form-control"><?= $fasilitas['deskripsi_fasilitas']; ?></textarea>
          </div>
          <div class="form-group">
            <label>By</label>
            <input type="text" name="by_fasilitas" placeholder="Oleh" class="form-control" required="required" value="<?= $fasilitas['by_fasilitas']; ?>">
          </div>
          <div>
            <label>Logo</label>
            <input type="file" name="foto_fasilitas" placeholder="Pilih foto" class="form-control" >
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
  </section>
</div>
