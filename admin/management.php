<?php

// セッションの開始
// session_start();

//$region = $_SESSION['region'];
// $name = $_SESSION['name'];
// $age = $_SESSION['age'];
// $gender = $_SESSION['gender'];
// $color = $_SESSION['color'];
// $skill = $_SESSION['skill'];
// $info = $_SESSION['info'];
// $image = $_SESSION['image'];


// // 入力値をセッション変数に格納
// $_SESSION['region'] = $region;
// $_SESSION['name'] = $name;
// $_SESSION['age'] = $age;
// $_SESSION['gender'] = $gender;
// $_SESSION['color'] = $color;
// $_SESSION['skill'] = $skill;
// $_SESSION['info'] = $info;
// $_SESSION['image'] = $image;


?>

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

    <body>
    <?php include '../components/header_management.php' ?>

   

    <div class="loginContainer">
    <h2 class="singleLogo--pc"><img src="../assets/images/logo2.svg" alt="保護猫があなたの自宅を厳重警備"/></h2>
    <section class="loginForm">
        <div class="loginForm__image">
            <h2 class="singleLogo--sp"><img src="../assets/images/logo_white.svg" alt="保護猫"/></h2>
        </div>

        <div class="loginForm__input">

                <div class="loginForm__input--inner">
                <form method="post" action="confirm_regist.php" enctype="multipart/form-data">

<div class="">
    <h2 class="title_page">ねこ情報を入力</h2>
    <div class="inputCatData">

          <label>ねこの現在地(都道府県)を選択</label>
          <select name="region" class="selectNormal">
              <option value="" selected>選択してください</option>
              <option value="0">北海道</option>
              <option value="1">青森県</option>
              <option value="2">岩手県</option>
              <option value="3">宮城県</option>
              <option value="4">秋田県</option>
              <option value="5">山形県</option>
              <option value="6">福島県</option>
              <option value="7">茨城県</option>
              <option value="8">栃木県</option>
              <option value="9">群馬県</option>
              <option value="10">埼玉県</option>
              <option value="11">千葉県</option>
              <option value="12">東京都</option>
              <option value="13">神奈川県</option>
              <option value="14">新潟県</option>
              <option value="15">富山県</option>
              <option value="16">石川県</option>
              <option value="17">福井県</option>
              <option value="18">山梨県</option>
              <option value="19">長野県</option>
              <option value="20">岐阜県</option>
              <option value="21">静岡県</option>
              <option value="22">愛知県</option>
              <option value="23">三重県</option>
              <option value="24">滋賀県</option>
              <option value="25">京都府</option>
              <option value="26">大阪府</option>
              <option value="27">兵庫県</option>
              <option value="28">奈良県</option>
              <option value="29">和歌山県</option>
              <option value="30">鳥取県</option>
              <option value="31">島根県</option>
              <option value="32">岡山県</option>
              <option value="33">広島県</option>
              <option value="34">山口県</option>
              <option value="35">徳島県</option>
              <option value="36">香川県</option>
              <option value="37">愛媛県</option>
              <option value="38">高知県</option>
              <option value="39">福岡県</option>
              <option value="40">佐賀県</option>
              <option value="41">長崎県</option>
              <option value="42">熊本県</option>
              <option value="43">大分県</option>
              <option value="44">宮崎県</option>
              <option value="45">鹿児島県</option>
              <option value="46">沖縄県</option>
          </select>

          <label>ねこの名前</label>
          <input type="text" name="name" placeholder="例) ネコタロウ">

          <label>ねこの年齢</label>
          <input type="number" name="age" placeholder="半角数字を入力">

          <label>ねこの性別</label>
          <fieldset>
              <ul class="checkList">
                  <li>
                      <input type="radio" id="gender_1" value="1" name="gender" checked>
                      <label for="gender_1">メス</label>
                  </li>
                  <li>
                      <input type="radio" id="gender_2" value="2" name="gender">
                      <label for="gender_2">オス</label>
                  </li>
              </ul>
          </fieldset>

          <label>ねこの色または模様の特徴</label>
          <input type="text" name="color" placeholder="例) 茶色">

          <label>ねこの特技</label>
          <input type="text" name="skill">

          <label>ねこの特徴説明</label>
          <textarea style="height: calc( 1.3em * 5 ); line-height: 1.3;"type="text" name="info"></textarea>

          <label>ねこの画像を選択</label>
          <ul class="checkList">
                <li>
                    <input type="file" name="image" style="display: none">
                    <input type="text" name="text" value="選択されていません">
                </li>
                <li>
                    <input type="button" name="button" value="ファイルを開く" class="fileUpload">
                </li>
            </ul>

      </div>

</div>
<input class="button" type="submit" value="確認する">

</form>
                </div>
        </div>
    </section>
</div>


    </div><!--/.container-->

    <script src="../js/formImage.js"></script>
    <?php include '../components/footer.php' ?>


    <script>
$(function(){
	fileUploader();
});
var fileUploader = function(){
	//ラッパーのdiv
	var target = $('.fileUploder');
	
	//イベント割り当て
	target.each(function(){
		//ダミーのテキストフィールド
		var txt = $(this).find('.txt');
		//ファイルアップロードボタン
		var btn = $(this).find('.btn');
		//input[type=file]の実体
		var uploader = $(this).find('.uploader');

		//実体が変更された時
		uploader.bind('change',function(){
			//テキストフィールドに値をいれる
			txt.val($(this).val());
		});

		//ボタンのイベントは無効にしておく
		btn.bind('click',function(event){
			//イベントキャンセル
			event.preventDefault();
			//一応モダンじゃないブラウザ用
			return false;
		});
		
		//ホバー処理（上にかぶせているので反応しないため）
		//ここはデザインの都合上いれている処理のため適宜変更を
		//class切り替えでやったほうがいいです。
		$(this).bind('mouseover',function(){
			btn.css('background-position','0 100%');
		});
		$(this).bind('mouseout',function(){
			btn.css('background-position','0 0');
		});
		
	});
	
}
</script>


    </body>

</html>
