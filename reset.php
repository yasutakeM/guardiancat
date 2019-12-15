<?php include('./components/page_head.php'); ?>


<div class="loginContainer">

  <h2 class="singleLogo--pc">
        <img src="./assets/images/logo2.svg" alt="保護猫"/>
  </h2>


  <section class="loginForm">
        <div class="loginForm__image reset__image">
            <h2 class="singleLogo--sp"><img src="./assets/images/logo_white.svg" alt="保護猫"/></h2>
        </div>



<div class="loginForm__input">
<div class="loginForm__input--inner">
            <h2 class="title_page">パスワードリセット</h2>
            <small>リセット機能は未実装</small>

<form method="post" action="result.php">



        <div class="checkList">

        <label>登録メールアドレス</label>
        <input name="email" type="email" placeholder="例) phptest@sample.ne.jp">

        <label>新パスワード</label>
          <input type="password" id="pass" name="password" minlength="8" placeholder="例) sample123" required>

          <label>パスワード確認</label>
            <input type="password" id="pass" name="password" minlength="8" placeholder="例) sample123" required>
        </div>


    <input class="button" type="submit" value="変更する">
</form>

</div>
</div>



</section>
</div><!--/.logincontainer-->

<?php include './components/footer.php' ?>



</body>
  </html>
