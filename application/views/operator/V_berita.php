<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Berita</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <a>
            <i class="fa fa-plus">Tambah Data</i>
          </a>
        </button>
        <!-- <a href="<?php echo base_url('operator/O_multimedia/export'); ?>" class="btn btn-success">Export Excel</a>
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
              <th>Tanggal</th>
              <th>Berita</th>
              <th>Penulis</th>
              <th>Foto</th>
              <th>Aksi</th>
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
                <td>
                  <a href="<?php echo base_url() .'operator/O_berita/hapus/'. $berita->id_berita; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                  <?php echo anchor('operator/O_berita/edit/'.$berita->id_berita,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>


 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Berita</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'operator/O_berita/tambahBerita';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Tanggal </label>
            <input type="date" name="tgl_berita" placeholder="Tahun Bulan Tanggal Sekarang" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label class="form-label">Berita</label>
              <textarea name="isi_berita" rows="2" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Penulis</label>
            <!-- <input type="text" name="ijazah_guru" placeholder="Contoh S1" class="form-control" required="required"> -->
            <select class="form-control" name="penulis_berita" required="required">
              <option value="Operator">Operator</option>
            </select>
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_berita" placeholder="Pilih foto" class="form-control">
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
   
    <!-- /.content -->
  </div>
