<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pendaftar</h1>
        
        <a href="<?php echo base_url('admin/Pendaftar/export'); ?>" class="btn btn-success">Export Excel</a>
        <table border="1" cellspacing="0"></table>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right"></ol>
      </div>
      <div class="container-fluid">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>no</th>
              <th>Jurusan</th>
              <th>Nomor Induk Kependudukan</th>
              <th>SKHUN</th>
              <th>Nama Lengkap</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Tanggal Lahir</th>
              <th>Jalan/Blok</th>
              <th>Desa/Kelurahan</th>
              <th>RT/RW</th>
              <th>Kecamatan</th>
              <th>Kabupaten</th>
              <th>Telp/HP</th>
              <th>Asal Sekolah</th>
              <th>Nomor Ijazah</th>
              <th>Tahun Lulus</th>
              <th>Nama Ayah</th>
              <th>Nama Ibu</th>
              <th>Pekerjaan Orang Tua</th>
              <th>Pendapatan Per Bulan</th>
              <th>Pendidikan Terakhir Orang Tua</th>
              <th>Jalan/Blok Orang Tua</th>
              <th>Desa/Kelurahan Orang Tua</th>
              <th>RT/RW Orang Tua</th>
              <th>Kecamatan Orang Tua</th>
              <th>Kabupaten Orang Tua</th>
              <th>Telp/HP Orang Tua</th>
              <th>File Kartu Keluarga</th>
              <th>Foto Akte</th>
              <th>Foto KTP Orang Tua</th>
              <th>File Ijazah</th>
              <th>File SKHUN</th>
              <th>File SKTM</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_pendaftar  as $pendaftar) {

              ?>
              
              <tr>
                <td><?php echo $no++?> </td>
                <td><?php echo $pendaftar->id_jurusan ?></td>
                <td><?php echo $pendaftar->nik_pendaftar ?></td>
                <td><?php echo $pendaftar->skhun_pendaftar ?></td>
                <td><?php echo $pendaftar->nama_pendaftar ?></td>
                <td><?php echo $pendaftar->jk_pendaftar ?></td>
                <td><?php echo $pendaftar->ttl_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_jl_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_desa_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_rt_rw_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_kec_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_kab_pendaftar ?></td>
                <td><?php echo $pendaftar->telp_hp_pendaftar ?></td>
                <td><?php echo $pendaftar->asal_sekolah_pendaftar ?></td>
                <td><?php echo $pendaftar->no_ijazah_pendaftar ?></td>
                <td><?php echo $pendaftar->thn_lulus_pendaftar ?></td>
                <td><?php echo $pendaftar->nama_ayah_pendaftar ?></td>
                <td><?php echo $pendaftar->nama_ibu_pendaftar ?></td>
                <td><?php echo $pendaftar->prj_orang_tua_pendaftar ?></td>
                <td><?php echo $pendaftar->ppn_orang_tua_pendaftar ?></td>
                <td><?php echo $pendaftar->pendidikan_orang_tua_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_jl_orang_tua_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_desa_orang_tua_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_rt_rw_orang_tua_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_kec_orang_tua_pendaftar ?></td>
                <td><?php echo $pendaftar->almt_kab_orang_tua_pendaftar ?></td>
                <td><?php echo $pendaftar->telp_hp_orang_tua_pendaftar ?></td>
                <td><img src="<?php echo base_url('upload/pendaftar/kk/'.$pendaftar->file_kk_pendaftar) ?>" height="100px">
                </td>
                <td><img src="<?php echo base_url('upload/pendaftar/akte/'.$pendaftar->file_akte_pendaftar)?>" height="100px">
                </td>
                <td><img src="<?php echo base_url('upload/pendaftar/ktp_orangtua/'.$pendaftar->file_ktp_orang_tua_pendaftar)?>" height="100px">
                </td>
                <td><img src="<?php echo base_url('upload/pendaftar/ijazah/'.$pendaftar->file_ijazah_pendaftar) ?>" height="100px">
                </td>
                <td><img src="<?php echo base_url('upload/pendaftar/skhun/'.$pendaftar->file_skhun_pendaftar) ?>" height="100px">
                </td>
                <td><img src="<?php echo base_url('upload/pendaftar/sktm/'.$pendaftar->file_sktm_pendaftar) ?>" height="100px">
                </td>

              </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>