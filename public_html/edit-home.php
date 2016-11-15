<?php require('../controllers/uploads.php');?>
<?php require('../model/database.php');?>
<?php
  //saving section 1 of home
  if(isset($_POST['saveImg_1']))
  {
    $file = $_FILES['img_1']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);
    update_image('home_content', '1-img', $target_file);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['saveImageHeading']))
  {
    $heading = $_POST['imageHeading'];
    update_content('home_content', '1-h1', $heading);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['saveImageSubheading']))
  {
    $subheading = $_POST['imageSubheading'];
    update_content('home_content', '1-h3', $subheading);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['1_saveAll']))
  {
    $file = $_FILES['img_1']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);
    $heading = $_POST['imageHeading'];
    $subheading = $_POST['imageSubheading'];
    $pageLink = $_POST['pageLink'];

    update_image('home_content', '1-img', $target_file);
    update_content('home_content', '1-h1', $heading);
    update_content('home_content', '1-h3', $subheading);
    update_content('home_content', '1-btn-link', $pageLink);

    return header('location: dashboard.php?q=home');
  }

  //Saving section 2 of home
  elseif (isset($_POST['2_saveHeading']))
  {
      $heading = $_POST['2_heading'];
      update_content('home_content', '2-jumbotron-h1', $heading);

      return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['2_saveBody']))
  {
      $body = $_POST['2_body'];
      update_content('home_content', '2-jumbotron-p', $body);

      return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['2_saveAll']))
  {
    $heading = $_POST['2_heading'];
    $body = $_POST['2_body'];

    update_content('home_content', '2-jumbotron-h1', $heading);
    update_content('home_content', '2-jumbotron-p', $body);

    return header('location: dashboard.php?q=home');
  }

  //Saving section 3 of home
  elseif(isset($_POST['save3_img_2']))
  {
    $file = $_FILES['3_img_2']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);
    update_image('home_content', '3-well-1-img', $target_file);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['save3_heading']))
  {
    $heading = $_POST['3_heading'];
    update_content('home_content', '3-well-1-h3', $heading);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['save3_body']))
  {
    $body = $_POST['3_body'];
    update_content('home_content', '3-well-1-p', $body);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['3_saveAll']))
  {
    $file = $_FILES['3_img_2']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);

    $heading = $_POST['3_heading'];
    $body = $_POST['3_body'];

    update_image('home_content', '3-well-1-img', $target_file);
    update_content('home_content', '3-well-1-p', $body);
    update_content('home_content', '3-well-1-h3', $heading);

    return header('location: dashboard.php?q=home');
  }

  //Section 4 of home
  elseif(isset($_POST['save4_img_3']))
  {
    $file= $_FILES['4_img_3']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);

    update_image('home_content', '3-well-2-img', $target_file);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['save4_heading']))
  {
    $heading = $_POST['4_heading'];
    update_content('home_content', '3-well-2-h3', $heading);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['save4_body']))
  {
    $body = $_POST['4_body'];
    update_content('home_content', '3-well-2-p', $body);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['4_saveAll']))
  {
    $file= $_FILES['4_img_3']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);

    $heading = $_POST['4_heading'];
    $body = $_POST['4_body'];

    update_image('home_content', '3-well-2-img', $target_file);
    update_content('home_content', '3-well-2-h3', $heading);
    update_content('home_content', '3-well-2-p', $body);

    return header('location: dashboard.php?q=home');
  }

  //Section 5 of home
  elseif(isset($_POST['save5_img_4']))
  {
    $file = $_FILES['5_img_4']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);

    update_image('home_content', '4-img', $target_file);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['save5_title']))
  {
    $title = $_POST['5_title'];
    update_content('home_content', '4-well-h1', $title);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['save5_subtitle_1']))
  {
    $subtitle1 = $_POST['5_subtitle_1'];
    update_content('home_content', '4-well-h3', $subtitle1);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['save5_body_1']))
  {
    $body1 = $_POST['5_body_1'];
    update_content('home_content','4-well-p', $body1);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['save5_subtitle_2']))
  {
    $subtitle2 = $_POST['5_subtitle_2'];
    update_content('home_content', '4-well2-h3', $subtitle2);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['save5_body_2']))
  {
    $body2 = $_POST['5_body_2'];
    update_content('home_content', '4-well2-p', $body2);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['5_saveAll']))
  {
    $file = $_FILES['5_img_4']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);

    $title = $_POST['5_title'];
    $subtitle1 = $_POST['5_subtitle_1'];
    $body1 = $_POST['5_body_1'];
    $subtitle2 = $_POST['5_subtitle_2'];
    $body2 = $_POST['5_body_2'];

    update_image('home_content', '4-img', $target_file);
    update_content('home_content', '4-well-h1', $title);
    update_content('home_content', '4-well-h3', $subtitle1);
    update_content('home_content','4-well-p', $body1);
    update_content('home_content', '4-well2-h3', $subtitle2);
    update_content('home_content', '4-well2-p', $body2);

    return header('location: dashboard.php?q=home');
  }

  //Section 6 Home
  elseif(isset($_POST['save6_img_5']))
  {
    $file = $_FILES['6_img_5']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);

    update_image('home_content', '5-img', $target_file);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['save6_title']))
  {
    $title = $_POST['6_title'];
    update_content('home_content', '5-well-h1', $title);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['save6_subtitle_1']))
  {
    $subtitle1 = $_POST['6_subtitle_1'];
    update_content('home_content', '5-well-h3', $subtitle1);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['save6_body_1']))
  {
    $body1 = $_POST['6_body_1'];
    update_content('home_content','5-well-p', $body1);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['save6_subtitle_2']))
  {
    $subtitle2 = $_POST['6_subtitle_2'];
    update_content('home_content', '5-well2-h3', $subtitle2);

    return header('location: dashboard.php?q=home');
  }
  elseif (isset($_POST['save6_body_2']))
  {
    $body2 = $_POST['6_body_2'];
    update_content('home_content', '5-well2-p', $body2);

    return header('location: dashboard.php?q=home');
  }
  elseif(isset($_POST['6_saveAll']))
  {
    $file = $_FILES['6_img_5']['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    uploadImages($file);

    $title = $_POST['6_title'];
    $subtitle1 = $_POST['6_subtitle_1'];
    $body1 = $_POST['6_body_1'];
    $subtitle2 = $_POST['6_subtitle_2'];
    $body2 = $_POST['6_body_2'];

    update_image('home_content', '5-img', $target_file);
    update_content('home_content', '5-well-h1', $title);
    update_content('home_content', '5-well-h3', $subtitle1);
    update_content('home_content','5-well-p', $body1);
    update_content('home_content', '5-well2-h3', $subtitle2);
    update_content('home_content', '5-well2-p', $body2);

    return header('location: dashboard.php?q=home');
  }
?>
