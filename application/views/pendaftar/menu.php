<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3 ml-auto">
        <form class="input-icon my-3 my-lg-0">
          <!-- <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
          <div class="input-icon-addon">
            <i class="fe fe-search"></i>
          </div> -->
        </form>
      </div>
      <div class="col-lg order-lg-first">
        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
          <li class="nav-item">
            <a href="<?php echo site_url('pendaftar/C_calon_siswa'); ?>" class="nav-link"><i class="fe fe-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('pendaftar/C_berita'); ?>" class="nav-link"><i class="fe fe-home"></i> Berita</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('pendaftar/C_formulir'); ?>" class="nav-link"><i class="fa fa-book"></i> Formulir PPDB</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('pendaftar/C_pegawai'); ?>" class="nav-link"><i class="fa fa-users"></i>Pegawai</a>
          </li>
          <li class="nav-item dropdown">
            <a  class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Profile </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?php echo site_url('pendaftar/C_profile'); ?>">Smk Ristek Indramayu</a>
                  <a class="dropdown-item" href="<?php echo site_url('pendaftar/C_multimedia'); ?>">Multimedia</a>
                  <a class="dropdown-item" href="<?php echo site_url('pendaftar/C_perbank'); ?>">Perbankan</a>
              </div>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('pendaftar/C_fasilitas'); ?>" class="nav-link"><i class="fa fa-users"></i> Fasilitas</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('pendaftar/C_download'); ?>" class="nav-link"><i class="fa fa-download"></i> Download Formulir</a>
          </li>
          <?php

          $username=$this->session->userdata('username_register');
          $id_register=$this->session->userdata('id_register');
          // var_dump($username);
          if(!empty($username)){
            ?>
            <li class="nav-item">
            <a href="<?php echo site_url('pendaftar/C_download/downloadBukti/'.$id_register); ?>" class="nav-link"><i class="fa fa-download"></i> Cetak Bukti. Pendf</a>
          </li>
            <?php
          }
          ?>
          <!-- <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-cogs"></i>Pengaturan</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="<?php echo base_url(); ?>admin/ppdb/pengaturan" class="dropdown-item "><i class="fa fa-street-view"></i>PPDB</a>
            </div>
          </li> -->
        </ul>
      </div>
    </div>
  </div>
</div>