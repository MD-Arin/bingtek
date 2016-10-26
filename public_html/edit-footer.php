<?php require('../model/database.php'); ?>
<?php
  if(isset($_POST['saveStreet']))
  {
    $street = $_POST['street'];
    update_content('footer_content', '1-ul-li-street', $street);

    return header('location: dashboard.php?q=footer');
  }
  elseif (isset($_POST['saveBuilding']))
  {
    $building = $_POST['building'];
    update_content('footer_content', '1-ul-li-building', $building);

    return header('location: dashboard.php?q=footer');
  }
  elseif (isset($_POST['saveFloor']))
  {
    $floor = $_POST['floor'];
    update_content('footer_content', '1-ul-li-floor', $floor);

    return header('location: dashboard.php?q=footer');
  }
  elseif (isset($_POST['saveLocation']))
  {
    $street = $_POST['street'];
    $building = $_POST['building'];
    $floor = $_POST['floor'];

    update_content('footer_content', '1-ul-li-street', $street);
    update_content('footer_content', '1-ul-li-building', $building);
    update_content('footer_content', '1-ul-li-floor', $floor);

    return header('location: dashboard.php?q=footer');
  }
  elseif (isset($_POST['saveMap']))
  {
    $iframe = $_POST['iframe'];
    update_content('footer_content', '2-iframe-map', $iframe);

    return header('location: dashboard.php?q=footer');
  }
 ?>
