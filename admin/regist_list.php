<?php
    require('../db_operation.php');
    $db = new DbOperation();
    $catCount = $db->cat_count();
    require('../get_pagination.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>guardian cat</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <link href="../assets/css/reset.css" rel="stylesheet">
    <link href="../assets/css/common.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>

<?php include '../components/header_management.php' ?>


<!-- <div class="managementMenu">
<h1 class="managementTitle">登録、掲載されている自宅警備員一覧</h1>
</div> -->

<?php require('../components/pagination.php'); ?>


  <div class="contentsArea" style="margin: 0 auto;">

  <h3 class="page_title"><i class="icon--cat tinRightOut"></i>警備員一覧<span><?php echo $page; ?>ページ目</span></h3>
        <ul class="contentsArea__contents">

            <?php foreach ($catInfo as $val) : ?>
                  <li>
                      <a class="<?php if($val['gender']==1){echo "femail"; }else {echo "male";} ?> toDetail">
                          <h3 class="catName"><?php echo $val['name']; ?></h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/<?php echo $val['image']; ?>);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              <?php
                                                $prefNo = $val['region'];
                                                $pref = $db->select_region($prefNo);
                                                print_r($pref['pref']);
                                                ?>
                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div><?php echo $val['age']; ?>歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        <?php                                          
                                          if($val['gender']==1){
                                            echo "メス";
                                          }else {
                                            echo "オス";
                                          }
                                      ?>
                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div><?php echo $val['color']; ?></div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div><?php echo $val['skill']; ?></div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box"><?php echo $val['info']; ?></div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="<?=$val['id']?>">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="<?= $val['name'] ?>">
                                        <input type="hidden" name ="delete" value="<?=$val['id']?>">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
            <?php endforeach; ?>

        </ul>


  </div><!-- //.contentsArea -->


  <?php require('../components/pagination.php'); ?>




  <?php require('../components/footer.php'); ?>



</body>
</html>
