<div class="container-fluid">
  <div class="row">
    <hr>
    <h3>Product/Service Edit</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="jumbotron">
        <h1><?php retrieve_data('second-ps_content', '1-h1-jumbotron-1', 'body_content');?></h1>
        <h3><?php retrieve_data('second-ps_content', '1-h3-jumbotron-1', 'body_content');?></h3>
        <p>
          <?php retrieve_data('second-ps_content', '1-p-jumbotron-1', 'body_content');?>
        </p>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="" method="post">
          <input class="form-control margin-top" type="text" placeholder="Product/Service Heading">
          <input class="form-control margin-top" type="text" placeholder="Product/Service Sub-Heading">
          <textarea class="form-control margin-top" rows="8" placeholder="Product/Service Content"></textarea>
          <input class="btn btn-primary margin-top" type="submit" value="Save">
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <hr>
    <h3>More On the Product or Service</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="well-lg">
        <img src="<?php retrieve_data('second-ps_content', '2-img-1', 'image_url');?>" width="100%" height="500px" />
      </div>
      <hr>
        <p class="text-info text-center jumbotron">
          <?php retrieve_data('second-ps_content', '2-p-jumbotron-1', 'body_content');?>
        </p>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <input class="btn btn-primary margin-top text-center" type="file" value="Upload Image">
      <textarea class="form-control margin-top" rows="8" placeholder="Content on the Image"></textarea>
      <input class="btn btn-primary margin-top" type="submit" value="Save">
    </div>
  </div>
  <div class="row">
    <hr>
    <h3>Blockquote Edit</h3>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="blockquote">
            <?php retrieve_data('second-ps_content', '2-p-blockquote-1', 'body_content');?>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="well">
            <img src="<?php retrieve_data('second-ps_content', '2-img-2', 'image_url');?>" class="img-thumbnail" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="" method="post">
          <input class="btn btn-primary margin-top" type="file" value="Upload Image">
          <textarea class="form-control margin-top" rows="8" placeholder="Content"></textarea>
          <input class="btn btn-primary margin-top" type="submit" value="Save">
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
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="row vertical-line-right">
          <h3 class="text-center"><?php retrieve_data('second-ps_content', '3-h3-1', 'body_content');?></h3>
          <hr class="underline">
          <p >
            <?php retrieve_data('second-ps_content', '3-p-2', 'body_content');?>
          </p>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="row vertical-line-left">
          <h3 class="text-center"><?php retrieve_data('second-ps_content', '3-h3-2', 'body_content');?></h3>
          <hr class="underline">
          <p style="margin-left: 20px;">
            <?php retrieve_data('second-ps_content', '3-p-2', 'body_content');?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <form class="" action="" method="post">
          <input class="form-control margin-top" type="text" placeholder="Heading 1">
          <textarea class="form-control margin-top" rows="8" placeholder="First Column Content"></textarea>
          <input class="btn btn-primary margin-top" type="submit" value="Save">
          <input class="form-control margin-top" type="text" placeholder="Heading 2">
          <textarea class="form-control margin-top" rows="8" placeholder="Second Column Content"></textarea>
          <input class="btn btn-primary margin-top" type="submit" value="Save">
        </form>
      </div>
    </div>
  </div>
</div>
