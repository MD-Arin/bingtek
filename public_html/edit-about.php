<?php require('../controllers/uploads.php');?>

<?php
//Saving section 1 of about
  if(isset($_POST['save1_img_1']))
  {
    uploadImages('about_content', '1-img-1', '1_img_1');

    refresh('about');
  }
  elseif(isset($_POST['save1_founding_date']))
  {
    uploadContent('about_content', '1-h4-1', '1_founding_date');

    refresh('about');
  }
  elseif(isset($_POST['save1_founder']))
  {
    uploadContent('about_content', '1-h4-2', '1_founder');

    refresh('about');
  }
  elseif (isset($_POST['save1_story']))
  {
    uploadContent('about_content', '1-p', '1_story');

    refresh('about');
  }
  elseif(isset($_POST['1_saveAll']))
  {
    uploadImages('about_content', '1-img-1','1_img_1');
    uploadContent('about_content', '1-h4-1', '1_founding_date');
    uploadContent('about_content', '1-h4-2', '1_founder');
    uploadContent('about_content', '1-p', '1_story');

    refresh('about');
  }

  //Section 2 of About
  elseif (isset($_POST['save2_img_2']))
  {
    uploadImages('about_content','2-img-carousel-1', '2_img_2');

    refresh('about');
  }
  elseif (isset($_POST['save2_year_1']))
  {
    uploadContent('about_content', '2-h4-1.1', '2_year_1');

    refresh('about');
  }
  elseif(isset($_POST['save2_accomplishment_1']))
  {
    uploadContent('about_content', '2-h4-2.1', '2_accomplishment_1');

    refresh('about');
  }
  elseif (isset($_POST['save2_story_1']))
  {
    uploadContent('about_content', '2-p-1.1', '2_story_1');

    refresh('about');
  }
  elseif (isset($_POST['2_saveAll_1']))
  {
    uploadImages('about_content','2-img-carousel-1', '2_img_2');
    uploadContent('about_content', '2-h4-1.1', '2_year_1');
    uploadContent('about_content', '2-h4-2.1', '2_accomplishment_1');
    uploadContent('about_content', '2-p-1.1', '2_story_1');

    refresh('about');
  }
  //Section 2.2 about
  elseif (isset($_POST['save2_img_3']))
  {
    uploadImages('about_content', '2-img-carousel-2', '2_img_3');

    refresh('about');
  }
  elseif (isset($_POST['save2_year_2']))
  {
    uploadContent('about_content', '2-h4-1.2', '2_year_2');

    refresh('about');
  }
  elseif(isset($_POST['save2_accomplishment_2']))
  {
    uploadContent('about_content', '2-h4-2.2', '2_accomplishment_2');

    refresh('about');
  }
  elseif(isset($_POST['save2_story_2']))
  {
    uploadContent('about_content', '2-p-1.2', '2_story_2');

    refresh('about');
  }
  elseif (isset($_POST['2_saveAll_2']))
  {
    uploadImages('about_content', '2-img-carousel-2', '2_img_3');
    uploadContent('about_content', '2-h4-1.2', '2_year_2');
    uploadContent('about_content', '2-h4-2.2', '2_accomplishment_2');
    uploadContent('about_content', '2-p-1.2', '2_story_2');

    refresh('about');
  }

  //Section 3 of about
  elseif(isset($_POST['save4_img_4']))
  {
    if($_POST['4_allImages'] == 1)
    {
      uploadImages('about_content', '3-img-1', '4_img_4' );

      refresh('about');
    }
    elseif($_POST['4_allImages'] == 2)
    {
      uploadImages('about_content', '3-img-2', '4_img_4');

      refresh('about');
    }
    elseif ($_POST['4_allImages'] == 3)
    {
      uploadImages('about_content', '3-img-3', '4_img_4');

      refresh('about');
    }
    elseif($_POST['4_allImages'] == 4)
    {
      uploadImages('about_content', '3-img-4', '4_img_4');

      refresh('about');
    }
  }
  elseif(isset($_POST['4_saveColumn']))
  {
    if($_POST['4_column'] == 1)
    {
      uploadContent('about_content', '3-h5-name-1', '4_name');
      uploadContent('about_content', '3-h5-position-1', '4_position');
      uploadContent('about_content', '3-h5-company-1', '4_company');
      uploadContent('about_content', '3-p-blockquote-1', '4_message');

      refresh('about');
    }
    elseif($_POST['4_column'] == 2)
    {
      uploadContent('about_content', '3-h5-name-2', '4_name');
      uploadContent('about_content', '3-h5-position-2', '4_position');
      uploadContent('about_content', '3-h5-company-2', '4_company');
      uploadContent('about_content', '3-p-blockquote-2', '4_message');
      refresh('about');
    }
    elseif($_POST['4_column'] == 3)
    {
      uploadContent('about_content', '3-h5-name-3', '4_name');
      uploadContent('about_content', '3-h5-position-3', '4_position');
      uploadContent('about_content', '3-h5-company-3', '4_company');
      uploadContent('about_content', '3-p-blockquote-3', '4_message');

      refresh('about');
    }
    elseif($_POST['4_column'] == 4)
    {
      uploadContent('about_content', '3-h5-name-4', '4_name');
      uploadContent('about_content', '3-h5-position-4', '4_position');
      uploadContent('about_content', '3-h5-company-4', '4_company');
      uploadContent('about_content', '3-p-blockquote-4', '4_message');

      refresh('about');
    }
  }
  //Section 5 of about
  elseif (isset($_POST['5_saveImage']))
  {
    if($_POST['5_imageNo'] == 1)
    {
      uploadImages('about_content', '4-img-carousel-1', '5_imgPartners');

      refresh('about');
    }
    elseif($_POST['5_imageNo'] == 2)
    {
      uploadImages('about_content', '4-img-carousel-2', '5_imgPartners');

      refresh('about');
    }
    elseif($_POST['5_imageNo'] == 3)
    {
      uploadImages('about_content', '4-img-carousel-3', '5_imgPartners');

      refresh('about');
    }
    elseif($_POST['5_imageNo'] == 4)
    {
      uploadImages('about_content', '4-img-carousel-4', '5_imgPartners');

      refresh('about');
    }
    elseif($_POST['5_imageNo'] == 5)
    {
      uploadImages('about_content', '4-img-carousel-5', '5_imgPartners');

      refresh('about');
    }
    elseif($_POST['5_imageNo'] == 6)
    {
      uploadImages('about_content', '4-img-carousel-6', '5_imgPartners');

      refresh('about');
    }
  }

  //Section 6 of about
  elseif (isset($_POST['6_saveImage']))
  {
    if($_POST['6_imageColumn'] == 1)
    {
      uploadImages('about_content', '5-img-team-1', '6_imgPerson');

      refresh('about');
    }
    elseif($_POST['6_imageColumn'] == 2)
    {
      uploadImages('about_content', '5-img-team-2', '6_imgPerson');

      refresh('about');
    }
    elseif($_POST['6_imageColumn'] == 3)
    {
      uploadImages('about_content', '5-img-team-3', '6_imgPerson');

      refresh('about');
    }
  }
  elseif (isset($_POST['6_saveColumn']))
  {
    if($_POST['6_column'] == 1)
    {
      uploadContent('about_content', '5-h3-1', '6_name');
      uploadContent('about_content', '5-p-1', '6_position');

      refresh('about');
    }
    elseif ($_POST['6_column'] == 2)
    {
      uploadContent('about_content', '5-h3-2', '6_name');
      uploadContent('about_content', '5-p-2', '6_position');

      refresh('about');
    }
    elseif ($_POST['6_column'] == 3)
    {
      uploadContent('about_content', '5-h3-3', '6_name');
      uploadContent('about_content', '5-p-3', '6_position');

      refresh('about');
    }
  }
 ?>
