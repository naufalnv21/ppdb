

<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            <?php echo $title; ?>
          </h1>
          <div class="page-options">
            <p class="text-right"><a href="<?php echo site_url('pendaftar/C_formulir'); ?>"><?php echo $title; ?></a> / <?php echo $subtitle; ?> </p>
          </div>
        </div>
        <?php $this->load->view($content); ?>
    </div>
</div>

