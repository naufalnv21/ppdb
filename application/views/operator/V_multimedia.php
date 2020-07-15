
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Multimedia</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></a><i class="fa fa-plus"></i> Tambah Data</button></a>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
          <div class="container-fluid">
          <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>Nama Jurusan</th>
              <th>Jumlah Siswa</th>
              <th>Motto Jurusan</th>
              <th>Acara Multimedia</th>
              <th>Ketua Jurusan</th>
              <th>Logo Jurusan</th>
              <th colspan="2">Aksi</th>
          </tr>
            <?php
          $no = 1;
          foreach ($data_multimedia as $multimedia) {
            ?>
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $multimedia->nama_multimedia ?></td>
              <td><?php echo $multimedia->jml_siswa_multimedia?> </td>
              <td><?php echo $multimedia->motto_multimedia?></td>
              <td><?php echo $multimedia->acara_multimedia?></td>
              <td><?php echo $multimedia->ketua_multimedia ?></td>
              <td>
                <img src="<?php echo base_url('upload/multimedia/'.$multimedia->logo_multimedia) ?>"class ="img img-responsive img-thumbnail " width = "60">
              </td>
              <td><?php echo anchor('operator/O_multimedia/edit/'.$multimedia->id_multimedia,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('operator/O_multimedia/hapus/'.$multimedia->id_multimedia, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
              </td>
            </tr>
          <?php } ?> 
        </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Multimedia</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'operator/O_multimedia/tambahMultimedia';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Jurusan </label>
            <input type="text" name="nama_multimedia" placeholder="Nama Jurusan" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Jumlah Siswa </label>
            <input type="text" name="jml_siswa_multimedia" placeholder="Jumlah Siswa" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Motto Multimedia</label>
            <input type="text" name="motto_multimedia" placeholder="Mott Multimedia" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label class="form-label">Acara Multimedia</label>
              <textarea name="acara_multimedia" rows="2" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Ketua Jurusan</label>
            <input type="text" name="ketua_multimedia" placeholder="Ketua Multimedia" class="form-control" required="required">
          </div>
          <div>
            <label>Logo</label>
            <input type="file" name="logo_multimedia" placeholder="Pilih Logo" class="form-control">
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
   
    <!-- /.content -->
  </div>
