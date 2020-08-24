<div class="content-wrapper">
  <section class="content">
    <form method="post" action="<?php echo base_url(). 'operator/O_siswa/proseseditBroadcast';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Telegram ID</label>
            <input type="hidden" name="id_broadcast" value="<?= $broadcast['id_broadcast'];?>">
            <input type="text" name="tele_id" placeholder="ID Group Telegram" class="form-control" required="required" value="<?= $broadcast['tele_id']; ?>" >
          </div>
          <div class="form-group">
            <label>Judul Broadcast</label>
            <input type="text" name="judul_broadcast" placeholder="Judul Broadcast" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Isi Broadcast</label>
            <input type="text" name="isi_broadcast" placeholder="Isi Broadcast" class="form-control" required="required">
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
             
        </form>
  
  </section>
</div>
