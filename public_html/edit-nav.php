<?php require('../controllers/uploads.php');?>
<?php
  if (isset($_POST['saveCompany']))
  {
    uploadContent('nav_content', '1-h4-company', 'coName');

    refresh('nav');
  }
  elseif (isset($_POST['saveEmail']))
  {
    uploadContent('nav_content', '1-h4-email', 'coEmail');

    refresh('nav');
  }
  elseif (isset($_POST['savePhone1']))
  {
    uploadContent('nav_content', '1-h4-telephone-1', 'coPhone1');

    refresh('nav');
  }
  elseif (isset($_POST['savePhone2']))
  {
    uploadContent('nav_content', '1-h4-telephone-2', 'coPhone2');

    refresh('nav');
  }
  elseif(isset($_POST['coDetails']))
  {
    uploadContent('nav_content', '1-h4-company', 'coName');
    uploadContent('nav_content', '1-h4-email', 'coEmail');
    uploadContent('nav_content', '1-h4-telephone-1', 'coPhone1');
    uploadContent('nav_content', '1-h4-telephone-2', 'coPhone2');

    refresh('nav');
  }
  elseif (isset($_POST['savefps']))
  {
    uploadContent('nav_content', '2-ul-li-fps', 'fps');

    refresh('nav');
  }
  elseif (isset($_POST['savesps']))
  {
    uploadContent('nav_content', '2-ul-li-sps', 'sps');

    refresh('nav');
  }
  elseif (isset($_POST['savetps']))
  {
    uploadContent('nav_content', '2-ul-li-tps', 'tps');

    refresh('nav');
  }
  elseif (isset($_POST['savefrthps']))
  {
    uploadContent('nav_content', '2-ul-li-frthps', 'frthps');

    refresh('nav');
  }
  elseif (isset($_POST['pssave']))
  {
    uploadContent('nav_content', '2-ul-li-fps', 'fps');
    uploadContent('nav_content', '2-ul-li-sps', 'sps');
    uploadContent('nav_content', '2-ul-li-tps', 'tps');
    uploadContent('nav_content', '2-ul-li-frthps', 'frthps');

    refresh('nav');
  }
  else
  {
    refresh('nav');
  }
?>
