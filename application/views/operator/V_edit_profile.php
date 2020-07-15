<div class="content-wrapper">
  <section class="content">
    

    <form method="post" action="<?php echo base_url(). 'operator/O_profile/prosesEdit';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Profile </label>
            <input type="hidden" name="id_profile" value="<?= $profile['id_profile'];?>">
            <input type="text" name="nama_profile" placeholder="Nama Profile" class="form-control" required="required" value="<?= $profile['nama_profile']; ?>">
          </div>
          <div class="form-group">
            <label class="form-label">Tentang</label>
              <textarea name="tentang_profile" rows="2" class="form-control"><?= $profile['tentang_profile']; ?></textarea>
          </div>
          <div class="form-group">
            <label>By </label>
                <input type="text" name="by_profile" placeholder="Penulis" class="form-control" required="required" value="<?= $profile['by_profile']; ?>">
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="foto_profile" placeholder="Pilih foto" class="form-control" >
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
             
        </form>
  
  </section>
</div>
