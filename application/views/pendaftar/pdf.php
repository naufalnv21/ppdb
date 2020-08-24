<div class="row">
	<div class="col-2">
		<img src="C:/xampp/htdocs/ppdb_ristek/assets/template/front/theme/demo/brand/ristek.jpeg" width="100px">
	</div>
	<div class="col-10">
		<h3><center>BUKTI PENDAFTARAN SISWA BARU</center></h3>
	</div>
</div>
<hr/>

<h2><center>BUKTI PENDAFTARAN ONLINE SMK RISTEK INDRAMAYU</center></h2>
<table width="100%" style="text-align:left;">
	<!-- <tr> -->

		<!-- <th>Nama</th>
		<th>NIK</th> -->
	<!-- </tr> -->
	<?php 
	$no = 1;
	foreach($data_formulir as $formulir)
	{
		?>
		<tr>
			<td>
					<h5>Nama : </h5></br>
					<h5>Nik : </h5></br>
					<h5>Skhun : </h5></br>
					<h5>No Ijazah : </h5></br>
					<h5>Jurusan : </h5></br>
					<h5>Sekolah Asal : </h5></br>
					<h5>Jenis Kelamin : </h5></br>
					<h5>tempat tanggal lahir : </h5></br>
					<h5>alamat : </h5></br>
					<h5>Nama orang tua : </h5></br>
			</td>
			<td>
					<h5><?php echo $formulir->nama_pendaftar; ?></h5> </br>
					<h5><?php echo $formulir->nik_pendaftar;?></h5>  </br>
					<h5><?php echo $formulir->skhun_pendaftar;?></h5> </br>
					<h5><?php echo $formulir->no_ijazah_pendaftar;?></h5> </br>
					<h5><?php echo $formulir->nama_pendaftar;?></h5> </br>
					<h5><?php echo $formulir->asal_sekolah_pendaftar;?></h5> </br>
					<h5><?php echo $formulir->jk_pendaftar;?></h5> </br>
					<h5><?php echo $formulir->ttl_pendaftar;?></h5> </br>
					<h5><?php echo $formulir->almt_desa_pendaftar; ?></h5> </br>
					<h5><?php echo $formulir->nama_ayah_pendaftar;?></h5> </br>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<h2>Mengetahui</h2>
<table width="100%" style="text-align:left;">
	<tr>
		<td>
					<h5>Calon Siswa </h5></br></br></br></br></br></br></br></br></br>
					<h5>...........................</h5>
		</td>
		<td>
					<h5>Orang Tua/Wali </h5></br></br></br></br></br></br></br></br></br>
					<h5>...........................</h5>
		</td>
		<td>
					<h5>Panitia </h5></br></br></br></br></br></br></br></br></br></br></br>
					<h5>...........................</h5>
		</td>
	</tr>
</table>