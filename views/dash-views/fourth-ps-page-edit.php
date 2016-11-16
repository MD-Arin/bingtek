<div class="container-fluid">
  <div class="row">
    <hr>
    <h3>Product or Service Introduction</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="well-lg">
        <img src="<?php retrieve_data('fourth-ps_content', '1-img-1', 'image_url');?>"  width="100%" height="500px"/>
        <div class="jumbotron text-center">
          <p>
            <?php retrieve_data('fourth-ps_content', '1-p-1', 'body_content');?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-first-ps.php" method="post" enctype="multipart/form-data">
          <input class="btn btn-primary margin-top" type="button" value="Upload Image">
          <textarea class="form-control margin-top" rows="8" placeholder="Content"></textarea>
          <input class="btn btn-primary margin-top" type="submit" value="Save">
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <hr>
    <h3>Pointers on the Product or Service</h3>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="<?php retrieve_data('fourth-ps_content', '2-img-2', 'image_url');?>" class="img-thumbnail" />
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h4><?php retrieve_data('third-ps_content', '2-h4-1', 'image_url');?></h4>
          <ul>
            <li><?php retrieve_data('fourth-ps_content', '2-li-1', 'body_content');?></li>
            <li><?php retrieve_data('fourth-ps_content', '2-li-2', 'body_content');?></li>
            <li><?php retrieve_data('fourth-ps_content', '2-li-3', 'body_content');?></li>
            <li><?php retrieve_data('fourth-ps_content', '2-li-4', 'body_content');?></li>
            <li><?php retrieve_data('fourth-ps_content', '2-li-5', 'body_content');?></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h4><?php retrieve_data('fourth-ps_content', '3-h4-1', 'body_content');?></h4>
          <p>
            <?php retrieve_data('fourth-ps_content', '3-p-1', 'body_content');?>
          </p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="<?php retrieve_data('fourth-ps_content', '3-img-1', 'image_url');?>" class="img-thumbnail" />
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-first-ps.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <input class="btn btn-primary margin-top form-inline" type="file" value="Upload Image">
            <input class="form-control margin-top" type="number" placeholder="Image No? of 2">
          </div>
          <div class="row">
            <input class="form-control margin-top" type="text" placeholder="pointer 1">
            <input class="form-control margin-top" type="text" placeholder="pointer 2">
            <input class="form-control margin-top" type="text" placeholder="pointer 3">
            <input class="form-control margin-top" type="text" placeholder="pointer 4">
            <input class="form-control margin-top" type="text" placeholder="pointer 5">
            <input class="btn btn-primary margin-top" type="submit" value="Save">
            <input class="form-control margin-top" type="text" placeholder="Heading">
            <textarea class="form-control margin-top" rows="8" placeholder="Body Content"></textarea>
            <input class="btn btn-primary margin-top" type="submit" value="Save">
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <hr>
    <h3>More on the Product or Service</h3>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="row">
          <div class="jumbotron">
            <h4 class="text-center"><?php retrieve_data('fourth-ps_content', '4-h4-1', 'body_content');?></h4>
            <h5 class="text-center"><?php retrieve_data('fourth-ps_content', '4-h5-1', 'body_content');?></h5>
            <hr>
            <p class="text-center">
              <?php retrieve_data('fourth-ps_content', '4-p-1', 'body_content');?>
            </p>
          </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-first-ps.php" method="post" enctype="multipart/form-data">
          <input class="form-control margin-top" type="text" placeholder="Heading">
          <input class="form-control margin-top" type="text" placeholder="Sub-Heading">
          <textarea class="form-control margin-top" rows="8" placeholder="Body Content"></textarea>
          <input class="btn btn-primary margin-top" type="submit" value="Save">
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <hr>
    <h3>Product or Service Tagline</h3>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <img src="<?php retrieve_data('fourth-ps_content', '5-img-1', 'image_url');?>" alt="placeholder-0.jpg" class="img-thumbnail" />
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>
          <?php retrieve_data('fourth-ps_content', '5-p-1', 'body_content');?>
        </p>
        <hr>
        <p>
          <?php retrieve_data('fourth-ps_content', '5-p-2', 'body_content');?>
        </p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <img src="<?php retrieve_data('fourth-ps_content', '5-img-2', 'image_url');?>" alt="placeholder-1.jpg" class="img-thumbnail" />
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-first-ps.php" method="post" enctype="multipart/form-data">
          <input class="btn btn-primary margin-top form-inline" type="file" value="Upload Image">
          <input class="form-control margin-top" type="number" placeholder="Image No? of 2">
          <br>
          <br>
          <br>
          <textarea class="form-control margin-top" rows="8" placeholder="Body Content 1"></textarea>
          <textarea class="form-control margin-top" rows="8" placeholder="Body Content 2"></textarea>
          <input class="btn btn-primary margin-top" type="submit" value="Save">
        </form>
      </div>
    </div>
  </div>
</div>
