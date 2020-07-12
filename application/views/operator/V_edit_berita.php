<div class="content-wrapper">
  <section class="content">
    

    <form method="post" action="<?php echo base_url(). 'operator/O_berita/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Tanggal </label>
            <input type="text" name="tgl_berita" placeholder="Tahun Bulan Tanggal Sekarang" class="form-control" required="required" value="<?= $berita['tgl_berita']; ?>"  readonly>
          </div>
          <div class="form-group">
            <label>Berita </label>
            <input type="hidden" name="id_berita" value="<?= $berita['id_berita'];?>">
            <input type="text" name="isi_berita" placeholder="Isi Berita" class="form-control" required="required" value="<?= $berita['isi_berita']; ?>">
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
