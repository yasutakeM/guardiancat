<?php
    require('../db_operation.php');
    $db = new DbOperation();
    $id = $_POST['delete'];
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

<h2 class="singleLogo--pc"><img src="../assets/images/logo2.svg" alt="保護猫"></h2>


<?php
    $db->cat_data_delete($id);
?>



<ul class="checkList">
<li>
    <a href="management.php">登録</a>
    新ネコ情報を登録
</li>
<li>
<a href="regist_list.php">更新/削除</a>
登録情報の更新、削除
</li>

</ul>

</body>
</html>