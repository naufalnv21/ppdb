
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
              <th>Tempat Tanggal Lahir</th>
              <th>Nuptk</th>
              <th>Jenis Kelamin</th>
              <th>Tamatan</th>
              <th>Ijazah</th>
              <th>Mapel</th>
              <th>password</th>
              <th>telepon</th>
              <th>level</th>
              <th>alamat</th>
              <th>email</th>
              <th>created</th>
              <th>updated</th>
              <th colspan="2">Aksi</th>
          </tr>
          <?php
          $no = 1;
          foreach ($data_admin  as $admin) {
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
              <td><?php echo $admin->password_users?> </td>
              <td><?php echo $admin->telp_users?> </td>
              <td><?php echo $admin->level_users?> </td>
              <td><?php echo $admin->alamat_users?> </td>
              <td><?php echo $admin->email_users?> </td>
              <td><?php echo $admin->created_at?> </td>
              <td><?php echo $admin->updated_at?> </td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('admin/operator/hapus/'.$admin->id_users, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
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
