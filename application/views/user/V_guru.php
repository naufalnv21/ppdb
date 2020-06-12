
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></a><i class="fa fa-plus"></i> Tambah Data Guru</button></a>
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
              <th>Nip</th>
              <th>Email Guru</th>
              <th>Alamat</th>
              <th>Foto</th>
              <th colspan="2">Aksi</th>
          </tr>
           <?php
          $no = 1;
          foreach ($data_guru as $guru) {
            ?>
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $guru->nama_guru ?></td>
              <td><?php echo $guru->nip_guru?> </td>
              <td><?php echo $guru->email_guru?> </td>
              <td><?php echo $guru->alamat_guru?> </td>
              <td>
                <img src="<?php echo base_url('upload/guru/'.$guru->foto_guru) ?>"class = "img img-responsive img-thumbnail " width = "60">
              </td>
              <td onclick="javascript: return confirm('Anda yakin edit?')"><?php echo anchor('admin/guru/hapus/'.$guru->id_guru, '<div class="btn btn-danger btn-sm" ><i class="fa fa-edit"></i></div>' ) ?>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('admin/guru/hapus/'.$guru->id_guru, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
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
        <h3 class="modal-title" id="exampleModalLabel">Form Tambah Guru</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'admin/guru/tambahGuru';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama </label>
            <input type="text" name="nama_guru" placeholder="isikan nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Nip </label>
            <input type="text" name="nip_guru" placeholder="isikan nip" class="form-control">
          </div>
          <div class="form-group">
            <label>Email </label>
            <input type="text" name="email_guru" placeholder="isikan email" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <input type="text" name="alamat_guru" placeholder="isikan alamat" class="form-control">
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_guru" placeholder="Pilih foto" class="form-control">
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
