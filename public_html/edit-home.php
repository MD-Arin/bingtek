<?php require('uploads.php');?>
<?php require('../model/database.php');?>
<?php
  //upload image
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
  elseif (isset($_POST['savePageLink']))
  {
    $pageLink = $_POST['pageLink'];
    update_content('home_content', '1-btn-link', $pageLink);

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
?>
