
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Fasilitas</h1>
            
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
          <div class="container-fluid">
          <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>Nama Fasilitas</th>
              <th>Deskripsi Fasilitas</th>
              <th>BY</th>
              <th>Foto Fasilitas</th>
             
              
          </tr>
            <?php
          $no = 1;
          foreach ($data_fasilitas as $fasilitas) {
            ?>
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $fasilitas->nama_fasilitas ?></td>
              <td><?php echo $fasilitas->deskripsi_fasilitas?> </td>
              <td><?php echo $fasilitas->by_fasilitas?></td>
              <td>
                <img src="<?php echo base_url('upload/fasilitas/'.$fasilitas->foto_fasilitas) ?>"class ="img img-responsive img-thumbnail " width = "60">
              </td>
             <!--  <td><?php echo anchor('operator/O_fasilitas/edit/'.$fasilitas->id_fasilitas,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('operator/O_perbank/hapus/'.$fasilitas->id_fasilitas, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
              </td> -->
            </tr>
          <?php } ?> 
        </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   
    <!-- /.content -->
  </div>
