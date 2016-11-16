<?php require('../controllers/uploads.php');?>
<?php
  if(isset($_POST['saveMap']))
  {
    uploadContent('contacts_content', '1-iframe','map_code');

    refresh('contacts');
  }
?>
