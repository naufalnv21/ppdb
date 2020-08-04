<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Siswa</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <a>
            <i class="fa fa-plus">Tambah Data Siswa</i>
          </a>
        </button>
        <a href="<?php echo base_url('operator/O_siswa/export'); ?>" class="btn btn-success">Export Excel</a>
        <table border="1" cellspacing="0"></table>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right"></ol>
      </div>
      <div class="container-fluid">
        <table id="example2" class="table  table-bordered table-striped">
          <thead>
            <tr>
              <th>no</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Jurusan</th>
              <th>Alamat</th>
              <th>Foto</th>
              <th>Aksi</th>
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
                <td>
                  <img src="<?php echo base_url('upload/siswa/'.$siswa->foto_siswa) ?>" class="img img-responsive img-thumbnail" width="60">
                </td>
                <td>
                  <a href="<?php echo base_url() .'operator/O_siswa/hapus/'. $siswa->id_siswa; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                  <?php echo anchor('operator/O_siswa/edit/'.$siswa->id_siswa,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Tambah Siswa</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'operator/O_siswa/tambahSiswa';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama </label>
            <input type="text" name="nama_siswa" placeholder="isikan nama" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin </label>
            <!-- <input type="text" name="jk_siswa" placeholder="Indramayu 21 Mei 1999" class="form-control" required="required"> -->
            <select class="form-control" name="jk_siswa" >
              <option value="Laki-laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kelas </label>
            <!-- <input type="text" name="kelas_siswa" placeholder="123456789" class="form-control" required="required"> -->
            <select class="form-control" name="kelas_siswa" >
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jurusan </label>
            <!-- <input type="text" name="jurusan_siswa" placeholder="P/L" class="form-control" required="required"> -->
            <select class="form-control" name="jurusan_siswa" >
              <option value="Multimedia">Multimedia</option>
              <option value="Perbankan">Perbankan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <input type="text" name="alamat_siswa" placeholder="isikan alamat" class="form-control" required="required">
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_siswa" placeholder="Pilih foto" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
