
<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Siswa</h1>
        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <a>
            <i class="fa fa-plus">Tambah Data Siswa</i>
          </a>
        </button>
        <a href="<?php echo base_url('admin/Siswa/export'); ?>" class="btn btn-success">Export Excel</a>
        <table border="1" cellspacing="0"></table> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right"></ol>
      </div>
      <div class="container-fluid">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>no</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Jurusan</th>
              <th>Alamat</th>
              <th>Telephon</th>
              <th>Foto</th>
             
            </tr>
          </thead>
          <tbody>
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
                <td><?php echo $siswa->telp_siswa ?></td>
                <td>
                  <img src="<?php echo base_url('upload/siswa/'.$siswa->foto_siswa) ?>" class="img img-responsive img-thumbnail" width="60">
                </td>
               
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
