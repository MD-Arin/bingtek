<div class="container-fluid">
  <div class="row">
    <hr>
    <h3>Product Or Service Introduction</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <hr class="underline">
      <h2 class="list-group-item-heading text-center"><?php retrieve_data('third-ps_content', '1-h3-1', 'body_content');?></h2>
      <hr class="underline">
      <div class="jumbotron">
        <p class="list-group-item-text text-center">
          <?php retrieve_data('third-ps_content', '1-p-1', 'body_content');?>
        </p>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-third-ps.php" method="post">
          <input class="form-control" name="1_heading" type="text" placeholder="Heading">
          <input class="btn btn-primary" name="save1_heading" type="submit" value="Save">
          <textarea class="form-control margin-top" name="1_content" rows="8" placeholder="Product Introduction Content"></textarea>
          <input class="btn btn-primary" name="save1_content" type="submit" value="Save">
          <br>
          <input class="btn btn-primary margin-top" name="1_saveAll" type="submit" value="Save All">
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <hr>
    <h3>Product Or Service Description</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-third-ps.php" method="post" enctype="multipart/form-data">
          <input class="form-inline btn btn-primary margin-top" name="2_img_1" type="file" value="Upload Image">
          <input class="form-control margin-top" name="2_imgColumn" min="1" max="2" value="1" type="number" placeholder="Image No? of 2">
          <input class="btn btn-primary" name="save2_img_1" type="submit" value="Save Image">
          <br>
          <br>
          <br>
          <div class="row">
            <input class="form-control margin-top" name="2_heading" type="text" placeholder="Heading">
            <input class="btn btn-primary" name="save2_heading" type="submit" value="Save">
            <input class="form-control margin-top" name="2_subHeading" type="text" placeholder="Sub-Heading1">
            <input class="form-control margin-top" name="2_subHeadingColumn" min="1" max="2" value="1" type="number" placeholder="Image No? of 2">
            <input class="btn btn-primary" name="save2_subHeading" type="submit" value="Save">
            <textarea class="form-control margin-top" name="2_content" rows="8" placeholder="Content 1"></textarea>
            <input class="form-control margin-top" name="2_contentColumn" min="1" max="2" value="1" type="number" placeholder="Image No? of 2">
            <input class="btn btn-primary margin-top" name="save2_content" type="submit" value="Save">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <hr>
    <h3>More on the Product or Services</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
            <img src="<?php retrieve_data('third-ps_content', '3-img-2', 'image_url');?>" class="img-thumbnail" />
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-third-ps.php" method="post" enctype="multipart/form-data">
          <input class="form-inline btn btn-primary margin-top" name="3_img_2" type="file" value="Upload Image">
          <input class="form-control margin-top" name="3_imgColumn" type="number" min="1" max="2" value="1" placeholder="Image No? of 2">
          <input class="btn btn-primary" name="save3_img_2" type="submit" value="Save Image">
          <br>
          <br>
          <br>
          <div class="row">
            <input class="form-control margin-top" name="3_heading" type="text" placeholder="Heading">
            <input class="btn btn-primary" name="save3_heading" type="submit" value="Save">
            <input class="form-control margin-top" name="3_subHeading" type="text" placeholder="Sub-Heading">
            <input class="form-control margin-top" name="3_subHeadingColumn" type="number" min="1" max="2" value="1" placeholder="Image No? of 2">
            <input class="btn btn-primary" name="save3_subHeading" type="submit" value="Save">
            <textarea class="form-control margin-top" name="3_content" rows="8" placeholder="Content"></textarea>
            <input class="form-control margin-top" name="3_contentColumn" type="number" min="1" max="2" value="1" placeholder="Image No? of 2">
            <input class="btn btn-primary" name="save3_content" type="submit" value="Save">
        </form>
      </div>
    </div>
    </div>
  </div>
  <div class="row">
    <hr>
    <h3>Final Words on the Product or Service</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="jumbotron">
        <h3 class="text-center"><?php retrieve_data('third-ps_content', '4-h3-1', 'body_content');?></h3>
        <p class="text-center">
          <?php retrieve_data('third-ps_content', '4-p-1', 'body_content');?>
        </p>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-third-ps.php" method="post">
          <input class="form-control margin-top" name="4_heading" type="text" placeholder="Heading">
          <input class="btn btn-primary" name="save4_heading" type="submit" value="Save">
          <textarea class="form-control margin-top" name="4_content" rows="8" placeholder="Content"></textarea>
          <input class="btn btn-primary" name="save4_content" type="submit" value="Save">
          <br>
          <input class="btn btn-primary margin-top" name="4_saveAll" type="submit" value="Save All">
        </form>
      </div>
    </div>
  </div>
</div>
