<div class="content-wrapper">
  <section class="content">
    

    <form method="post" action="<?php echo base_url(). 'operator/O_jurusan/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Jurusan </label>
            <input type="hidden" name="id_jurusan" value="<?= $jurusan['id_jurusan'];?>">
            <input type="text" name="nama_jurusan" placeholder="Nama Jurusan" class="form-control" required="required" value="<?= $jurusan['nama_jurusan']; ?>"  readonly>
          </div>
          <div class="form-group">
            <label>Jumlah Siswa </label>
            <input type="hidden" name="jml_siswa_jurusan" value="<?= $jurusan['id_jurusan'];?>">
            <input type="text" name="jml_siswa_jurusan" placeholder="Isi Berita" class="form-control" required="required" value="<?= $jurusan['jml_siswa_jurusan']; ?>">
          </div>
          <div>
            <label>Logo</label>
            <input type="file" name="logo_jurusan" placeholder="Pilih foto" class="form-control" >
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
             
        </form>
  
  </section>
</div>
