<?php require('../controllers/uploads.php');?>
<?php
//Section 1 of the First Product Page
  if (isset($_POST['save1_img']))
  {
    if($_POST['1_imgNo'] == 1)
    {
      uploadImages('first-ps_content', '1-img-carousel-1', '1_img');

      refresh('first-ps');
    }
    elseif ($_POST['1_imgNo'] == 2)
    {
      uploadImages('first-ps_content', '1-img-carousel-2', '1_img');

      refresh('first-ps');
    }
    elseif ($_POST['1_imgNo'] == 3)
    {
      uploadImages('first-ps_content', '1-img-carousel-3', '1_img');

      refresh('first-ps');
    }
    else
    {
      refresh('first-ps');
    }
  }
  elseif (isset($_POST['save1_column']))
  {
    if($_POST['1_columnNo'] == 1)
    {
      uploadContent('first-ps_content', '1-carousel-caption-1.1', '1_heading');
      uploadContent('first-ps_content', '1-carousel-caption-1.2', '1_subHeading');

      refresh('first-ps');
    }
    elseif($_POST['1_columnNo'] == 2)
    {
      uploadContent('first-ps_content', '1-carousel-caption-2.1', '1_heading');
      uploadContent('first-ps_content', '1-carousel-caption-2.2', '1_subHeading');

      refresh('first-ps');
    }
    elseif($_POST['1_columnNo'] == 3)
    {
      uploadContent('first-ps_content', '1-carousel-caption-3.1', '1_heading');
      uploadContent('first-ps_content', '1-carousel-caption-3.2', '1_subHeading');

      refresh('first-ps');
    }
    else
    {
      refresh('first-ps');
    }
  }

  //Section 2 of First Product or Service
  elseif (isset($_POST['save2_img_2']))
  {
    uploadImages('first-ps_content', '2-img-1', '2_img_2');

    refresh('first-ps');
  }
  elseif (isset($_POST['save2_features']))
  {
    uploadContent('first-ps_content', '2-h3-1', '2_features');

    refresh('first-ps');
  }
  elseif (isset($_POST['save2_content']))
  {
    uploadContent('first-ps_content', '2-p-1', '2_content');

    refresh('first-ps');
  }
  elseif(isset($_POST['2_saveAll']))
  {
    uploadImages('first-ps_content', '2-img-1', '2_img_2');
    uploadContent('first-ps_content', '2-h3-1', '2_features');
    uploadContent('first-ps_content', '2-p-1', '2_content');

    refresh('first-ps');
  }

  //Section 3 of First Product or Service
  elseif (isset($_POST['save3_img_3']))
  {
    uploadImages('first-ps_content', '2-img-2', '3_img_3');

    refresh('first-ps');
  }
  elseif (isset($_POST['save3_heading']))
  {
    uploadContent('first-ps_content', '2-h3-2', '3_heading');

    refresh('first-ps');
  }
  elseif (isset($_POST['save3_subHeading']))
  {
    uploadContent('first-ps_content', '2-h4-2', '3_subHeading');

    refresh('first-ps');
  }
  elseif (isset($_POST['save3_description']))
  {
    uploadContent('first-ps_content', '2-p-2', '3_description');

    refresh('first-ps');
  }
  elseif (isset($_POST['save3_sellingPoint_1']))
  {
    uploadContent('first-ps_content', '2-ul-li-1', '3_sellingPoint_1');

    refresh('first-ps');
  }
  elseif (isset($_POST['save3_sellingPoint_2']))
  {
    uploadContent('first-ps_content', '2-ul-li-2', '3_sellingPoint_2');

    refresh('first-ps');
  }
  elseif (isset($_POST['save3_sellingPoint_3']))
  {
    uploadContent('first-ps_content', '2-ul-li-3', '3_sellingPoint_3');

    refresh('first-ps');
  }
  elseif (isset($_POST['3_saveAll']))
  {
    uploadImages('first-ps_content', '2-img-2', '3_img_3');
    uploadContent('first-ps_content', '2-h3-2', '3_heading');
    uploadContent('first-ps_content', '2-h4-2', '3_subHeading');
    uploadContent('first-ps_content', '2-p-2', '3_description');
    uploadContent('first-ps_content', '2-ul-li-1', '3_sellingPoint_1');
    uploadContent('first-ps_content', '2-ul-li-2', '3_sellingPoint_2');
    uploadContent('first-ps_content', '2-ul-li-3', '3_sellingPoint_3');

    refresh('first-ps');
  }

  //Section 4 of First Product or Service
  elseif (isset($_POST['save4_img']))
  {
    if($_POST['4_imgNo'] == 1)
    {
      uploadImages('first-ps_content', '3-img-1', '4_img');

      refresh('first-ps');
    }
    elseif ($_POST['4_imgNo'] == 2)
    {
      uploadImages('first-ps_content', '3-img-2', '4_img');

      refresh('first-ps');
    }
    elseif ($_POST['4_imgNo'])
    {
      uploadImages('first-ps_content', '3-img-3', '4_img');

      refresh('first-ps');
    }
    else
    {
      refresh('first-ps');
    }
  }
  elseif (isset($_POST['save4_text']))
  {
    if($_POST['4_textNo'] == 1)
    {
      uploadContent('first-ps_content', '3-p-blockquote-1', '4_text');

      refresh('first-ps');
    }
    elseif ($_POST['4_textNo'] == 2)
    {
      uploadContent('first-ps_content', '3-p-blockquote-2', '4_text');

      refresh('first-ps');
    }
    elseif ($_POST['4_textNo'] == 3)
    {
      uploadContent('first-ps_content', '3-p-blockquote-3', '4_text');

      refresh('first-ps');
    }
    else
    {
      refresh('first-ps');
    }
  }
  else
  {
    refresh('first-ps');
  }
 ?>
