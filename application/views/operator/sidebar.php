  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="C_dashboard" class="brand-link">
      <img src="<?php echo base_url() ?>assets/template/back/dist/img/logo_ristek.jpg" alt="RISTEK" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SMK RISTEK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="opacity: .8">
        
        <div class="info" >
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
            <a href="<?php echo base_url('admin/Operator');?>" class="nav-link ">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Data Operator
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/Siswa') ?>" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Data Calon Siswa
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/Guru') ?>" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                Data Guru
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/Berita')?>" class="nav-link">
              <i class="far fas fa-bullhorn nav-icon"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>