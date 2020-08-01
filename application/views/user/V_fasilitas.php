<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Fasilitas</h1>
        
        <a href="<?php echo base_url('admin/Fasilitas/export'); ?>" class="btn btn-success">Export Excel</a>
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
              <th>Nama Fasilitas</th>
              <th>Deskripsi Fasilitas</th>
              <th>BY</th>
              <th>Foto Fasilitas</th>
             
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_fasilitas as $fasilitas) {
              ?>
              
              <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $fasilitas->nama_fasilitas ?></td>
              <td><?php echo $fasilitas->deskripsi_fasilitas?> </td>
              <td><?php echo $fasilitas->by_fasilitas?></td>
                <td>
                  <img src="<?php echo base_url('upload/fasilitas/'.$fasilitas->foto_fasilitas) ?>" class="img img-responsive img-thumbnail" width="60">
                </td>
                
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>
