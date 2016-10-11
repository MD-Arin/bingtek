<?php
  if(isset($_POST['send_mail']))
  {
    $msg = $_POST['message'];
    $subject =$_POST['subject'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $sender_email = $_POST['email-address'];
    $email = "graffymint@gmail.com";

    $name = $last_name . " " . $last_name ;
    $message = $name . "<br>" . $sender_email . "<br>" . $msg;

    mail($email, $subject, $message);

    return header("location: ../index.php?q=contacts");
  }
  else
  {
    return header("location: ../index.php?q=no_contact");
  }
 ?>
