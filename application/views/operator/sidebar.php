<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url()?>assets/template/back/dist/img/logo_ristek.jpg" alt="ristek" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SMK RISTEK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a class="d-block"><?= $user['username']; ?></a>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('operator/O_dashboard'); ?>" class="nav-link">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           
          <li class="nav-header">DATA</li>
          <li class="nav-item">
            <a href="<?php echo base_url('operator/O_operator');?>" class="nav-link ">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Data Operator
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('operator/O_pendaftar'); ?>" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Data Pendaftar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('operator/O_siswa'); ?>" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('operator/O_guru'); ?>" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                Data Pegawai
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-folder"></i>
              <p>
                Data Jurusan
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('operator/O_multimedia'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>Jurusan Multimedia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('operator/O_perbank'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>Jurusan Perbankan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('operator/O_fasilitas'); ?>" class="nav-link">
              <i class="fas fa-folder"></i>
              <p>
                Data Fasilitas
              </p>
            </a>
          </li>
          <li class="nav-header">EVENT</li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('operator/O_berita');?>" class="nav-link">
              <i class="far fas fa-bullhorn nav-icon"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('operator/O_profile'); ?>" class="nav-link">
              <i class="far  fas fa-university nav-icon"></i>
              <p>
                Profile SMK RISTEK 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('operator/O_siswa/broadcast'); ?>" class="nav-link">
              <i class="far  fas fa-university nav-icon"></i>
              <p>
                Broadcast 
              </p>
            </a>
          </li>
          <li class="nav-header">PROFILE</li>
          <li class="nav-item">
            <a href="<?php echo base_url('operator/O_operator/Gantipassword');?>" class="nav-link ">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Ganti Password
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>