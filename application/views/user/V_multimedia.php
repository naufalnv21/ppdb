<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Multimedia</h1>
        
      </button>
      <a href="<?php echo base_url('admin/Multimedia/export'); ?>" class="btn btn-success">Export Excel</a>
      <table border="1" cellspacing="0"></table>
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
            <th>Acara Multimedia</th>
            <th>Ketua Jurusan</th>
            <th>Logo Jurusan</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $no =1;
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
                <img src="<?php echo base_url('upload/multimedia/'.$multimedia->logo_multimedia) ?>" class="img img-responsive img-thumbnail" width="60">
              </td>
                <!-- <td>
                  <a href="<?php echo base_url() .'operator/O_multimedia/hapus/'. $multimedia->id_multimedia; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                  <?php echo anchor('operator/O_multimedia/edit/'.$multimedia->id_multimedia,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td> -->
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
