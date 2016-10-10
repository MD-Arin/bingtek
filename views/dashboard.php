    <div class="container-fluid">
      <div class="row">
        <div class="cols-xs-2 col-sm-2 col-md-2 col-lg-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="#"><a href="">Edit Navigation</a></li>
            <li><a href="dashboard.php?q=nav">Navbar and Top Panel</a></li>
            <li><a href="dashboard.php?q=footer">Footer and Bottom Panel</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Edit Pages</a></li>
            <li><a href="dashboard.php?q=home">Home Page</a></li>
            <li><a href="dashboard.php?q=about">About Page</a></li>
            <li><a href="#">Products and Services</a></li>
              <ul class="nav nav-sidebar">
                <li><a href="dashboard.php?q=first-ps">First Product Page</a></li>
                <li><a href="dashboard.php?q=second-ps">Second Product Page</a></li>
                <li><a href="dashboard.php?q=third-ps">Third Product Page</a></li>
                <li><a href="dashboard.php?q=fourth-ps">Fourth Product Page</a></li>
              </ul>
            <li><a href="dashboard.php?q=contacts">Contacts Page</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Themes</a></li>
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

              case 'bcolor':
                echo "<h1 class='text-center'> comming soon .. </h1>";
                break;

              default:
                require('../views/dash-views/nav-edit.php');
                break;
            }
           ?>
        </div>
      </div>
    </div>
