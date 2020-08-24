<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Jurusan</h1>
       
        <!-- <a href="<?php echo base_url('operator/O_multimedia/export'); ?>" class="btn btn-success">Export Excel</a>
        <table border="1" cellspacing="0"></table> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right"></ol>
      </div>
      <div class="container-fluid">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>no</th>
              <th>Nama Jurusan</th>
           
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_jurusan as $jurusan) {
              ?>
              
              <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $jurusan->nama_jurusan ?></td>
                
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>


 

   
    <!-- /.content -->
  </div>
