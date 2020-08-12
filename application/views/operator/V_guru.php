<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pegawai</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <a>
            <i class="fa fa-plus">Tambah Data Pegawai</i>
          </a>
        </button>
        <!-- <a href="<?php echo base_url('operator/O_guru/export'); ?>" class="btn btn-success">Export Excel</a>
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
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
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
                <td>
                  <a href="<?php echo base_url() .'operator/O_guru/hapus/'. $guru->id_guru; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                  <?php echo anchor('operator/O_guru/edit/'.$guru->id_guru,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>
  
    <!-- /.content-header -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Tambah Guru</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'operator/O_guru/tambahGuru';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama </label>
            <input type="text" name="nama_guru" placeholder="isikan nama" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Tempat Tanggal Lahir </label>
            <input type="text" name="ttl_guru" placeholder="Indramayu 21 Mei 1999" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>NUPTK </label>
            <input type="text" name="nuptk_guru" placeholder="123456789" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin </label>
            <!-- <input type="text" name="jk_guru" placeholder="P/L" class="form-control" required="required"> -->
            <select class="form-control" name="jk_guru" required="required" >
              <option value="Laki-laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email Guru </label>
            <input type="text" name="email_guru" placeholder="isikan email" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Tamatan </label>
            <input type="text" name="tmt_guru" placeholder="Contoh 2016-2017" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Ijazah </label>
            <!-- <input type="text" name="ijazah_guru" placeholder="Contoh S1" class="form-control" required="required"> -->
            <select class="form-control" name="ijazah_guru" required="required">
              <option value="SMA">SMA</option>
              <option value="SMK">SMK</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
            </select>
          </div>
          <div class="form-group">
            <label>Mata Pelajaran</label>
            <!-- input type="text" name="mapel_guru" placeholder="Ex MTK" class="form-control" required="required"> -->
            <select class="form-control" name="mapel_guru" required="required">
              <option value="B.Inggris">B.Inggris</option>
              <option value="PLH">PLH</option>
              <option value="SBK">SBK</option>
              <option value="PENJASKES">PENJASKES</option>
              <option value="PAI">PAI</option>
              <option value="IPS">IPS</option>
              <option value="IPA">IPA</option>
              <option value="FISIKA">FISIKA</option>
              <option value="MATEMATIKA">MATEMATIKA</option>
              <option value="PRODUKTIF">PRODUKTIF</option>
              <option value="B.INDONESIA">B.INDONESIA</option>
              <option value="KEWIRAUSAHAAN">KEWIRAUSAHAAN</option>
              <option value="PKN">PKN</option>
              <option value="-">-</option>
              <option value="B.INGGRIS/PLH/SBK">B.INGGRIS/PLH/SBK</option>
              <option value="PAI/IPS">PAI/IPS</option>
              <option value="IPA/FISIKA">IPA/FISIKA</option>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <input type="text" name="alamat_guru" placeholder="isikan alamat" class="form-control" required="required">
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_guru" placeholder="Pilih foto" class="form-control">
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
