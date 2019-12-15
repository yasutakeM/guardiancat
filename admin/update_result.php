<?php
    require('../db_operation.php');
    $db = new DbOperation();
    $ret = $db->cat_data_retouch($_POST['id'],$_POST['region'],$_POST['name'],$_POST['age'],$_POST['gender'],$_POST['color'],$_POST['skill'],$_POST['info'],$_POST['image']);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>更新完了</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <link href="../assets/css/reset.css" rel="stylesheet">
    <link href="../assets/css/common.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>


<body>
    <div class="managementMenu update_result">
        <h2 class="singleLogo--pc">
            <img src="../assets/images/logo2.svg" alt="保護猫があなたの自宅を厳重警備"/>
        </h2>
        <h3 class="title_page">
            <?php
                if($ret){
                        echo "<span>".$_POST['name']."</span>の情報を更新しました。";
                    }else{
                        echo "登録できませんでした。";
                }
            ?>
        </h3>

        <h2>管理者メニュー</h2>
        <ul class="checkList">
            <li>
                <a href="management.php">登録</a>
                新ネコ情報を登録
            </li>

            <li>
                <a href="regist_list.php">
                    更新/削除
                </a>
                登録情報の更新、削除
            </li>
        </ul>
    </div>

<?php include '../components/footer.php' ?>



</body>
</html>
