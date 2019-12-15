

<?php include('./components/page_head.php'); ?>



<div class="loginContainer">
    <h2 class="singleLogo--pc">
        <img src="./assets/images/logo2.svg" alt="保護猫"/>
    </h2>


    <section class="loginForm">
        <div class="loginForm__image entry">
            <h2 class="singleLogo--sp"><img src="./assets/images/logo_white.svg" alt="保護猫"/></h2>
        </div>
        <div class="loginForm__input">
                <div class="loginForm__input--inner">
                <h2 class="title_page">会員登録</h2>
                <small>会員登録機能は未実装</small>
                    <form method="post" action="confirm_entry_regist.php" enctype="multipart/form-data" autocomplete="off">

                        <div class="inputCatData">

                                <label>ユーザー名</label>
                                <input name="name" type="text" autocomplete="off" placeholder="例) ネコタロウ">

                                <label>パスワード</label>
                                <input name="password" type="password" autocomplete="off" placeholder="半角英数4文字以上">

                        </div>
                        <input class="button" type="submit" value="確認する">
                    </form>
                </div>
        </div><!--login inner-->






    </section>

</div><!--login container-->





<?php include './components/footer.php' ?>