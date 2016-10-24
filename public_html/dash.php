<?php
  require_once('../model/database.php');

  $user = $_POST['username'];
  $pass = $_POST['password'];

  verify_login($user, $pass);
 ?>
