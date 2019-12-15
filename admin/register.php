<?php
    require('../db_operation.php');
    $db = new DbOperation();
    $ret = $db->insert($_POST['region'],$_POST['name'],$_POST['age'],$_POST['gender'],$_POST['color'],$_POST['skill'],$_POST['info'],$_POST['image']);
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>登録完了</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/common.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="container">

        <h1><img src="../assets/images/logo_white.svg" alt="保護猫があなたの自宅を厳重警備"></h1>


    <h3 class="finished">
        <?php
            if($ret){
                    echo "新米警備員<span>「".$_POST['name']."」</span>を登録しました。";
                }else{
                    echo "登録できませんでした。";
            }
        ?>
    </h3>


    <ul>
        <li>
            <a href="management.php">登録を続ける</a>
        </li>

        <li>
            <a href="index.php">管理画面トップへ</a>
        </li>
    </ul>
</div>

</body>
</html>
