<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>bingtek</title>
    <link rel="stylesheet" href="res/css/bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="res/css/custom.css" media="screen" title="no title">
    <link rel="stylesheet" href="res/css/dashboard.css" media="screen" title="no title">
    <link rel="stylesheet" href="res/fonts/*" media="screen" title="no title">
  </head>
  <body>
    <?php require('../views/nav.php'); ?>
    <?php
        switch ($_GET["q"])
        {
          case 'home':
            require('../views/home.php');
            break;
          case 'about':
            require('../views/about.php');
            break;
          case 'first-ps':
            require('../views/first-ps.php');
            break;
          case 'second-ps':
            require('../views/second-ps.php');
            break;
          case 'third-ps':
            require('../views/third-ps.php');
            break;
          case 'fourth-ps':
            require('../views/fourth-ps.php');
            break;
          case 'login':
            require('../views/dash-login.php');
            break;
          case 'contacts':
            require('../views/contacts.php');
            break;
          default:
            require('../views/home.php');
            break;
        }
     ?>
    <?php require('../views/footer.php'); ?>
  </body>
  <script type="text/javascript" src="res/js/jquery.min.js"></script>
  <script type="text/javascript" src="res/js/bootstrap.js"></script>
  <script type="text/javascript" src="res/js/holder.js"></script>
</html>
