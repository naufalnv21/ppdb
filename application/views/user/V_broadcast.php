<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Broadcast</h1>
        
        <!-- <a href="<?php echo base_url('operator/O_siswa/export'); ?>" class="btn btn-success">Export Excel</a>
        <table border="1" cellspacing="0"></table> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right"></ol>
      </div>
      <div class="container-fluid">
        <table id="example2" class="table  table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Telegram ID</th>
              <th>Judul Broadcast</th>
              <th>Isi Broadcast</th>
              <!-- <th>Aksi</th> -->
              <!-- <th>Pesan</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($data_broadcast as $broadcast) {
              ?>
              
              <tr>
                <td><?php echo $no++?> </td>
                <td><?php echo $broadcast->tele_id ?></td>
                <td><?php echo $broadcast->judul_broadcast ?></td>
                <td><?php echo $broadcast->isi_broadcast ?></td>
                <!--  <td>
                  <a href="<?php echo base_url("operator/O_siswa/sendMessage/". $broadcast->tele_id) ; ?>" class="btn btn-primary btn-sm" ><i class="fa fa-send-o"></i></a>&nbsp;&nbsp;
                  </td> -->
                 
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>


<!-- /.content -->
