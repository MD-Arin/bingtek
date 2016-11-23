<?php require('../controllers/uploads.php');?>
<?php
  //saving section 1 of home
  if(isset($_POST['saveImg_1']))
  {
    uploadImages('home_content', '1-img','img_1');

    refresh('home');
  }
  elseif (isset($_POST['saveImageHeading']))
  {
    uploadContent('home_content', '1-h1', 'imageHeading');

    refresh('home');
  }
  elseif (isset($_POST['saveImageSubheading']))
  {
    uploadContent('home_content', '1-h3', 'imageSubheading');

    refresh('home');
  }
  elseif (isset($_POST['1_saveAll']))
  {
    uploadImages('home_content','1-img','img_1');
    uploadContent('home_content', '1-h1', 'imageHeading');
    uploadContent('home_content', '1-h3', 'imageSubheading');
    uploadContent('home_content', '1-btn-link', 'pageLink');

    refresh('home');
  }

  //Saving section 2 of home
  elseif (isset($_POST['2_saveHeading']))
  {
      uploadContent('home_content', '2-jumbotron-h1', '2_heading');

      refresh('home');
  }
  elseif (isset($_POST['2_saveBody']))
  {
      uploadContent('home_content', '2-jumbotron-p', '2_body');

      refresh('home');
  }
  elseif(isset($_POST['2_saveAll']))
  {
    uploadContent('home_content', '2-jumbotron-h1', '2_heading');
    uploadContent('home_content', '2-jumbotron-p', '2_body');

    refresh('home');
  }

  //Saving section 3 of home
  elseif(isset($_POST['save3_img_2']))
  {
    uploadImages('home_content', '3-well-1-img','3_img_2');

    refresh('home');
  }
  elseif(isset($_POST['save3_heading']))
  {
    uploadContent('home_content', '3-well-1-h3', '3_heading');

    refresh('home');
  }
  elseif(isset($_POST['save3_body']))
  {
    uploadContent('home_content', '3-well-1-p', '3_body');

    refresh('home');
  }
  elseif(isset($_POST['3_saveAll']))
  {
    uploadImages('home_content', '3-well-1-img','3_img_2');
    uploadContent('home_content', '3-well-1-p', '3_body');
    uploadContent('home_content', '3-well-1-h3', '3_heading');

    refresh('home');
  }

  //Section 4 of home
  elseif(isset($_POST['save4_img_3']))
  {
    uploadImages('home_content', '3-well-2-img', '4_img_3');

    refresh('home');
  }
  elseif (isset($_POST['save4_heading']))
  {
    uploadContent('home_content', '3-well-2-h3', '4_heading');

    refresh('home');
  }
  elseif (isset($_POST['save4_body']))
  {
    uploadContent('home_content', '3-well-2-p', '4_body');

    refresh('home');
  }
  elseif (isset($_POST['4_saveAll']))
  {
    uploadImages('home_content', '3-well-2-img','4_img_3');
    uploadContent('home_content', '3-well-2-h3', '4_heading');
    uploadContent('home_content', '3-well-2-p', '4_body');

    refresh('home');
  }

  //Section 5 of home
  elseif(isset($_POST['save5_img_4']))
  {
    uploadImages('home_content', '4-img','5_img_4');

    refresh('home');
  }
  elseif(isset($_POST['save5_title']))
  {
    uploadContent('home_content', '4-well-h1', '5_title');

    refresh('home');
  }
  elseif(isset($_POST['save5_subtitle_1']))
  {
    uploadContent('home_content', '4-well-h3', '5_subtitle_1');

    refresh('home');
  }
  elseif(isset($_POST['save5_body_1']))
  {
    uploadContent('home_content','4-well-p', '5_body_1');

    refresh('home');
  }
  elseif (isset($_POST['save5_subtitle_2']))
  {
    uploadContent('home_content', '4-well2-h3', '5_subtitle_2');

    refresh('home');
  }
  elseif (isset($_POST['save5_body_2']))
  {
    uploadContent('home_content', '4-well2-p', '5_body_2');

    refresh('home');
  }
  elseif(isset($_POST['5_saveAll']))
  {
    uploadContent('home_content', '4-img','5_img_4');
    uploadContent('home_content', '4-well-h1', '5_title');
    uploadContent('home_content', '4-well-h3', '5_subtitle_1');
    uploadContent('home_content','4-well-p', '5_body_1');
    uploadContent('home_content', '4-well2-h3', '5_subtitle_2');
    uploadContent('home_content', '4-well2-p', '5_body_2');

    refresh('home');
  }

  //Section 6 Home
  elseif(isset($_POST['save6_img_5']))
  {
    uploadImages('home_content', '5-img','6_img_5');

    refresh('home');
  }
  elseif(isset($_POST['save6_title']))
  {
    uploadContent('home_content', '5-well-h1', '6_title');

    refresh('home');
  }
  elseif(isset($_POST['save6_subtitle_1']))
  {
    uploadContent('home_content', '5-well-h3', '6_subtitle_1');

    refresh('home');
  }
  elseif(isset($_POST['save6_body_1']))
  {
    uploadContent('home_content','5-well-p', '6_body_1');

    refresh('home');
  }
  elseif (isset($_POST['save6_subtitle_2']))
  {
    uploadContent('home_content', '5-well2-h3', '6_subtitle_2');

    refresh('home');
  }
  elseif (isset($_POST['save6_body_2']))
  {
    uploadContent('home_content', '5-well2-p', '6_body_2');

    refresh('home');
  }
  elseif(isset($_POST['6_saveAll']))
  {
    uploadImages('home_content', '5-img','6_img_5');
    uploadContent('home_content', '5-well-h1', '6_title');
    uploadContent('home_content', '5-well-h3', '6_subtitle_1');
    uploadContent('home_content','5-well-p', '6_body_1');
    uploadContent('home_content', '5-well2-h3', '6_subtitle_2');
    uploadContent('home_content', '5-well2-p', '6_body_2');

    refresh('home');
  }
  else
  {
    refresh('home');
  }
?>
