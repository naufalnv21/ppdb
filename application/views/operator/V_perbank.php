<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Perbank</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <a>
            <i class="fa fa-plus">Tambah Data</i>
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
              <th>Jumlah Siswa</th>
              <th>Motto Jurusan</th>
              <th>Acara Jurusan</th>
              <th>Ketua Jurusan</th>
              <th>Logo Jurusan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_perbank as $perbank) {
              ?>
              
              <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $perbank->nama_perbank ?></td>
              <td><?php echo $perbank->jml_siswa_perbank?> </td>
              <td><?php echo $perbank->motto_perbank?></td>
              <td><?php echo $perbank->acara_perbank?></td>
              <td><?php echo $perbank->ketua_perbank ?></td>
                <td>
                  <img src="<?php echo base_url('upload/perbank/'.$perbank->logo_perbank) ?>" class="img img-responsive img-thumbnail" width="60">
                </td>
                <td>
                  <a href="<?php echo base_url() .'operator/O_perbank/hapus/'. $perbank->id_perbank; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                  <?php echo anchor('operator/O_perbank/edit/'.$perbank->id_perbank,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>


 
    <!-- /.content-header -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Perbank</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'operator/O_perbank/tambahPerbank';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Jurusan </label>
            <input type="text" name="nama_perbank" placeholder="Nama Jurusan" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Jumlah Siswa </label>
            <input type="text" name="jml_siswa_perbank" placeholder="Jumlah Siswa" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Motto Multimedia</label>
            <input type="text" name="motto_perbank" placeholder="Mott Perbank" class="form-control" required="required">
          </div>
          <div class="form-group">
          <label class="form-label">Acara Perbank</label>
          <textarea name="acara_perbank" rows="2" class="form-control" required></textarea>
        </div>
          <div class="form-group">
            <label>Ketua Jurusan</label>
            <input type="text" name="ketua_perbank" placeholder="Ketua Perbank" class="form-control" required="required">
          </div>
          <div>
            <label>Logo</label>
            <input type="file" name="logo_perbank" placeholder="Pilih Logo" class="form-control">
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
