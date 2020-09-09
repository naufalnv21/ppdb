<!DOCTYPE html>
<html>
<head>
	
</head>
<body bgcolor="white">

<img src="C:/xampp/htdocs/ppdb_ristek/assets/template/front/theme/demo/brand/ristek.jpeg" style="position: absolute; width: 80px; height: auto; padding-top: 50px;">
<br>
<table class="table-border" border="0" style="width: 110%;">
	<tr>
		<td align="center">
			<span style="line-height: 1.6; font-size: 20px; font-weight: bold;">
				YAYASAN AL-ANSHORY INDRAMAYU <br>
				SMK RISTEK INDRAMAYU </span><br>
				<span style="line-height: 1.6; font-weight: bold; font-size: 20px;">
					Bidang Keahlian Perbankan dan Multimedia
				</span>
				<span>
				<p>Jl. Raya Pamayahan Blok PDAM RT 01 RW 01 Kec. Lohbener Kab. Indramayu Kode pos: 45256<br></p>
				</span>
		</td>
	</tr>
</table>

<!-- <div class="row">
	<div class="col-2">
		<img src="C:/xampp/htdocs/ppdb_ristek/assets/template/front/theme/demo/brand/ristek.jpeg" width="100px"> </img>
		<center>
			<h3>BUKTI PENDAFTARAN SISWA BARU</h3>
		</center>
		<h3><centar>BUKTI PENDAFTARAN SISWA BARU</centar></h3>
	</div>
	<div class="col-10">
		<h3><center>BUKTI PENDAFTARAN SISWA BARU</center></h3>
	</div>
</div>
<hr/> -->

<h2><center>KARTU TANDA SISWA SMK RISTEK INDRAMAYU</center></h2>
<table width="100%" style="text-align:left;">
	<!-- <tr> -->

		<!-- <th>Nama</th>
		<th>NIK</th> -->
	<!-- </tr> -->
	<?php 
	$no = 1;
	foreach($data_formulir as $kartu)
	{
		?>
		<tr>
			<td width="20%">
					<h5>nama : </h5>
					<h5>jurusan : </h5>
					<h5>alamat : </h5>
					<h5>kenis kelamin : </h5>
					<h5>tempat tanggal tahir : </h5>
					
			</td>
			<td width="80%">
					<h5><?php echo $kartu->nama_pendaftar; ?></h5>
					<h5><?php echo $kartu->nama_jurusan;?></h5>
					<h5><?php echo $kartu->almt_desa_pendaftar;?></h5>
					<h5><?php echo $kartu->jk_pendaftar;?></h5> 
					<h5><?php echo $kartu->ttl_pendaftar;?></h5> 
					
			</td>
		</tr>
		<?php
	}
	?>
</table>


</body>
</html>