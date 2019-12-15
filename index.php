<?php
    require('db_operation.php');
    $db = new DbOperation();
    $catCount = $db->cat_count();

    require('get_pagination.php');

    if (isset($_SESSION['USERID'])) {
      $username = $_SESSION['USERID'];
    }
?>

<?php include('./components/page_head.php'); ?>

<section class="topAreaWrap">
    <div class="topArea">
        <div class="topArea--inner">
            <a class="topArea--logo" href="index.php">
                <h1><img src="./assets/images/logo_white.svg" alt="保護猫があなたの自宅を厳重警備"></h1>
            </a>

            <div class="topArea__catch">
                <span>優秀な警備員を</span><br>
                <span>家族の一員に</span><br>
                <span>迎えよう</span>
            </div>

            <nav class="topArea__memberResist">
                <a href="login.php">ログイン</a>
                <a href="entry.php">会員登録</a>   
            </nav>
        </div>
    </div>
</section>

<div class="contentsWrap">
  <div class="contentsArea">


      <?php if ($page == 1) : ?>
      <div class="caption"  name="viewArea" id="viewArea">
        <h2>自宅の不甲斐ないセキュリティーに日ごと怯えて過ごす不憫なあなたと"保護猫警備員"を結ぶ、<span>架空のサイトでございます</span></h2>
        <p>会員登録&警備員の要請を行いますと、近日中に警備員があなたの自宅を訪問します。ご自宅に招き入れていただくことで住み込み警備を開始します。<br><span style="color: #ef6464;">＊実際に警備員が派遣されることはありませんのでご注意ください。</spa></p>
      </div>
      <?php endif; ?>

      <form class="media_search header_search" action="#" method="get">
          <div>
              <label class="icon--catsearch">
                  <input type="submit" value=" " class="loupe">
              </label>

              <span>
                  <input class="search_window" type="text" name="search" placeholder="警備員を色で検索" data-autofocus="" autocomplete="off">
              </span>
          </div>
      </form>

      <?php require('./components/pagination.php'); ?>
      <h3 class="page_title"><i class="icon--cat tinRightOut"></i>警備員一覧<span><?php echo $page; ?>ページ目</span></h3>

        <ul class="contentsArea__contents cats">

            <?php foreach ($catInfo as $val) : ?>
                  <li>
                      <a href="cat_detail.php?id=<?php print_r($val['id']); ?>" class="zoomAnimation <?php if($val['gender']==1){echo "femail"; }else {echo "male";} ?>">
                          <h3 class="catName"><?php echo $val['name']; ?></h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(./assets/images/catlist/<?php echo $val['image']; ?>);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>
                                      <li>
                                          <div>掲載</div>
                                          <div><?php echo $val['update_date']; ?></div>
                                      </li>


                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              <?php
                                                $prefNo = $val['region'];
                                                $pref = $db->select_region($prefNo);
                                                print_r($pref['pref']);
                                              ?>
                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div><?php echo $val['age']; ?>歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        <?php
                                          
                                          if($val['gender']==1){
                                            echo "メス";
                                          }else {
                                            echo "オス";
                                          }
                                      ?>
                                      </div>
                                    </li>

                                    <li>
                                        <div>特技</div>
                                        <div><?php echo $val['skill']; ?></div>
                                    </li>

                                  </ul>
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth --> 
                          <?php /* 
                          <div class="box line-3"><?php echo $val['info']; ?></div>
                        */?>
                                              
                      </a>
                  </li>
            <?php endforeach; ?>

        </ul>

        <?php require('./components/pagination.php'); ?>

  </div><!-- //.contentsArea -->

  <?php require('./components/sidebar.php'); ?>
  <div class="toTop">&nbsp;</div>
</div><!-- contntsWrap -->

<?php include './components/footer.php' ?>


<script>

$(window).on('load resize', function(){
    let topAreaHeight = $("section.topArea").height();
    // console.log(topAreaHeight);
    let innerHeight = $("div.topArea--inner").height();
    // console.log(innerHeight);
    let space = topAreaHeight - innerHeight;
    // console.log(space);
    let negativeMargin = - space / 2;
    // console.log(negative);


});

document.addEventListener("click", e => {
    const target = e.target;
    // clickした要素がclass属性、js-smooth-scrollを含まない場合は処理を中断
    if (!target.classList.contains("viewArea")) return;
    e.preventDefault();
    const targetId = target.hash;

    document.querySelector(targetId).scrollIntoView({
        behavior: "smooth",
        block: "start"
    });
});

</script>

<script type="text/javascript" language="javascript" src="./js/toTop.js"></script>

</body>

</html>
