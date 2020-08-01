<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Berita</h1>
        
        <a href="<?php echo base_url('admin/Berita/export'); ?>" class="btn btn-success">Export Excel</a>
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
              <th>Tanggal</th>
              <th>Berita</th>
              <th>Penulis</th>
              <th>Foto</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_berita as $berita) {
              ?>
              
              <tr>
                <td><?php echo $no++?> </td>
                <td><?php echo $berita->tgl_berita ?></td>
                <td><?php echo $berita->isi_berita?> </td>
                <td><?php echo $berita->penulis_berita?> </td> 
                <td>
                  <img src="<?php echo base_url('upload/berita/'.$berita->foto_berita) ?>" class="img img-responsive img-thumbnail" width="60">
                </td>
                
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>