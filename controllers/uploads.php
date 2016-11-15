<?php
require('../model/database.php');

  function uploadImages($table,$section,$file)
  {
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    //$imageType = pathinfo($target_file, PATHINFO_EXTENSION);

   try
   {
     move_uploaded_file($_FILES['img_1']['tmp_name'],$target_file);
     update_image($table, $section,$target_file);
   }
   catch (Exception $e)
   {
     $e->message();
   }
  }

  function uploadContent($table, $section, $content)
  {
    try {
      update_content($table, $section, $content);
    } catch (Exception $e) {
      $e->message();
    }
  }

  function refresh($page)
  {
    header("location: dashboard.php?q=$page");
  }
?>
