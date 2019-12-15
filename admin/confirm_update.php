
<?php
    require('upload.php');

    require('../db_operation.php');
    $db = new DbOperation();
    $id = $_POST['id'];
    $region = $_POST['region'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $color = $_POST['color'];
    $skill = $_POST['skill'];
    $info = $_POST['info'];


    $image= '';
    if(!empty($_FILES['image']['name'])){
      $image = $_FILES['image']['name'];
    }else{
      $image = $_POST['image2'];
    }


  $file_dir = $_SERVER['DOCUMENT_ROOT'] . '/guardiancat/assets/images/catlist/';

    // $file_dir ='/home/users/2/fem.jp-strayoff/web/guardiancat/assets/images/catlist/';
  //  $file_dir = '/Applications/MAMP/htdocs/sample2/assets/images/catlist/';
  //  $file_dir = 'http://strayoff.fem.jp/guardiancat/assets/images/catlist/';
  //  $img_dir   = "./assets/images/catlist/";
   if (is_uploaded_file($_FILES['image']['tmp_name'])){
       move_uploaded_file($_FILES['image']['tmp_name'], $file_dir.$image);
   }
   // move_uploaded_file($_FILES["image"]["tmp_name"], $file_dir.$image);  


   var_dump($_FILES['image']['name']);
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>登録確認</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/common.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>


<body>

<h2 class="singleLogo--pc">
        <img src="../assets/images/logo2.svg" alt="保護猫">
</h2>

<div class="managementMenu">

<h1 class="managementTitle">更新内容を確認してください</h1>

        <ul class="contentsArea__contents single">

                  <li>
                      <a class="<?php if($gender==1){echo "femail"; }else {echo "male";} ?>">
                          <h3 class="catName">名前: <?php echo $name; ?></h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/<?php echo $image; ?>);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>

                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              <?php
                                                $prefNo = $region;
                                                $pref = $db->select_region($prefNo);
                                                print_r($pref['pref']);
                                                ?>
                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div><?php echo $age; ?>歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        <?php
                                          
                                          if($gender==1){
                                            echo "メス";
                                          }else {
                                            echo "オス";
                                          }
                                      ?>
                                      </div>
                                    </li>
                                    <li>
                                        <div>色</div>
                                        <div><?php echo $color; ?></div>
                                    </li>

                                    <li>
                                        <div>特技</div>
                                        <div><?php echo $skill; ?></div>
                                    </li>

                                  </ul>
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->         
                          
                          
                          <div class="box">
                            <p>特徴説明</p>
                            <?php echo $info; ?>
                          </div>

                      </a>
                  </li>
        </ul>







        <ul class="checkList">
          <li>
              <button onClick="history.back()">戻る</button>
          </li>
          <li>
              <form method="post" action="update_result.php">
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <input type="hidden" name="region" value="<?php echo $region ?>">
                  <input type="hidden" name="name" value="<?php echo $name ?>">
                  <input type="hidden" name="age" value="<?php echo $age ?>">
                  <input type="hidden" name="gender" value="<?php echo $gender ?>">
                  <input type="hidden" name="color" value="<?php echo $color ?>">
                  <input type="hidden" name="skill" value="<?php echo $skill ?>">
                  <input type="hidden" name="info" value="<?php echo $info ?>">
                  <input type="hidden" name="image" value="<?php echo $image ?>">

                  <input class="button" type="submit" value="更新する">
              </form>
          </li>
        </ul>

</div>


<?php include '../components/footer.php' ?>



</body>


</html>