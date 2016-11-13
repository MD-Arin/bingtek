<?php #require('../model/database.php');?>

<div class="cover-image" style="background: url('<?php retrieve_data('home_content', '1-img', 'image_url');?>'); height: 100%">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center vertical-center">
        <h1 class="text-inverse"><b><?php retrieve_data('home_content','1-h1','body_content');?></b></h1>
        <h3 class="text-inverse"><b><?php retrieve_data('home_content','1-h3','body_content');?></b></h3>
        <br>
        <!--Add a dynamic link to a page-->
        <a href="index.php?q=first-ps" class="btn btn-info">Learn More</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="jumbotron">
    <h1><?php retrieve_data('home_content','2-jumbotron-h1','body_content');?></h1>
    <p><?php retrieve_data('home_content','2-jumbotron-p','body_content');?></p>
    <a href="index.php?q=second-ps" class="btn btn-primary">Learn more</a>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="well well-lg">
        <img src="<?php retrieve_data('home_content','3-well-1-img','image_url');?>" class="img-thumbnail" />
        <h3><?php retrieve_data('home_content', '3-well-1-h3', 'body_content');?></h3>
        <p>
          <?php retrieve_data('home_content', '3-well-1-p', 'body_content');?>
        </p>
        <a href="index.php?q=third-ps" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="well well-lg">
        <img src="<?php retrieve_data('home_content','3-well-2-img','image_url');?>" class="img-thumbnail" />
        <h3><?php retrieve_data('home_content', '3-well-2-h3', 'body_content');?></h3>
        <p>
          <?php retrieve_data('home_content', '3-well-2-p', 'body_content');?>
        </p>
        <a href="index.php?q=fourth-ps" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </div>
</div>

<div class="well well-lg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h1><?php retrieve_data('home_content', '4-well-h1', 'body_content');?></h1>
        <h3><?php retrieve_data('home_content', '4-well-h3', 'body_content');?></h3>
        <p><?php retrieve_data('home_content', '4-well-p', 'body_content');?></p>
      </div>
      <div class="col-md-6">
        <img src="<?php retrieve_data('home_content', '4-img', 'image_url');?>" class="img-thumbnail">
      </div>
    </div>
    <div class="row">
      <hr>
      <h3><?php retrieve_data('home_content', '4-well2-h3', 'body_content');?></h3>
      <p>
        <?php retrieve_data('home_content', '4-well2-p', 'body_content');?>
      </p>
      <hr>
    </div>
  </div>
</div>

<div class="well well-lg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php retrieve_data('home_content', '5-img', 'image_url');?>" class="img-thumbnail">
      </div>
      <div class="col-md-6">
        <h1><?php retrieve_data('home_content', '5-well-h1', 'body_content');?></h1>
        <h3><?php retrieve_data('home_content', '5-well-h3', 'body_content');?></h3>
        <p><?php retrieve_data('home_content', '5-well-p', 'body_content');?></p>
      </div>
    </div>
    <div class="row">
      <hr>
      <h3><?php retrieve_data('home_content', '5-well2-h3', 'body_content');?></h3>
      <p>
        <?php retrieve_data('home_content', '5-well2-p', 'body_content');?>
      </p>
      <hr>
    </div>
  </div>
</div>

</div>
