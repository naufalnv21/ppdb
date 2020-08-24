  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo count($dashboard['pegawai']); ?></h3>

                <p>Data Pegawai</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?php echo base_url('operator/O_guru'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo count($dashboard['pendaftar']); ?></h3>

                <p>Data Pendaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('operator/O_pendaftar'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo count($dashboard['siswa']); ?></h3>

                <p>Data Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url('operator/O_siswa'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo count($dashboard['berita']); ?></h3>

                <p>Total Berita</p>
              </div>
              <div class="icon">
                <i class="fa fa-bullhorn"></i>
              </div>
              <a href="<?php echo base_url('operator/O_berita');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo count($dashboard['multimedia']); ?></h3>

                <p>Jurusan Multimedia</p>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="<?php echo base_url('operator/O_multimedia'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo count($dashboard['perbank']);?></h3>
                <p>Jurusan Perbankan</p>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="<?php echo base_url('operator/O_perbank'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo count($dashboard['fasilitas']); ?></h3>
                <p>Jumlah Fasilitas</p>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <a href="<?php echo base_url('operator/O_fasilitas'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo count($dashboard['smk']); ?></h3>
                <p>SMK RISTEK INDRAMAYU</p>
              </div>
              <div class="icon">
                <i class="fas fa-school"></i>
              </div>
              <a href="<?php echo base_url('operator/O_profile'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo count($dashboard['broadcast']); ?></h3>
                <p>Jumlah Broadcast</p>
              </div>
              <div class="icon">
                <i class="fa fa-send-o"></i>
              </div>
              <a href="<?php echo base_url('operator/O_siswa/broadcast'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo count($dashboard['jurusan']);?></h3>
                <p>Jumlah Jurusan</p>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="<?php echo base_url('operator/O_jurusan'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>