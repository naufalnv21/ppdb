<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Profile SMK RISTEK INDRAMAYU</h1>
        
        <a href="<?php echo base_url('admin/Profile/export'); ?>" class="btn btn-success">Export Excel</a>
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
              <th>Nama Profile</th>
              <th>Tentang</th>
              <th>By</th>
              <th>Foto</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_profile as $profile) {
              ?>
              
              <tr>
               <td><?php echo $no++?> </td>
               <td><?php echo $profile->nama_profile ?></td>
               <td><?php echo $profile->tentang_profile?> </td>
               <td><?php echo $profile->by_profile?> </td> 
               <td>
                <img src="<?php echo base_url('upload/profile/'.$profile->foto_profile) ?>" class="img img-responsive img-thumbnail" width="60">
              </td>
              
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
</div>
