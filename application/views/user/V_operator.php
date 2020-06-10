
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
                <div class="container-fluid">
          <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>username</th>
              <th>password</th>
              <th>telepon</th>
              <th>level</th>
              <th>alamat</th>
              <th>email</th>
              <th>nip</th>
              <th>created</th>
              <th>updated</th>
              <th colspan="2">Aksi</th>
          </tr>
          <?php
          $no = 1;
          foreach ($data_operator as $operator) {
            ?>
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $operator->username ?></td>
              <td><?php echo $operator->password_users?> </td>
              <td><?php echo $operator->telp_users?> </td>
              <td><?php echo $operator->level_users?> </td>
              <td><?php echo $operator->alamat_users?> </td>
              <td><?php echo $operator->email_users?> </td>
              <td><?php echo $operator->nip_users?> </td>
              <td><?php echo $operator->created_at?> </td>
              <td><?php echo $operator->updated_at?> </td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('admin/operator/hapus/'.$operator->id_users, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
              </td>
            </tr>
          <?php } ?>
        </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   
    <!-- /.content -->
  </div>
