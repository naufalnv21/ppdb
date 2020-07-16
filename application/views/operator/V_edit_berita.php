<div class="content-wrapper">
  <section class="content">
    

    <form method="post" action="<?php echo base_url(). 'operator/O_berita/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Tanggal </label>
            <input type="hidden" name="id_berita" value="<?= $berita['id_berita'];?>">
            <input type="date" name="tgl_berita" placeholder="Tahun Bulan Tanggal Sekarang" class="form-control" required="required" value="<?= $berita['tgl_berita']; ?>">
          </div>

          <div class="form-group">
            <label class="form-label">Berita</label>
              <textarea name="isi_berita" rows="2" class="form-control"><?= $berita['isi_berita']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Penulis </label>
            <input type="text" name="penulis_berita" placeholder="Penulis" class="form-control" required="required">
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_berita" placeholder="Pilih foto" class="form-control" >
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
             
        </form>
  
  </section>
</div>
