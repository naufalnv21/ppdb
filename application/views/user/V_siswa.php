
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Siswa</h1>
            
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
          <div class="container-fluid">
          <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Jurusan</th>
              <th>Alamat</th>
              <th>Foto</th>
          </tr>
          <tr>
            <?php
          $no =1;
          foreach ($data_siswa as $siswa) {
            ?>
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $siswa->nama_siswa ?></td>
              <td><?php echo $siswa->jk_siswa ?></td>
              <td><?php echo $siswa->kelas_siswa ?></td>
              <td><?php echo $siswa->jurusan_siswa ?></td>
              <td><?php echo $siswa->alamat_siswa ?></td>
              <td>
                <img src="<?php echo base_url('upload/siswa/'.$siswa->foto_siswa) ?>" class="img img-responsive img-thumbnail" width="60">
              </td>
              
            </tr>
          <?php } ?>
          </tr>
        </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   </div>
