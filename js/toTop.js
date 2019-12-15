$(function(){
    //トップへBtn
    var btn_totop = $('.toTop');
    var showFlag = false;
    var topBtn = $('.toTop');
    topBtn.css({'right':'-120px','opacity':'0'});
    var showFlag = false;
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({'right' : '0px','opacity':'1'}, 500);
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({'right' : '-100px','opacity':'0'}, 500);
            }
        }
    });
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
             //トップへBtnがフッターと被った時の処理
            $(window).bind("scroll", function() {
            scrollHeight = $(document).height();
                scrollPosition = $(window).height() + $(window).scrollTop();
            footHeight = $("footer").height();
            if ( scrollHeight - scrollPosition  <= footHeight) {
                $(".toTop").css({"position":"absolute","bottom": "10px","right": "0"});
            }else {
                $(".toTop").css({"position":"fixed","bottom": "30px"});
                }
            });

    //タブ
    $(".tab li").click(function() {
        var index = $(".tab li").index(this);
        $(".tab_content li").css("display","none");
        $(".tab_content li").eq(index).css("display","block");
        $(".tab li").removeClass('select');
        $(this).addClass("select");
        //注意事項 年間・月間の切替
        $(".notedArea02 ul").css("display","none");
        $(".notedArea02 ul").eq(index).css("display","block");	
        $(".notedArea02 ul").removeClass('select');
        $(this).addClass("select");
        //お知らせ表示切替
        $(".test").css("display","block");
        $(".test").eq(index).css("display","none");	
        $(".test").removeClass('select');
        $(this).addClass("select")														
    });
});