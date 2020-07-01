<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pendaftar</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"></ol>
          </div><!-- /.col -->
        </div>
      </div>
    </section>

    <section  class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card-body">
          <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>Nomor Induk Kependudukan</th>
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
              <th>Jurusan Yang Di Pilih</th>
              <th>Nama Ayah</th>
              <th>Nama Ibu</th>
              <th>Pekerjaan Orang Tua</th>
              <th>Pendapatan Per Bulan</th>
              <th>Pendidikan Terakhir</th>
              <th>Jalan/Blok</th>
              <th>Desa/Kelurahan</th>
              <th>RT/RW</th>
              <th>Kecamatan</th>
              <th>Kabupaten</th>
              <th>Telp/HP</th>
              <th>File Kartu Keluarga</th>
              <th>Foto Akte</th>
              <th>Foto KTP Orang Tua</th>
              <th>File Ijazah</th>
              <th>File SKHUN</th>
              
              <th colspan="2">Aksi</th>
          </tr>
          <!-- <?php
          $no = 1;
          foreach ($data_operator  as $operator) {
            if ($operator->level_users==2) {
            ?> 
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $pendaftar->username ?></td>
              <td><?php echo $pendaftar->ttl_users ?></td>
              <td><?php echo $pendaftar->nuptk_users ?></td>
              <td><?php echo $pendaftar->jk_users ?></td>
              <td><?php echo $pendaftar->tmt_users ?></td>
              <td><?php echo $pendaftar->ijazah_users ?></td>
              <td><?php echo $pendaftar->mapel_users ?></td>
              <td><?php echo $pendaftar->telp_users?> </td>
              <td><?php echo $pendaftar->level_users?> </td>
              <td><?php echo $pendaftar->alamat_users?> </td>
              <td><?php echo $pendaftar->email_users?> </td>
              <td><?php echo $pendaftar->created_at?> </td>
              <td><?php echo $pendaftar->updated_at?> </td>
               <td><?php echo anchor('operaot/O_operator/edit/'.$operator->id_users,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('operator/O_operator/hapus/'.$operator->id_users, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?> 
              </td>
            </tr>

          <?php }} ?>  -->

        
        </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      </section>
    </div>
