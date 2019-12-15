<?php
    if($catCount % 10 == 0){
      $total_page = $catCount/10;
    }else{
      $total_page = intdiv($catCount , 10) + 1;
    }

    if (isset($_GET["page"]) && $_GET["page"] > 0 && $_GET["page"] <= $total_page){
      $page = (int)$_GET["page"];
      $get_page = $page * 10 - 10;
    } else {
      $page = 1;
      $get_page = 0;
    }

    $catInfo = $db->get_cats_info($get_page);

?>


