<div class="content-wrapper">
  <div class="content-header">
   <div class="row">
   		<form method="post" action="<?php echo base_url(). 'operator/O_operator/updatePassword';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>New Password </label>
            <input type="password" name="new_password" placeholder="Password Baru" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Konfirmasi Password </label>
            <input type="password" name="confir_password" placeholder="Konfirmasi Password" class="form-control" required="required">
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
   </div>
</div>
</div>