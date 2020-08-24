<div class="content-wrapper">
  <section class="content">
    <form method="post" action="<?php echo base_url(). 'operator/O_jurusan/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Jurusan </label>
            <input type="hidden" name="id_jurusan" value="<?= $jurusan['id_jurusan'];?>">
            <input type="text" name="nama_jurusan" placeholder="Nama Jurusan" class="form-control" required="required" value="<?= $jurusan['nama_jurusan']; ?>">
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
  </section>
</div>
