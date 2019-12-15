
<?php
    $name = $_POST['name'];
    $password = $_POST['password'];
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>入力情報の確認</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <link href="./assets/css/reset.css" rel="stylesheet">
  <link href="./assets/css/common.css" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <script src="/ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
<div class="managementMenu">

<h1 class="managementTitle">登録内容を確認してください</h1>

        <ul class="contentsArea__contents single">

                  <li>
                      <a>
                          <h3 class="catName">ユーザー名: <?php echo $name; ?></h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contents__details">
                                  <ul>

                                    <li>
                                          <div>パスワード</div>
                                          <div><?php echo $password; ?></div>
                                    </li>

                                  </ul>
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->                            
                      </a>
                  </li>
        </ul>

        <ul class="checkList">
    <li>
        <button onClick="history.back()">戻る</button>
    </li>
    <li>
        <form method="post" action="judgment.php">
            <input type="hidden" name="name" value="<?php echo $name ?>">
            <input type="hidden" name="password" value="<?php echo $password ?>">
            <input class="button" type="submit" value="登録する">
        </form>
    </li>
</ul>

</div>







</body>


</html>