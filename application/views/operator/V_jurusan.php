<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Jurusan</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <a>
            <i class="fa fa-plus">Tambah Jurusan</i>
          </a>
        </button>
        <!-- <a href="<?php echo base_url('operator/O_multimedia/export'); ?>" class="btn btn-success">Export Excel</a>
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
              <th>Nama Jurusan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_jurusan as $jurusan) {
              ?>
              
              <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $jurusan->nama_jurusan ?></td>
                <td>
                  <a href="<?php echo base_url() .'operator/O_jurusan/hapus/'. $jurusan->id_jurusan; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                  <?php echo anchor('operator/O_jurusan/edit/'.$jurusan->id_jurusan,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
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
        <h3 class="modal-title" id="exampleModalLabel">Form Jurusan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'operator/O_jurusan/tambahJurusan';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Jurusan </label>
            <input type="text" name="nama_jurusan" placeholder="Nama Jurusan" class="form-control" required="required">
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
