
<div class="container-fluid">
<hr>
<h1 class="text-center">Our Story</h1>
<hr>
  <div class="row">
    <h3 class="text-center"><?php retrieve_data('about_content', '1-h3', 'body_content');?></h3>
    <hr class="underline">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <img src="res/images/placeholder-0.jpg" class="img-thumbnail"/>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4><?php retrieve_data('about_content', '1-h4-1', 'body_content');?></h4>
      <h4><?php retrieve_data('about_content', '1-h4-2', 'body_content');?></h4>
      <hr>
      <h4>The Story: </h4>
      <hr>
      <p>
        <?php retrieve_data('about_content', '1-p', 'body_content');?>
      </p>
    </div>
  </div>

  <hr>

  <div class="row">
    <h3 class="text-center">Where We've Been</h3>
    <hr class="underline">
    <div class="row">
      <div id="milestone-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#milestone-carousel"  data-slide-to="0" class="active"></li>
          <li data-target="#milestone-carousel"  data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="row">
              <img src="<?php retrieve_data('about_content', '2-img-carousel-1', 'image_url');?>">
            </div>
          </div>
          <div class="item">
            <div class="row">
              <img src="<?php retrieve_data('about_content', '2-img-carousel-2', 'image_url');?>">
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#milestone-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#milestone-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

      <br>
      <br>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4><?php retrieve_data('about_content', '2-h4-1.1', 'body_content');?></h4>
      <h4><?php retrieve_data('about_content', '2-h4-2.1', 'body_content');?></h4>
      <hr>
      <h4>The Story: </h4>
      <hr>
      <p>
        <?php retrieve_data('about_content', '2-p-1.1', 'body_content');?>
      </p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4><?php retrieve_data('about_content', '2-h4-1.2', 'body_content');?></h4>
      <h4><?php retrieve_data('about_content', '2-h4-2.2', 'body_content');?></h4>
      <hr>
      <h4>The Story: </h4>
      <hr>
      <p>
        <?php retrieve_data('about_content', '2-p-1.2', 'body_content');?>
      </p>
    </div>
  </div>
  <br>
  <br>
  <div class="text-center">
    <hr>
    <h1>Testimonials</h1>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="<?php retrieve_data('about_content', '3-img-1', 'image_url');?>" class="img-thumbnail" />
      <p class="blockquote-reverse">
        <?php retrieve_data('about_content', '3-p-blockquote-1', 'body_content');?>
      </p>
      <hr>
      <h5 class="blockquote"><i>Name: <?php retrieve_data('about_content', '3-h5-name-1', 'body_content');?></i></h5>
      <h5 class="blockquote"><i>Position: <?php retrieve_data('about_content', '3-h5-position-1', 'body_content');?></i> </h5>
      <h5 class="blockquote"><i>Company: <?php retrieve_data('about_content', '3-h5-company-1', 'body_content');?></i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="<?php retrieve_data('about_content', '3-img-2', 'image_url');?>" class="img-thumbnail" />
      <p class="blockquote-reverse">
        <?php retrieve_data('about_content', '3-p-blockquote-2', 'body_content');?>
      </p>
      <hr>
      <h5 class="blockquote"><i>Name: <?php retrieve_data('about_content', '3-h5-name-2', 'body_content');?></i></h5>
      <h5 class="blockquote"><i>Position: <?php retrieve_data('about_content', '3-h5-position-2', 'body_content');?></i> </h5>
      <h5 class="blockquote"><i>Company: <?php retrieve_data('about_content', '3-h5-company-2', 'body_content');?></i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="<?php retrieve_data('about_content', '3-img-3', 'image_url');?>" class="img-thumbnail" />
      <p class="blockquote-reverse">
        <?php retrieve_data('about_content', '3-p-blockquote-3', 'body_content');?>
      </p>
      <hr>
      <h5 class="blockquote"><i>Name: <?php retrieve_data('about_content', '3-h5-name-3', 'body_content');?></i></h5>
      <h5 class="blockquote"><i>Position: <?php retrieve_data('about_content', '3-h5-position-3', 'body_content');?></i> </h5>
      <h5 class="blockquote"><i>Company: <?php retrieve_data('about_content', '3-h5-company-3', 'body_content');?></i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="<?php retrieve_data('about_content', '3-img-4', 'image_url');?>" class="img-thumbnail" />
      <p class="blockquote-reverse">
        <?php retrieve_data('about_content', '3-p-blockquote-4', 'body_content');?>
      </p>
      <hr>
      <h5 class="blockquote"><i>Name: <?php retrieve_data('about_content', '3-h5-name-4', 'body_content');?></i></h5>
      <h5 class="blockquote"><i>Position: <?php retrieve_data('about_content', '3-h5-position-4', 'body_content');?></i> </h5>
      <h5 class="blockquote"><i>Company: <?php retrieve_data('about_content', '3-h5-company-4', 'body_content');?></i></h5>
    </div>
  </div>

  <div class="text-center">
    <hr>
    <h1>Partners</h1>
    <hr>
  </div>
  <div class="row">
    <div id="partners-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#partners-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#partners-carousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="<?php retrieve_data('about_content', '4-img-carousel-1', 'image_url');?>" class="img-thumbnail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="<?php retrieve_data('about_content', '4-img-carousel-2', 'image_url');?>" class="img-thumbnail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="<?php retrieve_data('about_content', '4-img-carousel-3', 'image_url');?>" class="img-thumbnail">
        </div>
      </div>
      <div class="item">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="<?php retrieve_data('about_content', '4-img-carousel-4', 'image_url');?>" class="img-thumbnail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="<?php retrieve_data('about_content', '4-img-carousel-5', 'image_url');?>" class="img-thumbnail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="<?php retrieve_data('about_content', '4-img-carousel-6', 'image_url');?>" class="img-thumbnail">
        </div>
      </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#partners-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#partners-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="text-center">
    <hr>
    <h1>Our Team</h1>
    <hr>
  </div>
  <div class="row">
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src="<?php retrieve_data('about_content', '5-img-team-1', 'image_url');?>"
      class="center-block img-circle img-responsive">
      <h3 class="text-center"><?php retrieve_data('about_content', '5-h3-1', 'body_content');?></h3>
      <p class="text-center"><?php retrieve_data('about_content', '5-p-1', 'body_content');?></p>
    </div>
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src="<?php retrieve_data('about_content', '5-img-team-2', 'image_url');?>"
      class="center-block img-circle img-responsive">
      <h3 class="text-center"><?php retrieve_data('about_content', '5-h3-2', 'body_content');?></h3>
      <p class="text-center"><?php retrieve_data('about_content', '5-p-2', 'body_content');?></p>
    </div>
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src="<?php retrieve_data('about_content', '5-img-team-3', 'image_url');?>"
      class="center-block img-circle img-responsive">
      <h3 class="text-center"><?php retrieve_data('about_content', '5-h3-3', 'body_content');?></h3>
      <p class="text-center"><?php retrieve_data('about_content', '5-p-3', 'body_content');?></p>
    </div>
  </div>
</div>
