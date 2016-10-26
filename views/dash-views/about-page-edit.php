<div class="container-fluid">
  <div class="row text-center">
    <hr>
    <h1>About History</h1>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <h3 class="text-center"><?php retrieve_data('about_content', '1-h3', 'body_content');?></h3>
      <hr class="underline">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="<?php retrieve_data('about_content','1-img-1','image_url');?>" class="img-thumbnail"/>
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
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <input class="btn btn-lg btn-primary" type="file" value="Upload Image">
        <input class="form-control margin-top" type="text" placeholder="Founding date">
        <input class="form-control margin-top" type="text" placeholder="Founding father">
        <textarea class="form-control margin-top" rows="8" placeholder="How or why the company was founded: The Story"></textarea>
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
                  <img src="<?php retrieve_data('about_content', '2-img-carousel-1', 'image_url');?> " height="500px">
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <img src="<?php retrieve_data('about_content', '2-img-carousel-2', 'image_url');?>" height="500px">
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
          <h4><?php retrieve_data('about_content', '2-h4-1.1', 'image_url');?></h4>
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
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <input class="btn btn-lg btn-primary" type="file" value="Upload 1st Image">
        <input class="form-control margin-top" type="text" placeholder="Year For 1st Accomplishment">
        <input class="form-control margin-top" type="text" placeholder="1st Accomplishment or Milestone">
        <textarea class="form-control margin-top" rows="8" placeholder="The Story: 1st Accomplishment"></textarea>
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
      <hr>
      <form class="" action="" method="post">
        <input class="btn btn-lg btn-primary" type="file" value="Upload 2nd Image">
        <input class="form-control margin-top" type="text" placeholder="Year For 2nd Accomplishment">
        <input class="form-control margin-top" type="text" placeholder="2nd Accomplishment or Milestone">
        <textarea class="form-control margin-top" rows="8" placeholder="The Story: 2nd Accomplishment"></textarea>
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
    </div>
  </div>

  <div class="row text-center">
    <hr>
    <h1>About Testimonials</h1>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <div class="row">
          <input class="btn btn-lg btn-primary" type="file" value="Upload Image">
          <input class="form-control" type="number" placeholder="Column No ? of 4">
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          <textarea class="form-control margin-top" rows="8" placeholder="1st Testimonial message"></textarea>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <input class="form-control margin-top" type="text" placeholder="Name">
          <input class="form-control margin-top" type="text" placeholder="Position">
          <input class="form-control margin-top" type="text" placeholder="Company">
        </div>
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
    </div>
  </div>

  <div class="text-center">
    <hr>
    <h1>About Partners</h1>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <div class="row">
          <input class="btn btn-lg btn-primary" type="file" value="Upload Image">
          <input class="form-control" type="number" placeholder="Partner image No ? of 6">
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <hr>
    <h1 class="text-center">About Team</h1>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form class="" action="" method="post">
        <div class="row">
            <input class="btn btn-lg btn-primary" type="file" value="Upload Image">
            <input class="form-control" type="number" placeholder="Team Column No ? of 3">
        </div>
        <div class="row">
          <input class="form-control margin-top" type="text" placeholder="Name">
          <input class="form-control margin-top" type="text" placeholder="Position">
        </div>
        <input class="btn btn-lg btn-primary margin-top" type="submit" value="Save">
      </form>
    </div>
  </div>
  <hr>
</div>
