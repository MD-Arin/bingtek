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
?>
