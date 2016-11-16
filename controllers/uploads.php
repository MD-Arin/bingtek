<?php
require('../model/database.php');

  function uploadImages($table, $section, $fileName)
  {
    $file = $_FILES[$fileName]['name'];
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    //$imageType = pathinfo($target_file, PATHINFO_EXTENSION);

   try
   {
     move_uploaded_file($_FILES[$fileName]['tmp_name'], $target_file);
     update_image($table, $section,$target_file);
   }
   catch (Exception $e)
   {
     $e->message();
   }
  }

  function uploadContent($table, $section, $content)
  {
    try
    {
      $newContent =$_POST[$content];
      update_content($table, $section, $newContent);
    }
    catch (Exception $e)
    {
      $e->message();
    }
  }

  function refresh($page)
  {
    header("location: dashboard.php?q=$page");
  }
?>
