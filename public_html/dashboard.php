<?php require('../model/database.php');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="res/css/bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="res/css/custom.css" media="screen" title="no title">
    <link rel="stylesheet" href="res/css/dashboard.css" media="screen" title="no title">
    <link rel="stylesheet" href="res/fonts/*" media="screen" title="no title">
  </head>
  <body>
    <?php require('../views/nav.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="cols-xs-2 col-sm-2 col-md-2 col-lg-2 sidebar">
          <ul class="nav nav-sidebar">
            <hr>
            <li class="nav nav_table">Edit Navigation and Contacts</li>
            <hr>
            <li><a href="dashboard.php?q=nav">Navbar and Top Panel</a></li>
            <li><a href="dashboard.php?q=footer">Footer and Bottom Panel</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <hr>
            <li>Edit Pages
            <hr>
            <ul>
              <li><a href="dashboard.php?q=home">Home Page</a></li>
              <li><a href="dashboard.php?q=about">About Page</a></li>
              <li><a href="dashboard.php?q=contacts">Contacts Page</a></li>
            <hr>
            <li>Edit Products and Services</li>
            <hr>
            <li><a href="dashboard.php?q=first-ps">First Product Page</a></li>
            <li><a href="dashboard.php?q=second-ps">Second Product Page</a></li>
            <li><a href="dashboard.php?q=third-ps">Third Product Page</a></li>
            <li><a href="dashboard.php?q=fourth-ps">Fourth Product Page</a></li>
            </ul>
            </li>

          </ul>
          <ul class="nav nav-sidebar">
            <hr>
            <li>Themes</li>
            <hr>
            <li><a href="dashboard.php?q=bcolors">Background and Colors</a></li>
          </ul>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 main vertical-line-left">
          <?php
            switch ($_GET["q"])
            {
              case 'nav':
                require('../views/dash-views/nav-edit.php');
                break;

              case 'footer':
                require('../views/dash-views/footer-edit.php');
                break;

              case 'home':
                require('../views/dash-views/home-page-edit.php');
                break;

              case 'about':
                require('../views/dash-views/about-page-edit.php');
                break;

              case 'first-ps':
                require('../views/dash-views/first-ps-page-edit.php');
                break;

              case 'second-ps':
                require('../views/dash-views/second-ps-page-edit.php');
                break;

              case 'third-ps':
                require('../views/dash-views/third-ps-page-edit.php');
                break;

              case 'fourth-ps':
                require('../views/dash-views/fourth-ps-page-edit.php');
                break;

              case 'bcolors':
                echo "<h1 class='text-center'> comming soon .. </h1>";
                break;

              case 'contacts':
                require('../views/dash-views/contacts-page-edit.php');
                break;

              default:
                require('../views/dash-views/nav-edit.php');
                break;
            }
           ?>
        </div>
      </div>
    </div>
    <?php require('../views/footer.php'); ?>
  </body>
  <script type="text/javascript" src="res/js/jquery.min.js"></script>
  <script type="text/javascript" src="res/js/bootstrap.js"></script>
  <script type="text/javascript" src="res/js/holder.js"></script>
</html>
