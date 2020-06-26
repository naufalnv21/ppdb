
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Berita</h1>
            <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></a><i class="fa fa-plus"></i> Tambah Berita</button></a> -->
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
              <!-- <th colspan="2">Aksi</th> -->
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

              <!-- <td><?php echo anchor('admin/Berita/edit/'.$berita->id_berita,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('admin/Berita/hapus/'.$berita->id_berita, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
              </td> -->
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
        <h3 class="modal-title" id="exampleModalLabel">Form Berita</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'admin/berita/tambahBerita';?>">
          <div class="form-group">
            <label>Tanggal </label>
            <input type="text" name="tgl_berita" placeholder="Tahun Bulan Tanggal Sekarang" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Berita </label>
            <input type="text" name="isi_berita" placeholder="Tuliskan Berita" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Penulis </label>
            <input type="text" name="penulis_berita" placeholder="Penulis" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Status </label>
            <input type="text" name="status_berita" placeholder="Status" class="form-control" required="required">
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
