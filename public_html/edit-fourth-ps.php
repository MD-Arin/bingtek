<?php
    require('../controllers/uploads.php');


    //Section 1 of Fourth Product or Service
    if(isset($_POST['save4_img_3']))
    {
        uploadImages('fourth-ps_content','1-img-1', '4_img_3');
        
        refresh('fourth-ps');
    }
    elseif(isset($_POST['save4_content']))
    {
        uploadImages('fourth-ps_content', '1-p-1', '4_content');

        refresh('fourth-ps');
    }

    //Section 2 of Fourth Product or Service
    elseif(isset($_POST['']))
    {
        
    }
?>