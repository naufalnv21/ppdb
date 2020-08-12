<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/template/back/dist/img/logo_ristek.jpg">
  
   <img src="<?php echo base_url() ?>assets/template/back/dist/img/logo_ristek.jpg" alt="RISTEK" class="brand-image img-circle elevation-3">

<div class="login-box">
  <div class="login-logo">
    <p class="login-box-msg">SMK RISTEK </p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Form Lupa Password</p>

<!-- <?php
/**
 * We just want to hash our password using the current DEFAULT algorithm.
 * This is presently BCRYPT, and will produce a 60 character result.
 *
 * Beware that DEFAULT may change over time, so you would want to prepare
 * By allowing your storage to expand past 60 characters (255 would be good)
 */
echo password_hash("smkristek", PASSWORD_DEFAULT);
?> -->


<!-- <?php
/**
 * We just want to hash our password using the current DEFAULT algorithm.
 * This is presently BCRYPT, and will produce a 60 character result.
 *
 * Beware that DEFAULT may change over time, so you would want to prepare
 * By allowing your storage to expand past 60 characters (255 would be good)
 */
echo password_hash("operator", PASSWORD_DEFAULT);
?> -->

      <!-- <?php 
      if($this->session->flashdata('message')){
        echo $this->session->flashdata('message');
      }
      ?> -->

      <form action="<?php echo base_url('auth/login') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" placeholder="Masukan Email Anda">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div>
          <p class="mb-1">
            <a href="#">RESET PASSWORD</a>
          </p>
        </div>
        <!-- <div class="input-group mb-3">
          <input type="password" name="password_users" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->
        <div>
            <p class="mb-1">
              <a href="<?php echo base_url('Auth/login'); ?>">Kembali Ke Menu Login</a>
            </p>
          </div>
      </form>
      
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->

