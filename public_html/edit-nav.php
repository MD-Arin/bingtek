<?php require('../model/database.php');?>
<?php
  if (isset($_POST['saveCompany']))
  {
    $coName = $_POST['coName'];
    update_content('nav_content', '1-h4-company', $coName);

    return header('location: dashboard.php?q=nav');
  }
  elseif (isset($_POST['saveEmail']))
  {
    $coEmail = $_POST['coEmail'];
    update_content('nav_content', '1-h4-email', $coEmail);

    return header('location: dashboard.php?q=nav');
  }
  elseif (isset($_POST['savePhone1']))
  {
    $coPhone1 = $_POST['coPhone1'];
    update_content('nav_content', '1-h4-telephone-1', $coPhone1);

    return header('location: dashboard.php?q=nav');
  }
  elseif (isset($_POST['savePhone2']))
  {
    $coPhone2 = $_POST['coPhone2'];
    update_content('nav_content', '1-h4-telephone-2', $coPhone2);

    return header('location: dashboard.php?q=nav');
  }
  elseif(isset($_POST['coDetails']))
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
  elseif (isset($_POST['savefps']))
  {
    $fps = $_POST['fps'];
    update_content('nav_content', '2-ul-li-fps', $fps);

    return header('location: dashboard.php?q=nav');
  }
  elseif (isset($_POST['savesps']))
  {
    $sps = $_POST['sps'];
    update_content('nav_content', '2-ul-li-sps', $sps);

    return header('location: dashboard.php?q=nav');
  }
  elseif (isset($_POST['savetps']))
  {
    $tps = $_POST['tps'];
    update_content('nav_content', '2-ul-li-tps', $tps);

    return header('location: dashboard.php?q=nav');
  }
  elseif (isset($_POST['savefrthps']))
  {
    $frthps = $_POST['frthps'];
    update_content('nav_content', '2-ul-li-frthps', $frthps);

    return header('location: dashboard.php?q=nav');
  }
  elseif (isset($_POST['pssave']))
  {

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
