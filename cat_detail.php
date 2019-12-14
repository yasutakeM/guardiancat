<?php 
    require('./db_operation.php');
    $db = new DbOperation();    
    $id = $_GET['id'];
    $catInfo = $db->select_cat($id);
    $prefNo = $catInfo['region'];
    $pref = $db->select_region($prefNo);
?>

<?php include('./components/page_head.php'); ?>

<?php include './components/header.php' ?>

<?php
//テスト表示
//print_r($catInfo);
?>


<div class="topImg" style="background-image: url(./assets/images/catlist/<?php print_r($catInfo['image']); ?>);">
<div class="bg-mask">
  <img src="./assets/images/catlist/<?php print_r($catInfo['image']); ?>">
</div>
</div>



<div class="catDetails">
    <p>詳細情報</p>
    <table class="tbl-r02">
    <tr>
            <th>名前</th>
            <td><?php print_r($catInfo['name']); ?></td>
        </tr>

        <tr>
            <th>色</th>
            <td><?php print_r($catInfo['color']); ?></td>
        </tr>
        <tr>
            <th>掲載日</th>
            <td><?php print_r($catInfo['update_date']); ?></td>
        </tr>
        <tr>
            <th>地域</th>
            <td><?php print_r($pref['pref']); ?></td>
        </tr>

        <tr>
            <th>年齢</th>
            <td><?php print_r($catInfo['age']); ?>歳</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>
            <?php
              if($catInfo['gender']==2){
                echo "オス";
              }else{
                echo "メス";
              }
            ?>
            </td>
        </tr>

        <tr class="last">
            <th>特技</th>
            <td><?php print_r($catInfo['skill']); ?></td>
        </tr>
    </table>

    <div class="comment">
<p><?php print_r($catInfo['name']); ?>の特徴</p>
    <?php print_r($catInfo['info']); ?>
</div>



</div>


<ul class="checkList">
    <li>
        <button onclick="history.back()">戻る</button>
    </li>
    <li>
        <form method="post" action="#">

            <input class="button" type="submit" value="注文する">
        </form>

    </li>
</ul>








<?php include('./components/footer.php'); ?>


</body>

</html>
