<?php
  function uploadImages($file)
  {
    $target_dir = 'res/images/';
    $target_file = $target_dir . basename($file);
    //$imageType = pathinfo($target_file, PATHINFO_EXTENSION);

   try
   {
     move_uploaded_file($_FILES['img_1']['tmp_name'],$target_file);
   }
   catch (Exception $e)
   {
     $e->message();
   }
  }
?>
