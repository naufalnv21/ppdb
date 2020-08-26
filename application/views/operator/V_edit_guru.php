<div class="content-wrapper">
	<section class="content">
		

		<form method="post" action="<?php echo base_url(). 'operator/O_guru/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama </label>
            <input type="hidden" name="id_guru" value="<?= $guru['id_guru'];?>">
            <input type="text" name="nama_guru" placeholder="isikan nama" class="form-control"  value="<?= $guru['nama_guru']; ?>"  >
          </div>
          <div class="form-group">
            <label>Tempat Tanggal Lahir </label>
            <input type="text" name="ttl_guru" placeholder="Indramayu 21 Mei 1999" class="form-control" required="required" value="<?= $guru['ttl_guru']; ?>" >
          </div>
          <div class="form-group">
            <label>NUPTK </label>
            <input type="text" name="nuptk_guru" placeholder="123456789" class="form-control" required="required" value="<?= $guru['nuptk_guru']; ?>" >
          </div>
          <div class="form-group">
            <label>Jenis Kelamin </label>
            <!-- <input type="text" name="jk_guru" placeholder="P/L" class="form-control" required="required"> -->
            <select class="form-control" name="jk_guru" value="<?= $guru['jk_guru']; ?>" >
              <option <?php if ($guru['jk_guru'] == 'Laki-laki') {
                ?> selected <?php 
              } ?> value="Laki-laki">Laki-Laki</option>
              <option <?php if ($guru['jk_guru'] == 'Perempuan') {
                ?> selected <?php
              } ?> value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email Guru </label>
            <input type="text" name="email_guru" placeholder="isikan email" class="form-control" required="required" value="<?= $guru['email_guru']; ?>">
          </div>
          <div class="form-group">
            <label>Tamatan </label>
            <input type="text" name="tmt_guru" placeholder="Contoh 2016-2017" class="form-control" required="required" value="<?= $guru['tmt_guru']; ?>">
          </div>
          <div class="form-group">
            <label>Ijazah </label>
            <!-- <input type="text" name="ijazah_guru" placeholder="Contoh S1" class="form-control" required="required"> -->
            <select class="form-control" name="ijazah_guru" value="<?php $guru['ijazah_guru']; ?>" required="required">
              <option <?php if ($guru['ijazah_guru'] == 'SMA') {
                ?> selected <?php
              } ?> value="SMA">SMA</option>
              <option <?php if ($guru['ijazah_guru'] == 'SMK') {
                ?> selected <?php
              } ?> value="SMK">SMK</option>
              <option <?php if ($guru['ijazah_guru'] == 'D1') {
                ?> selected <?php
              } ?> value="D1">D1</option>
              <option <?php if ($guru['ijazah_guru'] == 'D2') {
                ?> selected <?php
              } ?> value="D2">D2</option>
              <option <?php if ($guru['ijazah_guru'] == 'D3') {
                ?> selected <?php
              } ?> value="D3">D3</option>
              <option <?php if ($guru['ijazah_guru'] == 'S1') {
                ?> selected <?php
              } ?> value="S1">S1</option>
              <option <?php if ($guru['ijazah_guru'] == 'S2') {
                ?> selected <?php
              } ?> value="S2">S2</option>
              <option <?php if ($guru['ijazah_guru'] == 'S3') {
                ?> selected <?php
              } ?> value="S3">S3</option>
            </select>
          </div>
          <div class="form-group">
            <label>Mata Pelajaran </label>
            <!-- <input type="text" name="mapel_guru" placeholder="Ex MTK" class="form-control" required="required"> -->
            <select class="form-control" name="mapel_guru" value="<?php $guru['mapel_guru'] ?>" required="required">
              <option <?php if ($guru['ijazah_guru'] == 'B.Inggris') {
                ?> selected <?php
              } ?> value="B.Inggris">B.Inggris</option>
              <option <?php if ($guru['ijazah_guru'] == 'PLH') {
                ?> selected <?php
              } ?> value="PLH">PLH</option>
              <option <?php if ($guru['ijazah_guru'] == 'SBK') {
                ?> selected <?php
              } ?> value="SBK">SBK</option>
              <option <?php if ($guru['ijazah_guru'] == 'PENJASKES') {
                ?> selected <?php
              } ?> value="PENJASKES">PENJASKES</option>
              <option <?php if ($guru['ijazah_guru'] == 'PAI') {
                ?> selected <?php
              } ?> value="PAI">PAI</option>
              <option <?php if ($guru['ijazah_guru'] == 'IPS') {
                ?> selected <?php
              } ?> value="IPS">IPS</option>
              <option <?php if ($guru['ijazah_guru'] == 'IPA') {
                ?> selected <?php
              } ?> value="IPA">IPA</option>
              <option <?php if ($guru['ijazah_guru'] == 'FISIKA') {
                ?> selected <?php
              } ?> value="FISIKA">FISIKA</option>
              <option <?php if ($guru['ijazah_guru'] == 'MATEMATIKA') {
                ?> selected <?php
              } ?> value="MATEMATIKA">MATEMATIKA</option>
              <option <?php if ($guru['ijazah_guru'] == 'PRODUKTIF') {
                ?> selected <?php
              } ?> value="PRODUKTIF">PRODUKTIF</option>
              <option <?php if ($guru['ijazah_guru'] == 'B.INDONESIA') {
                ?> selected <?php
              } ?> value="B.INDONESIA">B.INDONESIA</option>
              <option <?php if ($guru['ijazah_guru'] == 'KEWIRAUSAHAAN') {
                ?> selected <?php
              } ?> value="KEWIRAUSAHAAN">KEWIRAUSAHAAN</option>
              <option <?php if ($guru['ijazah_guru'] == 'PKN') {
                ?> selected <?php
              } ?> value="PKN">PKN</option>
            </select>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <input type="text" name="alamat_guru" placeholder="isikan alamat" class="form-control" required="required">
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_guru" placeholder="Pilih foto" class="form-control" >
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
	
	</section>
</div>
