<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Pengguna</h1>
        
        <!-- <a href="<?php echo base_url('admin/Admin/export'); ?>" class="btn btn-success">Export Excel</a>
        <table border="1" cellspacing="0"></table> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right"></ol>
      </div>
      <div class="container-fluid">
        <table id="example2" class="table table-responsive table-bordered table-striped">
          <thead>
            <tr>
              <th>no</th>
              <th>username</th>
              <th>Tempat Tanggal Lahir</th>
              <th>Nuptk</th>
              <th>Jenis Kelamin</th>
              <th>Tamatan</th>
              <th>Ijazah</th>
              <th>Jabatan</th>  
              <th>telepon</th>
              <th>level</th>
              <th>alamat</th>
              <th>email</th>
              <th>created</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_admin as $admin) {
              ?>
              
              <tr>
                <td><?php echo $no++?> </td>
              <td><?php echo $admin->username ?></td>
              <td><?php echo $admin->ttl_users ?></td>
              <td><?php echo $admin->nuptk_users ?></td>
              <td><?php echo $admin->jk_users ?></td>
              <td><?php echo $admin->tmt_users ?></td>
              <td><?php echo $admin->ijazah_users ?></td>
              <td><?php echo $admin->mapel_users ?></td>
              <td><?php echo $admin->telp_users?> </td>
              <td><?php echo $admin->level_users?> </td>
              <td><?php echo $admin->alamat_users?> </td>
              <td><?php echo $admin->email_users?> </td>
              <td><?php echo $admin->created_at?> </td>
              
               <!--  <td>
                  <img src="<?php echo base_url('upload/guru/'.$guru->foto_guru) ?>"class ="img img-responsive img-thumbnail " width = "60">
                </td> -->
                
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



