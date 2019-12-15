<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ねこ登録管理画面</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta discription="">
    <meta keyword="">
    <link href="../assets/css/reset.css" rel="stylesheet">
    <link href="../assets/css/common.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<?php include '../components/header_management.php' ?>

<div class="managementMenu">

    <h2>管理者メニュー</h2>
    <ul class="checkList">
        <li>
            <a href="management.php">登録</a>
            新ネコ情報を登録
        </li>
        <li>

        <a href="regist_list.php">
            <!-- <i><img src="../assets/images/icons/reflesh.png"></i> -->
            更新/削除
        </a>
        登録情報の更新、削除
        </li>
    </ul>

</div>

<?php include '../components/footer.php' ?>



</body>

</html>

