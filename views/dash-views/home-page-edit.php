<div class="container-fluid">
  <div class="row">
    <hr>
    <h3>Home Cover Image</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="cover-image" style="background: url('<?php retrieve_data('home_content', '1-img', 'image_url');?>'); height: 100%">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center vertical-center">
              <h1 class="text-inverse"><b><?php retrieve_data('home_content', '1-h1', 'body_content');?></b></h1>
              <h3 class="text-inverse"><b><?php retrieve_data('home_content', '1-h3', 'body_content');?></b></h3>
              <br>
              <a href="#" class="btn btn-info">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="edit-home.php" method="post" enctype="multipart/form-data">
        <input class="btn btn-lg btn-primary" name="img_1" type="file" value="Upload Image">
        <input class="btn btn-primary" name="saveImg_1" type="submit" value="Save Image">
        <input class="form-control margin-top" name="imageHeading" type="text" placeholder="Image Heading">
        <input class="btn btn-primary" type="submit" name="saveImageHeading" value="Save">
        <input class="form-control margin-top" type="text" name="imageSubheading" placeholder="Image Sub-Heading">
        <input class="btn btn-primary" type="submit" name="saveImageSubheading" value="Save">
        <input class="form-control margin-top" type="number" name="pageLink" placeholder="Learn More leads to which product page? Answer From Number 1-4.">
        <input class="btn btn-primary" type="submit" name="savePageLink" value="Save">
        <br>
        <input class="btn btn-lg btn-primary margin-top" name="1_saveAll" type="submit" value="Save All">
      </form>
    </div>
    <hr>
  </div>

  <div class="row">
    <hr>
    <h3>Home Body Content</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="container-fluid">
        <div class="jumbotron">
          <h1><?php retrieve_data('home_content', '2-jumbotron-h1', 'body_content');?></h1>
          <p><?php retrieve_data('home_content', '2-jumbotron-p', 'body_content');?></p>
          <a href="#" class="btn btn-primary">Learn more</a>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <input class="form-control margin-top" type="text" placeholder="Heading">
        <textarea class="form-control margin-top" rows="8" placeholder="Content"></textarea>
        <input class="form-control margin-top" type="number" placeholder="Learn More leads to which product page? Answer From Number 1-4.">
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
  </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="well well-lg">
        <img src="<?php retrieve_data('home_content', '3-well-1-img', 'image_url');?>" class="img-thumbnail" />
        <h3><?php retrieve_data('home_content', '3-well-1-h3', 'image_url');?></h3>
        <p>
          <?php retrieve_data('home_content', '3-well-1-p', 'body_content');?>
        </p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <input class="btn btn-lg btn-primary" type="file" value="Upload Image">
        <input class="form-control margin-top" type="text" placeholder="Image url:">
        <input class="form-control margin-top" type="text" placeholder="Heading">
        <textarea class="form-control margin-top" rows="8" placeholder="Content"></textarea>
        <input class="form-control margin-top" type="number" placeholder="Learn More leads to which product page? Answer From Number 1-4.">
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
    </div>
  </div>
    <hr>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="well well-lg">
        <img src="<?php retrieve_data('home_content', '3-well-2-img', 'image_url');?>" class="img-thumbnail" />
        <h3><?php retrieve_data('home_content', '3-well-2-h3', 'body_content');?></h3>
        <p>
          <?php retrieve_data('home_content', '3-well-2-p', 'body_content');?>
        </p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <input class="btn btn-lg btn-primary" type="file" value="Upload Image">
        <input class="form-control margin-top" type="text" placeholder="Image url:">
        <input class="form-control margin-top" type="text" placeholder="Heading">
        <textarea class="form-control margin-top" rows="8" placeholder="Content"></textarea>
        <input class="form-control margin-top" type="number" placeholder="Learn More leads to which product page? Answer From Number 1-4.">
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="row">
        <div class="col-md-6">
          <h1><?php retrieve_data('home_content', '4-well-h1', 'body_content');?></h1>
          <h3><?php retrieve_data('home_content', '4-well-h3', 'body_content');?></h3>
          <p><?php retrieve_data('home_content', '4-well-p', 'body_content');?></p>
          </div>
          <div class="col-md-6">
            <img src="<?php retrieve_data('home_content', '4-img', 'image_url');?>" class="img-thumbnail">
            <hr>
            <h3><?php retrieve_data('home_content', '4-well2-h3', 'body_content');?></h3>
            <p>
              <?php retrieve_data('home_content', '4-well2-p', 'body_content');?>
            </p>
          </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <input class="btn btn-lg btn-primary margin-top" type="file" value="Upload Image">
        <input class="form-control margin-top" type="text" placeholder="Image URL">
        <input class="form-control margin-top" type="text" placeholder="A title: Content">
        <input class="form-control margin-top" type="text" placeholder="A Subtitle: Content">
        <textarea class="form-control margin-top" rows="8" placeholder="Body Content"></textarea>
        <input class="form-control margin-top" type="text" placeholder="Subtitle 2: Content">
        <textarea class="form-control margin-top" rows="8" placeholder="Subtitle 2 Body Content"></textarea>
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php retrieve_data('home_content', '5-img', 'image_url');?>" class="img-thumbnail">
          <hr>
          <h3><?php retrieve_data('home_content', '5-well2-h3', 'body_content');?></h3>
          <p>
            <?php retrieve_data('home_content', '5-well2-p', 'body_content');?>
          </p>
        </div>
        <div class="col-md-6">
          <h1><?php retrieve_data('home_content', '5-well-h1', 'body_content');?></h1>
          <h3><?php retrieve_data('home_content', '5-well-h3', 'body_content');?></h3>
          <p><?php retrieve_data('home_content', '5-well-p', 'body_content');?></p>
          </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <input class="btn btn-lg btn-primary margin-top" type="file" value="Upload Image">
        <input class="form-control margin-top" type="text" placeholder="Image URL">
        <input class="form-control margin-top" type="text" placeholder="A title: Content">
        <input class="form-control margin-top" type="text" placeholder="A Subtitle: Content">
        <textarea class="form-control margin-top" rows="8" placeholder="Body Content"></textarea>
        <input class="form-control margin-top" type="text" placeholder="Subtitle 2: Content">
        <textarea class="form-control margin-top" rows="8" placeholder="Subtitle 2 Body Content"></textarea>
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
    </div>
  </div>
  <hr>
</div>
