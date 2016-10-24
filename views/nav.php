<div class="panel panel-default">
  <div class="row">
    <h4 class="float-left"><?php retrieve_data('nav_content','1-h4-company', 'body_content');?></h4>
    <h4 class="float-right"><?php retrieve_data('nav_content','1-h4-telephone-1', 'body_content');?></h4>
    <h4 class="float-right"><?php retrieve_data('nav_content','1-h4-telephone-2', 'body_content');?></h4>
    <h4 class="float-right"><?php retrieve_data('nav_content','1-h4-email', 'body_content');?></h4>
  </div>
</div>

<div class="container-fluid">
  <hr>
  <ul class="nav nav-tabs nav-justified">
    <li role="presentation"><a href="index.php?q=home"><span class="glyphicon glyphicon-home"> Home</span></a></li>
    <li role="presentation"><a
      href="index.php?q=about"><span class="glyphicon glyphicon-question-sign"> About</span></a></li>
    <li role="presentation" class="dropdown"><a role="button"class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"> Products and Services</span> <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li role="presentation"><a href="index.php?q=first-ps"><span class="glyphicon glyphicon-cog"> <?php retrieve_data('nav_content', '2-ul-li-fps', 'body_content');?></span></a></li>
        <li role="presentation"><a href="index.php?q=second-ps"><span class="glyphicon glyphicon-cog"> <?php retrieve_data('nav_content', '2-ul-li-sps', 'body_content');?></span></a></li>
        <li role="presentation"><a href="index.php?q=third-ps"><span class="glyphicon glyphicon-cog"> <?php retrieve_data('nav_content', '2-ul-li-tps', 'body_content');?></span></a></li>
        <li role="presentation"><a href="index.php?q=fourth-ps"><span class="glyphicon glyphicon-cog"> <?php retrieve_data('nav_content', '2-ul-li-frthps', 'body_content');?></span></a></li>
      </ul>
    </li>
    <li role="presentation"><a href="index.php?q=login"><span class="glyphicon glyphicon-user"> Login</span></a></li>
    <li role="presentation"><a href="index.php?q=contacts"><span class="glyphicon glyphicon-envelope"> Contacts</span></a></li>
  </ul>
</div>
