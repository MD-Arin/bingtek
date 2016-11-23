<?php
    require('../controllers/uploads.php');

    //Section 1 of Third Product or Service
    if(isset($_POST['save1_heading']))
    {
        uploadContent('third-ps_content','1-h3-1'.'1_heading');

        refresh('third-ps');
    }
    elseif(isset($_POST['save1_content']))
    {
        uploadContent('third-ps_content', '1-p-1', '1_content');

        refresh('third-ps');
    }
    elseif(isset($_POST['1_saveAll']))
    {
        uploadContent('third-ps_content','1-h3-1'.'1_heading');
        uploadContent('third-ps_content', '1-p-1', '1_content');

        refresh('third-ps');
    }

    //Section 2 of Third Product or Service
    elseif(isset($_POST['save2_img_1']))
    {
        if($_POST['2_imgColumn'] == 1)
        {
            uploadImages('third-ps_content', '2-img-1', '2_img_1');

            refresh('third-ps');
        }
        elseif($_POST['2_imgColumn'] == 2)
        {
            uploadImages('third-ps_content', '2-img-2', '2-img-1');

            refresh('third-ps');
        }
        else
        {
            refresh('third-ps');
        }
    }
    elseif(isset($_POST['save2_heading']))
    {
        uploadContent('third-ps_content', '2-h2-1', '2_heading');

        refresh('third-ps');
    }
    elseif(isset($_POST['save2_subHeading']))
    {
        if($_POST['2_subHeadingColumn'] == 1)
        {
            uploadContent('third-ps_content', '2-h3-1', '2_subHeading');

            refresh('third-ps');
        }
        elseif($_POST['2_subHeadingColumn'] == 2)
        {
            uploadContent('third-ps_content', '2-h3-2', '2_subHeading');

            refresh('third-ps');
        }
        else
        {
            refresh('third-ps');
        }
    }
    elseif(isset($_POST['save2_content']))
    {
        if($_POST['2_contentColumn'] == 1)
        {
            uploadContent('third-ps_content', '2-p-1', '2_content');

            refresh('third-ps');
        }
        elseif($_POST['2_contentColumn'] == 2)
        {
            uploadContent('third-ps_content', '2-p-2', '2_content');

            refresh('third-ps');
        }
        else
        {
            refresh('third-ps');
        }
    }

    //Section 3 of Third Product or Service
    elseif(isset($_POST['save3_img_2']))
    {
        if($_POST['3_imgColumn'] == 1)
        {
            uploadImages('third-ps_content', '3-img-1', '3_img_2');

            refresh('third-ps');
        }
        elseif($_POST['3_imgColumn'] == 2)
        {
            uploadImages('third-ps_content', '3-img-2', '3_img_2');

            refresh('third-ps');
        }
        else
        {
            refresh('third-ps');
        }
    }
    elseif(isset($_POST['save3_heading']))
    {
        uploadContent('third-ps_content', '3-h2-1', '3_heading');

        refresh('third-ps');
    }
    elseif(isset($_POST['save3_subHeading']))
    {
        if($_POST['3_subHeadingColumn'] == 1)
        {
            uploadContent('third-ps_content', '3-h3-1', '3_subHeading');

            refresh('third-ps');
        }
        elseif($_POST['3_subHeadingColumn'] == 2)
        {
            uploadContent('third-ps_content', '3-h3-2', '3_subHeading');

            refresh('third-ps');
        }
        else
        {
            refresh('third-ps');
        }
    }
    elseif(isset($_POST['save3_content']))
    {
        if($_POST['3_contentColumn'] == 1)
        {
            uploadContent('third-ps_content', '3-p-1', '3_content');

            refresh('third-ps');
        }
        elseif($_POST['3_contentColumn'] == 2)
        {
            uploadContent('third-ps_content', '3-p-2', '3_content');

            refresh('third-ps');
        }
        else
        {
            refresh('third-ps');
        }
    }

    //Section 4 of Third Product or Service
    elseif(isset($_POST['save4_heading']))
    {
        uploadContent('third-ps_content', '4-h3-1', '4_heading');

        refresh('third-ps');
    }
    elseif(isset($_POST['save4_content']))
    {
        uploadContent('third-ps_content', '4-p-1', '4_content');

        refresh('third-ps');
    }
    elseif(isset($_POST['4_saveAll']))
    {
        uploadContent('third-ps_content', '4-h3-1', '4_heading');
        uploadContent('third-ps_content', '4-p-1', '4_content');

        refresh('third-ps');   
    }
    else
    {
        refresh('third-ps');
    }


?>