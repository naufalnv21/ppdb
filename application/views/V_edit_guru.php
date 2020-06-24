<div class="content-wrapper">
	<section class="content">
		

		<form method="post" action="<?php echo base_url(). 'admin/Guru/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama </label>
            <input type="hidden" name="id_guru" value="<?= $guru['id_guru'];?>">
            <input type="text" name="nama_guru" placeholder="isikan nama" class="form-control"  value="<?= $guru['nama_guru']; ?>">
          </div>
          <div class="form-group">
            <label>Tempat Tanggal Lahir </label>
            <input type="text" name="ttl_guru" placeholder="Indramayu 21 Mei 1999" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>NUPTK </label>
            <input type="text" name="nuptk_guru" placeholder="123456789" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin </label>
            <input type="text" name="jk_guru" placeholder="P/L" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Email Guru </label>
            <input type="text" name="email_guru" placeholder="isikan email" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Tamatan </label>
            <input type="text" name="tmt_guru" placeholder="Contoh 2016-2017" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Ijazah </label>
            <input type="text" name="ijazah_guru" placeholder="Contoh S1" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Mata Pelajaran </label>
            <input type="text" name="mapel_guru" placeholder="Ex MTK" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <input type="text" name="alamat_guru" placeholder="isikan alamat" class="form-control" required="required">
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_guru" placeholder="Pilih foto" class="form-control" required="required">
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
	
	</section>
</div>
