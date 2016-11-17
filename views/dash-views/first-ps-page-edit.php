<div class="container-fluid">
  <hr>
  <h3>Carousel Edit</h3>
  <hr>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div id="first-ps-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#first-ps-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#first-ps-carousel" data-slide-to="1"></li>
          <li data-target="#first-ps-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php retrieve_data('first-ps_content', '1-img-carousel-1', 'image_url');?>" style="height: 80%;">
            <div class="carousel-caption">
              <h3><?php retrieve_data('first-ps_content', '1-carousel-caption-1.1', 'body_content');?></h3>
              <h5><?php retrieve_data('first-ps_content', '1-carousel-caption-1.2', 'body_content');?></h5>
            </div>
          </div>
          <div class="item">
            <img src="<?php retrieve_data('first-ps_content', '1-img-carousel-2', 'image_url');?>" style="height: 80%;">
            <div class="carousel-caption">
              <h3><?php retrieve_data('first-ps_content', '1-carousel-caption-2.1', 'body_content');?></h3>
              <h5><?php retrieve_data('first-ps_content', '1-carousel-caption-2.2', 'body_content');?></h5>
            </div>
          </div>
          <div class="item">
            <img src="<?php retrieve_data('first-ps_content', '1-img-carousel-3', 'image_url');?>" style="height: 80%;">
            <div class="carousel-caption">
              <h3><?php retrieve_data('first-ps_content', '1-carousel-caption-3.1', 'body_content');?></h3>
              <h5><?php retrieve_data('first-ps_content', '1-carousel-caption-3.2', 'body_content');?></h5>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#first-ps-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#first-ps-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="edit-first-ps.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <input class="btn btn-primary form-inline" name="1_img" type="file" value="Upload Image">
          <input class="form-control" name="1_imgNo" type="number" min="1" max="3" value="1" placeholder="Image No? of 3">
          <input class="btn btn-primary" type="submit" name="save1_img" value="Save Image">
        </div>
        <div class="row">
          <input class="form-control margin-top" name="1_heading" type="text"  placeholder="Carousel Heading">
          <input class="form-control margin-top" name="1_subHeading" type="text" placeholder="Carousel Sub-heading">
          <input class="form-control margin-top" name="1_columnNo" type="number" min="1" max="3" value="1" placeholder="Column No? of 3">
          <input class="btn btn-primary margin-top" type="submit" name="save1_column" value="Save Column">
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <hr>
    <h3>Product or Service Feature</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="<?php retrieve_data('first-ps_content', '2-img-1', 'image_url');?>" class="img-thumbnail"/>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h3><?php retrieve_data('first-ps_content', '2-h3-1', 'body_content');?></h3>
        <hr>
        <ul>
          <p>
            <?php retrieve_data('first-ps_content', '2-p-1', 'body_content');?>
          </p>
        </ul>
      </div>`
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-first-ps.php" method="post" enctype="multipart/form-data">
          <input class="btn btn-primary margin-top" name="2_img_2" type="file" value="Upload Image">
          <input class="btn btn-primary" type="submit" name="save2_img_2" value="Save Image">
          <input class="form-control margin-top" name="2_features" type="text" placeholder="Product/Service Feature">
          <input class="btn btn-primary" type="submit" name="save2_features" value="Save">
          <textarea class="form-control margin-top" name="2_content" rows="8" placeholder="Product or Service Content"></textarea>
          <input class="btn btn-primary" type="submit" name="save2_content" value="Save">
          <br>
          <input class="btn btn-primary margin-top" name="2_saveAll" type="submit" value="Save All">
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <hr>
    <h3>More on the Product</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="well-lg">
        <img src="<?php retrieve_data('first-ps_content', '2-img-2', 'image_url');?>" height="500px" width="100%"/>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h3><?php retrieve_data('first-ps_content', '2-h3-2', 'body_content');?></h3>
          <h4><?php retrieve_data('first-ps_content', '2-h4-2', 'body_content');?></h4>
          <hr>
          <p>
            <?php retrieve_data('first-ps_content', '2-p-2', 'body_content');?>
          </p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <br>
          <br>
          <br>
          <br>
          <br>
          <ul class="list-group">
            <li class="list-group-item"><?php retrieve_data('first-ps_content', '2-ul-li-1', 'body_content');?></li>
            <li class="list-group-item"><?php retrieve_data('first-ps_content', '2-ul-li-2', 'body_content');?></li>
            <li class="list-group-item"><?php retrieve_data('first-ps_content', '2-ul-li-3', 'body_content');?></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-first-ps.php" method="post" enctype="multipart/form-data">
          <input class="btn btn-primary margin-top" name="3_img_3" type="file" value="Upload Image">
          <input class="btn btn-primary" type="submit" name="save3_img_3" value="Save Image">
          <input class="form-control margin-top" name="3_heading" type="text" placeholder="Product Heading">
          <input class="btn btn-primary" type="submit" name="save3_heading" value="Save">
          <input class="form-control margin-top" name="3_subHeading" type="text" placeholder="Product Sub-Heading">
          <input class="btn btn-primary" type="submit" name="save3_subHeading" value="Save">
          <textarea class="form-control margin-top" name="3_description" rows="8" placeholder="Product Description"></textarea>
          <input class="btn btn-primary" type="submit" name="save3_description" value="Save">
          <input class="form-control margin-top" name="3_sellingPoint_1" type="text" placeholder="Selling Point 1">
          <input class="btn btn-primary" type="submit" name="save3_sellingPoint_1" value="Save">
          <input class="form-control margin-top" name="3_sellingPoint_2" type="text" placeholder="Selling Point 2">
          <input class="btn btn-primary" type="submit" name="save3_sellingPoint_3" value="Save">
          <input class="form-control margin-top" name="3_sellingPoint_3" type="text" placeholder="Selling Point 3">
          <input class="btn btn-primary" type="submit" name="save3_sellingPoint_4" value="Save">
          <br>
          <input class="btn btn-primary margin-top" name="3_saveAll" type="submit" value="Save All">
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <hr>
    <h3>Product Tag Line</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="well">
          <img src="<?php retrieve_data('first-ps_content', '3-img-1', 'image_url');?>" class="img-thumbnail" />
          <p class="blockquote">
            <br>
            <?php retrieve_data('first-ps_content', '3-p-blockquote-1', 'body_content');?>
          </p>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="well">
          <img src="<?php retrieve_data('first-ps_content', '3-img-2', 'image_url');?>" class="img-thumbnail" />
          <p class="blockquote">
            <br>
            <?php retrieve_data('first-ps_content', '3-p-blockquote-2', 'body_content');?>
          </p>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="well">
          <img src="<?php retrieve_data('first-ps_content', '3-img-3', 'image_url');?>" class="img-thumbnail" />
          <p class="blockquote">
            <br>
            <?php retrieve_data('first-ps_content', '3-p-blockquote-3', 'body_content');?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="edit-first-ps.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <input class="btn btn-primary form-inline margin-top" name="4_img" type="file" value="Upload Image">
            <input class="form-control margin-top" type="number" name="4_imgNo" placeholder="Image No? of 3">
            <input class="btn btn-primary" type="submit" name="save4_img" value="Save Image">
          </div>
          <textarea class="form-control margin-top" name="4_text" rows="8" Placeholder="Column text"></textarea>
          <input class="form-control margin-top" name="4_textNo" type="number" min="1" max="3" value="1" Placeholder="Column No? of 3">
          <input class="btn btn-primary margin-top" name="save4_text" type="submit" value="Save Column">
        </form>
      </div>
    </div>
  </div>
</div>
