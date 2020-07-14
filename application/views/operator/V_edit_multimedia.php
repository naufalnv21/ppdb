<div class="content-wrapper">
  <section class="content">
    

    <form method="post" action="<?php echo base_url(). 'operator/O_multimedia/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Jurusan </label>
            <input type="hidden" name="id_multimedia" value="<?= $multimedia['id_multimedia'];?>">
            <input type="text" name="nama_multimedia" placeholder="Nama Jurusan" class="form-control" required="required" value="<?= $multimedia['nama_multimedia']; ?>"  readonly>
          </div>
          <div class="form-group">
            <label>Jumlah Siswa </label>
            <input type="hidden" name="jml_siswa_multimedia" value="<?= $multimedia['id_multimedia'];?>">
            <input type="text" name="jml_siswa_multimedia" placeholder="Jumlah Siswa" class="form-control" required="required" value="<?= $multimedia['jml_siswa_multimedia']; ?>">
          </div>
          <div class="form-group">
            <label>Motto Jurusan</label>
            <input type="text" name="motto_multimedia" placeholder="Motto Jurusan" class="form-control" required="required" >
          </div>
          <div class="form-group">
            <label>Ketua Jurusan</label>
            <input type="text" name="ketua_multimedia" placeholder="Ketua Jurusan" class="form-control" required="required">
          </div>
          <div>
            <label>Logo</label>
            <input type="file" name="logo_multimedia" placeholder="Pilih foto" class="form-control" >
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
  </section>
</div>
