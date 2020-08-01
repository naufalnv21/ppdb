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
        <table id="example2" class="table table-bordered table-striped">
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
              <td><?php echo $operator->level_users?> </td>
              <td><?php echo $operator->alamat_users?> </td>
              <td><?php echo $operator->email_users?> </td>
              <!-- <td><?php echo $operator->created_at?> </td>
              <td><?php echo $operator->updated_at?> </td> -->

              

              
            </tr>
          
        <?php }} ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>


  