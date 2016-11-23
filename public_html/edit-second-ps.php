<?php
    require('../controllers/uploads.php');
    if (isset($_POST['save1_heading']))
    {
        uploadContent('second-ps_content', '1-h1-jumbotron-1', '1_heading');

        refresh('second-ps');
    }
    elseif (isset($_POST['save1_subHeading']))
    {
        uploadContent('second-ps_content', '1-h3-jumbotron-1', '1_subHeading');

        refresh('second-ps');
    }
    elseif (isset($_POST['save1_content']))
    {
        uploadContent('second-ps_content', '1-p-jumbotron-1', '1_content');

        refresh('second-ps');
    }
    elseif (isset($_POST['1_saveAll']))
    {
        uploadContent('second-ps_content', '1-h1-jumbotron-1', '1_heading');
        uploadContent('second-ps_content', '1-h3-jumbotron-1', '1_subHeading');
        uploadContent('second-ps_content', '1-p-jumbotron-1', '1_content');

        refresh('second-ps');
    }
    elseif (isset($_POST['save2_img_1']))
    {
        uploadImages('second-ps_content', '2-img-1', '2_img_1');

        refresh('second-ps');
    }
    elseif (isset($_POST['save2_content']))
    {
        uploadContent('second-ps_content', '2-p-jumbotron-1', '2_content');

        refresh('second-ps');
    }
    elseif (isset($_POST['2_saveAll']))
    {
        uploadImages('second-ps_content', '2-img-1', '2_img_1');
        uploadContent('second-ps_content', '2-p-jumbotron-1', '2_content');

        refresh('second-ps');
    }
    elseif (isset($_POST['save3_img_2']))
    {
        uploadImages('second-ps_content', '2-img-2', '3_img_2');

        refresh('second-ps');
    }
    elseif (isset($_POST['save3_content']))
    {
        uploadContent('second-ps_content', '2-p-blockquote-1', '3_content');

        refresh('second-ps');
    }
    elseif (isset($_POST['3_saveAll']))
    {
        uploadImages('second-ps_content', '2-img-2', '3_img_2');
        uploadContent('second-ps_content', '2-p-blockquote-1', '3_content');

        refresh('second-ps');
    }
    elseif (isset($_POST['save4_heading']))
    {
        if($_POST['4_headingColumn'] == 1)
        {
            uploadContent('second-ps_content', '3-h3-1', '4_heading');

            refresh('second-ps');
        }
        elseif ($_POST['4_headingColumn'] == 2)
        {
            uploadContent('second-ps_content', '3-h3-2', '4_heading');

            refresh('second-ps');
        }
        else
        {
            refresh('second-ps');
        }
    }
    elseif (isset($_POST['save4_text']))
    {
        if ($_POST['4_textColumn'] == 1)
        {
            uploadContent('second-ps_content', '3-p-1', '4_text');

            refresh('second-ps');
        }
        elseif ($_POST['4_textColumn'] == 2)
        {
            uploadContent('second-ps_content', '3-p-2', '4_text');

            refresh('second-ps');
        }
        else
        {
            refresh('second-ps');
        }
    }
    else
    {
        refresh('second-ps');
    }
 ?>
