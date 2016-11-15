<?php require('../controllers/uploads.php');?>

<?php
//Saving section 1 of about
  if(isset($_POST['save1_img_1']))
  {
    $file = $_FILES['1_img_1']['name'];
    uploadImages('about_content', '1-img-1',$file);

    refresh('about');
  }
  elseif(isset($_POST['save1_founding_date']))
  {
    $founding_date = $_POST['1_founding_date'];
    uploadContent('about_content', '1-h4-1', $founding_date);

    refresh('about');
  }
  elseif(isset($_POST['save1_founder']))
  {
    $founder =$_POST['1_founder'];
    uploadContent('about_content', '1-h4-2', $founder);

    refresh('about');
  }
  elseif (isset($_POST['save1_story']))
  {
    $story = $_POST['1_story'];
    uploadContent('about_content', '1-p', $story);

    refresh('about');
  }
  elseif(isset($_POST['1_saveAll']))
  {
    $file = $_FILES['1_img_1']['name'];
    $founding_date = $_POST['1_founding_date'];
    $founder =$_POST['1_founder'];
    $story = $_POST['1_story'];

    uploadImages('about_content', '1-img-1',$file);
    uploadContent('about_content', '1-h4-1', $founding_date);
    uploadContent('about_content', '1-h4-2', $founder);
    uploadContent('about_content', '1-p', $story);

    refresh('about');
  }

  //Section 2 of About
  elseif (isset($_POST['save2_img_2']))
  {
    $file =$_FILES['2_img_2']['name'];
    uploadImages('about_content','2-img-carousel-1', $file);

    refresh('about');
  }
  elseif (isset($_POST['save2_year_1']))
  {
    $year =$_POST['2_year_1'];
    uploadContent('about_content', '2-h4-1.1', $year);

    refresh('about');
  }
  elseif(isset($_POST['save2_accomplishment_1']))
  {
    $accomplishment = $_POST['2_accomplishment_1'];
    uploadContent('about_content', '2-h4-2.1', $accomplishment);

    refresh('about');
  }
  elseif (isset($_POST['save2_story_1']))
  {
    $story = $_POST['2_story_1'];
    uploadContent('about_content', '2-p-1.1', $story);

    refresh('about');
  }
  elseif (isset($_POST['2_saveAll_1']))
  {
    $file =$_FILES['2_img_2']['name'];
    $year =$_POST['2_year_1'];
    $accomplishment = $_POST['2_accomplishment_1'];
    $story = $_POST['2_story_1'];

    uploadImages('about_content','2-img-carousel-1', $file);
    uploadContent('about_content', '2-h4-1.1', $year);
    uploadContent('about_content', '2-h4-2.1', $accomplishment);
    uploadContent('about_content', '2-p-1.1', $story);

    refresh('about');
  }
  //Section 2.2 about
  elseif (isset($_POST['save2_img_3']))
  {
    $file = $_FILES['2_img_3']['name'];
    uploadImages('about_content', '2-img-carousel-2', $file);

    refresh('about');
  }
  elseif (isset($_POST['save2_year_2']))
  {
    $year = $_POST['2_year_2'];
    uploadContent('about_content', '2-h4-1.2', $year);

    refresh('about');
  }
  elseif(isset($_POST['save2_accomplishment_2']))
  {
    $accoumplishment = $_POST['2_accomplishment_2'];
    uploadContent('about_content', '2-h4-2.2', $accomplishment);

    refresh('about');
  }
  elseif(isset($_POST['save2_story_2']))
  {
    $story = $_POST['2_STORY_2'];
    uploadContent('about_content', '2-p-1.2', $story);

    refresh('about');
  }
  elseif (isset($_POST['2_saveAll_2']))
  {
    $file = $_FILES['2_img_3']['name'];
    $year = $_POST['2_year_2'];
    $accomplishment = $_POST['2_accomplishment_2'];
    $story = $_POST['2_story_2'];

    uploadImages('about_content', '2-img-carousel-2', $file);
    uploadContent('about_content', '2-h4-1.2', $year);
    uploadContent('about_content', '2-h4-2.2', $accomplishment);
    uploadContent('about_content', '2-p-1.2', $story);

    refresh('about');
  }

  //Section 3 of about
 ?>
