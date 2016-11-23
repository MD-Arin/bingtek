<?php 
require('../controllers/uploads.php');
  if(isset($_POST['saveStreet']))
  {
    uploadContent('footer_content', '1-ul-li-street', 'street');

    refresh('footer');
  }
  elseif (isset($_POST['saveBuilding']))
  {
    uploadContent('footer_content', '1-ul-li-building', 'building');

    refresh('footer');
  }
  elseif (isset($_POST['saveFloor']))
  {
    uploadContent('footer_content', '1-ul-li-floor', 'floor');

    refresh('footer');
  }
  elseif (isset($_POST['saveLocation']))
  {
    uploadContent('footer_content', '1-ul-li-street', 'street');
    uploadContent('footer_content', '1-ul-li-building', 'building');
    uploadContent('footer_content', '1-ul-li-floor', 'floor');

    refresh('footer');
  }
  elseif (isset($_POST['saveMap']))
  {
    uploadContent('footer_content', '2-iframe-map', 'iframe');

    refresh('footer');
  }
  else
  {
    refresh('footer');
  }
 ?>
