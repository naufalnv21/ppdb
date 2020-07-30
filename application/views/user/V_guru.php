
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pegawai</h1>
            <a href="<?php echo base_url('admin/Guru/export'); ?>" class="btn btn-success">Export Excel</a>
            <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></a><i class="fa fa-plus"></i> Tambah Data Guru</button></a> -->
          </div><!-- /.col -->
              
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
          <div class="container-fluid">
          <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>Nama</th>
              <th>Tempat Tanggal Lahir</th>
              <th>Nuptk</th>
              <th>jenis kelamin</th>
              <th>Email Guru</th>
              <th>tamatan</th>
              <th>ijazah</th>
              <th>mata pelajaran</th>
              <th>Alamat</th>
              <th>Foto</th>
              <!-- <th colspan="2">Aksi</th> -->
          </tr>
           <?php
          $no = 1;
          foreach ($data_guru as $guru) {
            ?>
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $guru->nama_guru ?></td>
              <td><?php echo $guru->ttl_guru ?></td>
              <td><?php echo $guru->nuptk_guru?> </td>
              <td><?php echo $guru->jk_guru ?></td>
              <td><?php echo $guru->email_guru?> </td>
              <td><?php echo $guru->tmt_guru?> </td>
              <td><?php echo $guru->ijazah_guru?> </td>
              <td><?php echo $guru->mapel_guru?> </td>
              <td><?php echo $guru->alamat_guru?> </td>
              <td>
                <img src="<?php echo base_url('upload/guru/'.$guru->foto_guru) ?>"class ="img img-responsive img-thumbnail " width = "60">
              </td>
              <!-- <td><?php echo anchor('admin/Guru/edit/'.$guru->id_guru,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('admin/Guru/hapus/'.$guru->id_guru, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
              </td> -->
            </tr>
          <?php } ?>
        </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
