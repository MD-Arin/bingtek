<?php
    require('../controllers/uploads.php');


    //Section 1 of Fourth Product or Service
    if(isset($_POST['save1_img_1']))
    {
        uploadImages('fourth-ps_content','1-img-1', '1_img_1');
        
        refresh('fourth-ps');
    }
    elseif(isset($_POST['save1_content']))
    {
        uploadImages('fourth-ps_content', '1-p-1', '1_content');

        refresh('fourth-ps');
    }

    //Section 2 of Fourth Product or Service
    elseif(isset($_POST['save2_img_2']))
    {
        if($_POST['2_imgColumn'] == 1)
        {
            uploadImages('fourth-ps_content', '2-img-2', '2_img_2');

            refresh('fourth-ps');
        }
        elseif($_POST['2_imgColumn'] ==2)
        {
            uploadImages('fourth-ps_content', '3-img-1', '2_img_2');

            refresh('fourth-ps');
        }
        else
        {
            refresh('fourth-ps');
        }
    }
    elseif(isset($_POST['save2_point_1']))
    {
        uploadContent('fourth-ps_content', '2-li-1', '2_point_1');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['save2_point_2']))
    {
        uploadContent('fourth-ps_content', '2-li-2','2_point_2');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['save2_point_3']))
    {
        uploadContent('fourth-ps_content', '2-li-3', '2_point_3');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['save2_point_4']))
    {
        uploadContent('fourth-ps_content', '2-li-4', '2_point_4');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['save2_point_5']))
    {
        uploadContent('fourth-ps_content', '2-li-5', '2_point_5');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['save2_heading']))
    {
        uploadContent('fourth-ps_content', '3-h4-1', '2_heading');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['save2_content']))
    {
        uploadContent('first-ps_content', '3-p-1', '2_content');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['2_saveAll']))
    {
        if($_POST['2_imgColumn'] == 1)
        {
            uploadImages('fourth-ps_content', '2-img-2', '2_img_2');
        }
        elseif($_POST['2_imgColumn'] ==2)
        {
            uploadImages('fourth-ps_content', '3-img-1', '2_img_2');
        }
        uploadContent('fourth-ps_content', '2-li-1', '2_point_1');
        uploadContent('fourth-ps_content', '2-li-2', '2_point_2');
        uploadContent('fourth-ps_content', '2-li-3', '2_point_3');
        uploadContent('fourth-ps_content', '2-li-4', '2_point_4');
        uploadContent('fourth-ps_content', '2-li-5', '2_point_5');
        uploadContent('fourth-ps_content', '3-h4-1', '2_heading');
        uploadContent('fourth-ps_content', '3-p-1', '2_content');

        refresh('fourth-ps');
    }

    //Section 3 of Fourth Product or Service
    elseif(isset($_POST['save3_heading']))
    {
        uploadContent('fourth-ps_content', '4-h4-1', '3_heading');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['save3_subHeading']))
    {
        uploadContent('fourth-ps_content', '4-h5-1', '3_subHeading');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['save3_content']))
    {
        uploadContent('fourth-ps_content', '4-p-1', '3_content');

        refresh('fourth-ps');
    }
    elseif(isset($_POST['3_saveAll']))
    {
        uploadContent('fourth-ps_content', '4-h4-1', '3_heading');
        uploadContent('fourth-ps_content', '4-h5-1', '3_subHeading');
        uploadContent('fourth-ps_content', '4-p-1', '3_content');

        refresh('fourth-ps');
    }

    //Section 4 of Fourth Product or Service
    elseif(isset($_POST['save4_img_3']))
    {
        if($_POST['4_imgColumn'] == 1)
        {
            uploadImages('fourth-ps_content', '5-img-1', '4_img_3');

            refresh('fourth-ps');
        }
        elseif($_POST['4_imgColumn'] == 2)
        {
            uploadImages('fourth-ps_content', '5-img-2', '4_img_3');

            refresh('fourth-ps');
        }
        else
        {
            refresh('fourth-ps');
        }
    }
    elseif(isset($_POST['save4_content']))
    {
        if($_POST['4_contentColumn'] == 1)
        {
            uploadContent('fourth-ps_content', '5-p-1', '4_content');

            refresh('fourth-ps');
        }
        elseif($_POST['4_contentColumn'] == 2)
        {
            uploadContent('fourth-ps_content', '5-p-2', '4_content');

            refresh('fourth-ps');
        }
        else
        {
            refresh('fourth-ps');
        }
    }
    else
    {
        refresh('fourth-ps');
    }
?>