
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
          <div class="container-fluid">
          <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>Tanggal</th>
              <th>Berita</th>
              <th>Penulis</th>
              <th>Status</th>
              <th colspan="2">Aksi</th>
          </tr>
           <?php
          $no = 1;
          foreach ($data_berita as $berita) {
            ?>
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $berita->tgl_berita ?></td>
              <td><?php echo $berita->isi_berita?> </td>
              <td><?php echo $berita->penulis_berita?> </td>
              <td><?php echo $berita->status_berita?> </td>
              
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('admin/berita/hapus/'.$berita->id_berita, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
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
