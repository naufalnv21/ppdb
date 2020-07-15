
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Multimedia</h1>
            
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
              <th>Acara Jurusan</th>
              <th>Ketua Jurusan</th>
              <th>Logo Jurusan</th>
              
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
              <td><?php echo $multimedia->ketua_multimedia?></td>
              <td>
                <img src="<?php echo base_url('upload/multimedia/'.$multimedia->logo_multimedia) ?>"class ="img img-responsive img-thumbnail " width = "60">
              </td>
              <!-- <td><?php echo anchor('operator/O_jurusan/edit/'.$jurusan->id_jurusan,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('operator/O_jurusan/hapus/'.$jurusan->id_jurusan, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?> -->
              </td>
            </tr>
          <?php } ?> 
        </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <!-- /.content -->
  </div>
