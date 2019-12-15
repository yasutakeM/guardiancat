
<?php
     function upload_image(){

    
        //$file_dir = '/Applications/MAMP/htdocs/sample2/assets/images/catlist/';
        $file_dir = 'http://strayoff.fem.jp/guardiancat/assets/images/catlist/';
        // $file_path = $file_dir . $_FILES["image"]["name"];
        $img_dir   = "./assets/images/catlist/";
        // $img_path  = $img_dir. $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], $file_dir.$image);
    }
?>
