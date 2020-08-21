<div class="content-wrapper">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Broadcast</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <a>
            <i class="fa fa-plus">Tambah Pesan</i>
          </a>
        </button>
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
              <th>Aksi</th>
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
                 <td>
                  <a href="<?php echo base_url("operator/O_siswa/sendMessage/". $broadcast->tele_id) ; ?>" class="btn btn-primary btn-sm" ><i class="fa fa-send-o"></i></a>&nbsp;&nbsp;
                  </td>
                  <!-- <td>
                    <a href="<?php echo base_url('operator/O_siswa/sendMessage') ?>">Send Telegram</a>
                  </td> -->
                 <!--  <td>
                  <a href="https://api.whatsapp.com/send?phone=<?php echo $siswa->telp_siswa ?>&text=Coba
                " target="_blank">WhatsApp</a></td> -->
                <!-- <td>
                  <a href="https://wa.me/whatsappphonenumber/?text=urlencodedtext">WhatApp</a>
                </td> -->
                <!-- <div class="box-body">
                  <form method="post" action="sendMessage.php">
                    <div class="form-group row">
                      <label class="col-md-4 col-form-label">Message</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" name="message_text" placeholder="Masukan Text">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Kirim <i class="fa fa-send"></i></button>
                  </form>
                </div> -->
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Pesan Broadcast</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'operator/O_siswa/tambahBroadcast';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Tele ID </label>
            <input type="text" name="tele_id" placeholder="isikan ID Tele" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Judul Broadcast </label>
            <input type="text" name="judul_broadcast" placeholder="Tuliskan Judul" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Isi Broadcast </label>
            <input type="text" name="isi_broadcast" placeholder="Masukan Pesan" class="form-control" required="required">
          </div>
          
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Kirim </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
