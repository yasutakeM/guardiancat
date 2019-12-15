<?php
    require('../db_operation.php');
    $db = new DbOperation();    
    $id = $_POST['id'];
    $catInfo = $db->select_cat($id);
    $prefNo = $catInfo['region'];
    $pref = $db->select_region($prefNo);
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
    <h2 class="singleLogo--pc">
        <img src="../assets/images/logo2.svg" alt="保護猫"/>
    </h2>


    <section class="loginForm">
        <div class="loginForm__image">
            <h2 class="singleLogo--sp"><img src="../assets/images/logo_white.svg" alt="保護猫"/></h2>
        </div>
        <div class="loginForm__input">

                <div class="loginForm__input--inner">
                    <form method="post" action="confirm_update.php" enctype="multipart/form-data">

                        <h2 class="title_page"><span><?php print_r($catInfo['name']); ?></span>の情報を更新</h2>
                        <div class="inputCatData">
                            <label>現在地(都道府県)を選択</label>
                            <select name="region" class="selectNormal">
                                <option value="<?php print_r($prefNo); ?>" selected>
                                    <?php print_r($pref['pref']); ?>
                                </option>
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

                            <label>名前</label>
                            <input type="text" name="name" placeholder="例) ネコタロウ" value="<?php print_r($catInfo['name']); ?>">

                            <label>年齢</label>
                            <input type="number" name="age" placeholder="半角数字を入力" value="<?php print_r($catInfo['age']); ?>">

                            <label>性別</label>
                            <fieldset>
                                <ul class="checkList">
                                    <li>
                                        <input type="radio" id="gender_1" value="1" name="gender" <?php if($catInfo['gender']==1){ echo "checked";}?>>
                                        <label for="gender_1">メス</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="gender_2" value="2" name="gender" <?php if($catInfo['gender']==2){ echo "checked";}?>>
                                        <label for="gender_2">オス</label>
                                    </li>
                                </ul>
                            </fieldset>

                            <label>色または模様の特徴</label>
                            <input type="text" name="color" placeholder="例) 茶色" value="<?php print_r($catInfo['color']);?>">

                            <label>特技</label>
                            <input type="text" name="skill" value="<?php print_r($catInfo['skill']);?>">

                            <label>特徴説明</label>
                            <textarea style="height: calc( 1.3em * 5 ); line-height: 1.3;"type="text" name="info" value=""><?php print_r($catInfo['info']);?></textarea>

                            <div class="caution">
                                <label>画像を変更する場合は選択してください</label>
                                <ul class="checkList">
                                    <li>
                                        <input type="file" name="image" style="display: none;">
                                        <input type="hidden" name="image2" value="<?php print_r($catInfo['image']);?>">
                                        <input type="text" name="text" value="選択されていません">
                                    </li>
                                    <li>
                                    <input type="button" name="button" value="ファイルを開く" class="fileUpload">
                                    </li>
                                </ul>
                            </div>

                                <input type="hidden" name="id" value="<?php print_r($catInfo['id']);?>">

                        </div><!--login inner-->

                    <input class="button" type="submit" value="確認する">
                    </form>
                </div><!--input cat data-->
        </div><!--loginForm__input-->
    </section>

</div><!--login container-->





<?php include '../components/footer.php' ?>


<script src="../js/formImage.js"></script>
<script>
    //重複するoptionを削除
    var found = [];
    $("select option").each(function() {
        if($.inArray(this.value, found) != -1) $(this).remove();
        found.push(this.value);
    });
</script>

</body>
</html>
