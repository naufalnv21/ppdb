<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Operator</h1>
        
        <!-- <a href="<?php echo base_url('operator/O_siswa/export'); ?>" class="btn btn-success">Export Excel</a> -->
        <table border="1" cellspacing="0"></table>
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
              <!-- <th>level</th> -->
              <th>alamat</th>
              <th>email</th>
              <!-- <th>aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_operator  as $operator) {
              if ($operator->level_users==2){
              ?>
              
              <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $operator->username ?></td>
              <td><?php echo $operator->ttl_users ?></td>
              <td><?php echo $operator->nuptk_users ?></td>
              <td><?php echo $operator->jk_users ?></td>
              <td><?php echo $operator->tmt_users ?></td>
              <td><?php echo $operator->ijazah_users ?></td>
              <td><?php echo $operator->mapel_users ?></td>
              <td><?php echo $operator->telp_users?> </td>
             <!--  <td><?php echo $operator->level_users?> </td> -->
              <td><?php echo $operator->alamat_users?> </td>
              <td><?php echo $operator->email_users?> </td>
              <!-- <td><?php echo $operator->created_at?> </td>
              <td><?php echo $operator->updated_at?> </td> -->

              <!-- <td>
                  <a href="<?php echo base_url() .'operator/O_operator/hapus/'. $operator->id_users; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                  <?php echo anchor('operator/O_operator/edit/'.$operator->id_users,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?>
              </td> -->

              
            </tr>
          
        <?php }} ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>