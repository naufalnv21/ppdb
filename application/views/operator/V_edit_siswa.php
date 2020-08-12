<div class="content-wrapper">
  <section class="content">
    

    <form method="post" action="<?php echo base_url(). 'operator/O_siswa/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama</label>
            <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa'];?>">
            <input type="text" name="nama_siswa" placeholder="Nama" class="form-control" required="required" value="<?= $siswa['nama_siswa']; ?>" >
          </div>
          <div class="form-group">
            <label>Jenis Kelamin </label>
            <!-- <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa'];?>"> -->
            <!-- <input type="text" name="isi_berita" placeholder="Isi Berita" class="form-control" required="required" value="<?= $berita['isi_berita']; ?>"> -->
            <select class="form-control" name="jk_siswa" value="<?= $siswa['jk_siswa']; ?>" readonly>
              <option <?php if ($siswa['jk_siswa'] == 'Laki-laki') {
                ?> selected <?php 
              } ?> value="Laki-laki">Laki-Laki</option>
              <option <?php if ($siswa['jk_siswa'] == 'Perempuan') {
                ?> selected <?php
              } ?> value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kelas </label>
            <!-- <input type="text" name="kelas_siswa" placeholder="Kelas" class="form-control" required="required"> -->
            <select class="form-control" name="kelas_siswa">
              <option <?php if ($siswa['kelas_siswa'] == '10') {
                ?> selected <?php
              } ?> value="10">10</option>
              <option <?php if ($siswa['kelas_siswa'] == '11') {
                ?> selected <?php
              } ?> value="11">11</option>
              <option <?php if ($siswa['kelas_siswa'] == '12') {
                ?> selected <?php
              } ?> value="12">12</option>              
            </select>
          </div>
          <div class="form-group" name="jurusan_siswa">
            <label>Jurusan</label>
            <!-- <input type="text" name="jurusan_siswa" placeholder="Status" class="form-control" required="required"> -->
            <select class="form-control" name="jurusan_siswa" >
              <option value="Multimedia">Multimedia</option>
              <option value="Perbankan">Perbankan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat_siswa" placeholder="Alamat" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Telephon</label>
            <input type="text" name="telp_siswa" placeholder="08xxxxxxx" class=" form-control" required="required">
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_siswa" placeholder="Pilih foto" class="form-control" value="<?= $siswa['foto_siswa']; ?>" >
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
             
        </form>
  
  </section>
</div>
