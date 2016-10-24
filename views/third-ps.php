<div class="container-fluid">
  <div class="row">
    <div class="container">
      <hr>
      <h2 class="list-group-item-heading text-center"><?php retrieve_data('third-ps_content', '1-h3-1', 'body_content');?></h2>
      <hr>
      <div class="jumbotron">
        <p class="list-group-item-text text-center">
          <?php retrieve_data('third-ps_content', '1-p-1', 'body_content');?>
        </p>
      </div>
    </div>
  </div>

  <div class="row">
    <hr class="underline">
    <h2 class="text-center"><?php retrieve_data('third-ps_content', '2-h2-1', 'body_content');?></h2>
    <hr class="underline">
  </div>

  <div class="row vertical-line-left vertical-line-right">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h3><?php retrieve_data('third-ps_content', '2-h3-1', 'body_content');?></h3>
        <p>
          <?php retrieve_data('third-ps_content', '2-p-1', 'body_content');?>
        </p>
        <img src="<?php retrieve_data('third-ps_content', '2-img-1', 'image_url');?>" class="img-thumbnail" />
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <img src="<?php retrieve_data('third-ps_content', '2-img-2', 'image_url');?>" class="img-thumbnail" />
        <h3><?php retrieve_data('third-ps_content', '2-h3-2', 'body_content');?></h3>
        <p>
          <?php retrieve_data('third-ps_content', '2-p-2', 'body_content');?>
        </p>
    </div>
  </div>

  <div class="row">
    <hr class="underline">
    <h3 class="text-center"><?php retrieve_data('third-ps_content', '3-h2-1', 'body_content');?></h3>
    <hr class="underline">
  </div>

  <div class="row vertical-line-left vertical-line-right">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="<?php retrieve_data('third-ps_content', '3-img-1', 'image_url');?>" class="img-thumbnail" />
        <h3><?php retrieve_data('third-ps_content', '3-h3-1', 'body_content');?></h3>
        <p>
          <?php retrieve_data('third-ps_content', '3-p-1', 'body_content');?>
        </p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h3><?php retrieve_data('third-ps_content', '3-h3-2', 'body_content');?></h3>
        <p>
          <?php retrieve_data('third-ps_content', '3-p-2', 'body_content');?>
        </p>
        <img src="<?php retrieve_data('third-ps_content', '3-img-2', 'body_content');?>" class="img-thumbnail" />
    </div>
  </div>

  <div class="row">
    <div class="jumbotron">
      <hr class="underline">
      <h3 class="text-center"><?php retrieve_data('third-ps_content', '4-h3-1', 'body_content');?></h3>
      <hr class="underline">
      <p class="text-center">
        <?php retrieve_data('third-ps_content', '4-p-1', 'body_content');?>
      </p>
    </div>
  </div>
</div>
