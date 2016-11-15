<?php require('../controllers/uploads.php');?>
<?php
  //saving section 1 of home
  if(isset($_POST['saveImg_1']))
  {
    $file = $_FILES['img_1']['name'];
    uploadImages('home_content', '1-img',$file);

    refresh('home');
  }
  elseif (isset($_POST['saveImageHeading']))
  {
    $heading = $_POST['imageHeading'];
    uploadContent('home_content', '1-h1', $heading);

    refresh('home');
  }
  elseif (isset($_POST['saveImageSubheading']))
  {
    $subheading = $_POST['imageSubheading'];
    uploadContent('home_content', '1-h3', $subheading);

    refresh('home');
  }
  elseif (isset($_POST['1_saveAll']))
  {
    $file = $_FILES['img_1']['name'];
    uploadImages('home_content','1-img',$file);

    $heading = $_POST['imageHeading'];
    $subheading = $_POST['imageSubheading'];
    $pageLink = $_POST['pageLink'];

    uploadContent('home_content', '1-h1', $heading);
    uploadContent('home_content', '1-h3', $subheading);
    uploadContent('home_content', '1-btn-link', $pageLink);

    refresh('home');
  }

  //Saving section 2 of home
  elseif (isset($_POST['2_saveHeading']))
  {
      $heading = $_POST['2_heading'];
      uploadContent('home_content', '2-jumbotron-h1', $heading);

      refresh('home');
  }
  elseif (isset($_POST['2_saveBody']))
  {
      $body = $_POST['2_body'];
      uploadContent('home_content', '2-jumbotron-p', $body);

      refresh('home');
  }
  elseif(isset($_POST['2_saveAll']))
  {
    $heading = $_POST['2_heading'];
    $body = $_POST['2_body'];

    uploadContent('home_content', '2-jumbotron-h1', $heading);
    uploadContent('home_content', '2-jumbotron-p', $body);

    refresh('home');
  }

  //Saving section 3 of home
  elseif(isset($_POST['save3_img_2']))
  {
    $file = $_FILES['3_img_2']['name'];
    uploadImages('home_content', '3-well-1-img',$file);

    refresh('home');
  }
  elseif(isset($_POST['save3_heading']))
  {
    $heading = $_POST['3_heading'];
    uploadContent('home_content', '3-well-1-h3', $heading);

    refresh('home');
  }
  elseif(isset($_POST['save3_body']))
  {
    $body = $_POST['3_body'];
    uploadContent('home_content', '3-well-1-p', $body);

    refresh('home');
  }
  elseif(isset($_POST['3_saveAll']))
  {
    $file = $_FILES['3_img_2']['name'];
    uploadImages('home_content', '3-well-1-img',$file);

    $heading = $_POST['3_heading'];
    $body = $_POST['3_body'];

    uploadContent('home_content', '3-well-1-p', $body);
    uploadContent('home_content', '3-well-1-h3', $heading);

    refresh('home');
  }

  //Section 4 of home
  elseif(isset($_POST['save4_img_3']))
  {
    $file= $_FILES['4_img_3']['name'];
    uploadImages('home_content', '3-well-2-img',$file);

    refresh('home');
  }
  elseif (isset($_POST['save4_heading']))
  {
    $heading = $_POST['4_heading'];
    uploadContent('home_content', '3-well-2-h3', $heading);

    refresh('home');
  }
  elseif (isset($_POST['save4_body']))
  {
    $body = $_POST['4_body'];
    uploadContent('home_content', '3-well-2-p', $body);

    refresh('home');
  }
  elseif (isset($_POST['4_saveAll']))
  {
    $file= $_FILES['4_img_3']['name'];
    uploadImages('home_content', '3-well-2-img',$file);

    $heading = $_POST['4_heading'];
    $body = $_POST['4_body'];

    uploadContent('home_content', '3-well-2-h3', $heading);
    uploadContent('home_content', '3-well-2-p', $body);

    refresh('home');
  }

  //Section 5 of home
  elseif(isset($_POST['save5_img_4']))
  {
    $file = $_FILES['5_img_4']['name'];
    uploadImages('home_content', '4-img',$file);

    refresh('home');
  }
  elseif(isset($_POST['save5_title']))
  {
    $title = $_POST['5_title'];
    uploadContent('home_content', '4-well-h1', $title);

    refresh('home');
  }
  elseif(isset($_POST['save5_subtitle_1']))
  {
    $subtitle1 = $_POST['5_subtitle_1'];
    uploadContent('home_content', '4-well-h3', $subtitle1);

    refresh('home');
  }
  elseif(isset($_POST['save5_body_1']))
  {
    $body1 = $_POST['5_body_1'];
    uploadContent('home_content','4-well-p', $body1);

    refresh('home');
  }
  elseif (isset($_POST['save5_subtitle_2']))
  {
    $subtitle2 = $_POST['5_subtitle_2'];
    uploadContent('home_content', '4-well2-h3', $subtitle2);

    refresh('home');
  }
  elseif (isset($_POST['save5_body_2']))
  {
    $body2 = $_POST['5_body_2'];
    uploadContent('home_content', '4-well2-p', $body2);

    refresh('home');
  }
  elseif(isset($_POST['5_saveAll']))
  {
    $file = $_FILES['5_img_4']['name'];
    uploadContent('home_content', '4-img',$file);

    $title = $_POST['5_title'];
    $subtitle1 = $_POST['5_subtitle_1'];
    $body1 = $_POST['5_body_1'];
    $subtitle2 = $_POST['5_subtitle_2'];
    $body2 = $_POST['5_body_2'];

    uploadContent('home_content', '4-well-h1', $title);
    uploadContent('home_content', '4-well-h3', $subtitle1);
    uploadContent('home_content','4-well-p', $body1);
    uploadContent('home_content', '4-well2-h3', $subtitle2);
    uploadContent('home_content', '4-well2-p', $body2);

    refresh('home');
  }

  //Section 6 Home
  elseif(isset($_POST['save6_img_5']))
  {
    $file = $_FILES['6_img_5']['name'];
    uploadImages('home_content', '5-img',$file);

    refresh('home');
  }
  elseif(isset($_POST['save6_title']))
  {
    $title = $_POST['6_title'];
    uploadContent('home_content', '5-well-h1', $title);

    refresh('home');
  }
  elseif(isset($_POST['save6_subtitle_1']))
  {
    $subtitle1 = $_POST['6_subtitle_1'];
    uploadContent('home_content', '5-well-h3', $subtitle1);

    refresh('home');
  }
  elseif(isset($_POST['save6_body_1']))
  {
    $body1 = $_POST['6_body_1'];
    uploadContent('home_content','5-well-p', $body1);

    refresh('home');
  }
  elseif (isset($_POST['save6_subtitle_2']))
  {
    $subtitle2 = $_POST['6_subtitle_2'];
    uploadContent('home_content', '5-well2-h3', $subtitle2);

    refresh('home');
  }
  elseif (isset($_POST['save6_body_2']))
  {
    $body2 = $_POST['6_body_2'];
    uploadContent('home_content', '5-well2-p', $body2);

    refresh('home');
  }
  elseif(isset($_POST['6_saveAll']))
  {
    $file = $_FILES['6_img_5']['name'];
    uploadImages('home_content', '5-img',$file);

    $title = $_POST['6_title'];
    $subtitle1 = $_POST['6_subtitle_1'];
    $body1 = $_POST['6_body_1'];
    $subtitle2 = $_POST['6_subtitle_2'];
    $body2 = $_POST['6_body_2'];

    uploadContent('home_content', '5-well-h1', $title);
    uploadContent('home_content', '5-well-h3', $subtitle1);
    uploadContent('home_content','5-well-p', $body1);
    uploadContent('home_content', '5-well2-h3', $subtitle2);
    uploadContent('home_content', '5-well2-p', $body2);

    refresh('home');
  }
?>
