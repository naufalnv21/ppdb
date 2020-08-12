<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Perbank</h1>
        
          </a>
        </button>
        <!-- <a href="<?php echo base_url('admin/Perbank/export'); ?>" class="btn btn-success">Export Excel</a>
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
                
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>




  