<div class="content-wrapper">
  <section class="content">
    <form method="post" action="<?php echo base_url(). 'operator/O_perbank/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Jurusan </label>
            <input type="hidden" name="id_perbank" value="<?= $perbank['id_perbank'];?>">
            <input type="text" name="nama_perbank" placeholder="Nama Jurusan" class="form-control" required="required" value="<?= $perbank['nama_perbank']; ?>"  readonly>
          </div>
          <div class="form-group">
            <label>Jumlah Siswa </label>
            <input type="hidden" name="jml_siswa_perbank" value="<?= $perbank['id_perbank'];?>">
            <input type="text" name="jml_siswa_perbank" placeholder="Jumlah Siswa" class="form-control" required="required" value="<?= $perbank['jml_siswa_perbank']; ?>">
          </div>
          <div class="form-group">
            <label>Motto Jurusan</label>
            <input type="text" name="motto_perbank" placeholder="Motto Jurusan" class="form-control" required="required" value="<?= $perbank['motto_perbank']; ?>">
          </div>
           <div class="form-group">
            <label class="form-label">Acara Perbankan</label>
              <textarea name="acara_perbank" rows="2" class="form-control"><?= $perbank['acara_perbank']; ?></textarea>
          </div>
          <!-- <div class="form-group">
            <input type="hidden" name="id_perbank" value="<?= $perbank['id_perbank'];?>">
            <label class="form-label">Acara Perbankan</label>
              <textarea name="acara_perbank" rows="2" class="form-control" value="<?= $perbank['acara_perbank']; ?>" required></textarea>
          </div> -->
          <div class="form-group">
            <label>Ketua Jurusan</label>
            <input type="text" name="ketua_perbank" placeholder="Ketua Jurusan" class="form-control" required="required" value="<?= $perbank['ketua_perbank']; ?>">
          </div>
          <div>
            <label>Logo</label>
            <input type="file" name="logo_perbank" placeholder="Pilih foto" class="form-control" >
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
  </section>
</div>
