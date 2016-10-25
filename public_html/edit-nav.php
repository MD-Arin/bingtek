<?php require('../model/database.php');?>
<?php
  if(isset($_POST['coDetails']))
  {
    $name = $_POST['coName'];
    $email = $_POST['coEmail'];
    $phone1 = $_POST['coPhone1'];
    $phone2 = $_POST['coPhone2'];

    update_content('nav_content', '1-h4-company', $name);
    update_content('nav_content', '1-h4-email', $email);
    update_content('nav_content', '1-h4-telephone-1', $phone1);
    update_content('nav_content', '1-h4-telephone-2', $phone2);

    return header('location: dashboard.php?q=nav');
  }
  elseif (isset($_POST['pssave'])) {

    $fps = $_POST['fps'];
    $sps = $_POST['sps'];
    $tps = $_POST['tps'];
    $frthps = $_POST['frthps'];

    update_content('nav_content', '2-ul-li-fps', $fps);
    update_content('nav_content', '2-ul-li-sps', $sps);
    update_content('nav_content', '2-ul-li-tps', $tps);
    update_content('nav_content', '2-ul-li-frthps', $frthps);

    return header('location: dashboard.php?q=nav');
  }
  else
  {
    return header('location: index.php?q=no_contact');
  }
?>
