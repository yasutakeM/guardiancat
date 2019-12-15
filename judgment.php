<?php

require('./db_operation.php');
$db = new DbOperation();

// セッション開始
session_start();


// 既にログインしている場合にはトップに遷移
if (isset($_SESSION['USERID'])) {
    header('Location: index.php');
    exit;
}

$error = '';
// ログインボタンが押されたら
if (isset($_POST['login'])) {

    if (empty($_POST['name'])) {
        $error = 'ユーザーIDが未入力です。';
    }else if (empty($_POST['password'])) {
        $error = 'パスワードが未入力です。';
    }

    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        //idの重複とパスワードの桁数チェック
        function cheak($id,$count){
            if($count > 0){
                throw new Exception('そのユーザーIDは既に使用されています。');
            }
            if ($id < 8) {
                throw new Exception('パスワードは8桁以上で入力してください。');
            }
        }

        try{
        // $sqlname = 'SELECT COUNT(*) FROM users WHERE `name` = '$name'';
        // $ss = $pdo->query($sqlname);
        // $count = $ss->fetchColumn();
        // $id = strlen($_POST['password']);
        // cheak($id,$count);
        // $db->insert_user($_POST['name'],$_POST['password']);
        $ret = $db->insert_user($_POST['name'],$_POST['password']);
        
            $_SESSION['USERID'] = $name;
            echo '<script>
            alert("登録が完了しました。");
            location.href="main.php";
            </script>';
            } catch(Exception $e){
            $error = $e->getMessage();
            }
    }
}
?>



<h3 class="finished">
        <?php
            if($ret){
                echo $_POST['name']."さんの登録を受け付けました";
                }else{
                    echo "登録できませんでした。";
            }
        ?>
</h3>