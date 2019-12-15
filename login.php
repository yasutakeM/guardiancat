
<?php include('./components/page_head.php'); ?>
<div class="loginContainer">

  <h2 class="singleLogo--pc">
        <img src="./assets/images/logo2.svg" alt="保護猫"/>
  </h2>


  <section class="loginForm">
        <div class="loginForm__image login__image">
            <h2 class="singleLogo--sp"><img src="./assets/images/logo_white.svg" alt="保護猫"/></h2>
        </div>


    <div class="loginForm__input">
        <div class="loginForm__input--inner">
            <h2 class="title_page">ログイン情報を入力</h2>
            <small>ログイン機能は未実装</small>
        <form method="post" action="#">


                <div class="checkList">

                <label>ユーザー名</label>
                <input name="name" type="text" placeholder="例) ネコタロウ">

                <label>パスワード</label>
                  <input type="password" id="pass" name="password" minlength="4" placeholder="例) sample123" required>
                </div>




            <input class="button" type="submit" value="ログインする" name="login">
        </form>



        </div>
        </div><!--login inner-->


</section>
</div><!--/.logincontainer-->
<ul class="memberLink">
          <li>
                <a href="reset.php">パスワードを忘れた方</a>
              </li>
              <li>
                <a href="entry.php">会員登録はこちら</a>

            </li>
          </ul>

<?php include './components/footer.php' ?>


</body>

</html>
