<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<?php if(defined('_INDEX_')) { ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#quickmenu').stop().animate({top: '782px'},800);
        $(window).scroll(function(){
            if(topPos=$(window).scrollTop() > 690){
                var topPos=$(window).scrollTop()+50;
                $('#quickmenu').stop().animate({top:topPos+"px"},800);
            } else {
                $('#quickmenu').stop().animate({top: '782px'},800);
            }
        });
    })
    </script>
<?php } ?>
    <script type="text/javascript">
        var dep1 = 0;
        var dep2 = 0;
    </script>
    <div id="container">
        <div class="mainvisual_slider">
            <script type="text/javascript" src="/front/js/flexslider/jquery.flexslider.js"></script>
            <link type="text/css" rel="stylesheet" href="/front/js/flexslider/flexslider.css" />
            <?php echo latest3("theme/visual", 'visual', 5, 25, 'cast(wr_1 AS SIGNED),'); ?>
            <script type="text/javascript">
                $(window).load(function() {
                    $('#maincarousel').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        slideshow: false,
                        itemWidth: 200,
                        itemMargin: 0,
                        asNavFor: '#mainslider'
                    });

                    $('#mainslider').flexslider({
                        animation: "fade",
                        slideshow: true,
                        slideshowSpeed: 5000,
                        animationSpeed: 600,
                        directionNav: false,
                        itemWidth: 'auto',
                        controlNav: false,
                        animationLoop: false,
                        sync: "#maincarousel"
                    });
                });
            </script>
        </div>
        <div id="main_cont_container">
            <div class="inner1_wrap clfl">
                <div class="area1_wrap clfl">
                    <div class="fl" style="margin-right: 13px;">
                        <p style="margin-bottom: 20px;"><img src="/front/image/main/area1_tit1.gif" alt=""/></p>
                        <ul class="tab1">
                            <li><img src="/front/image/main/area1_tab1_on.gif" alt=""/></li>
                            <li><img src="/front/image/main/area1_tab2_off.gif" alt=""/></li>
                            <li><img src="/front/image/main/area1_tab3_off.gif" alt=""/></li>
                            <li><img src="/front/image/main/area1_tab4_off.gif" alt=""/></li>
                        </ul>
                    </div>
                    <div class="fl">
                        <ul class="cont1">
                            <li><a href="/recommend/usa.php"><img src="/front/image/main/area1_img1.jpg"/></a></li>
                            <li><a href="/recommend/aus.php"><img src="/front/image/main/area1_img1.jpg"/></a></li>
                            <li><a href="/recommend/uk_art.php"><img src="/front/image/main/area1_img1.jpg"/></a></li>
                            <li><a href="/recommend/uk_rusell.php"><img src="/front/image/main/area1_img1.jpg"/></a></li>
                        </ul>
                    </div>
                </div>
                <div class="area2_wrap">
                    <a class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='https://www.youtube.com/embed/xajnJJ76S94' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/area2_img1.gif" alt=""/></a>
                </div>
                <div class="area3_wrap">
                    <p style="margin-bottom: 18px;"><img src="/front/image/main/area3_img1.gif" alt=""/></p>
                    <a href="/company/info.php"><img src="/front/image/main/area3_btn1.gif" alt=""/></a>
                </div>
            </div>
            <div class="inner2_wrap clfl">
                <div class="area1_wrap clfl">
                    <p class="tit1"><img src="/front/image/main/inner2_area1_tit1.gif" alt=""/></p>
                    <ul class="tab1">
                        <li><img src="/front/image/main/inner2_area1_tab1_on.gif" alt=""/></li>
                        <li><img src="/front/image/main/inner2_area1_tab2_off.gif" alt=""/></li>
                        <li><img src="/front/image/main/inner2_area1_tab3_off.gif" alt=""/></li>
                        <li><img src="/front/image/main/inner2_area1_tab4_off.gif" alt=""/></li>
                        <li><img src="/front/image/main/inner2_area1_tab5_off.gif" alt=""/></li>
                    </ul>
                    <ul class="cont1">
                        <li>
                            <?php echo latest2("theme/ranking", 'ranking', 4, 25, '호주'); ?>
                        </li>
                        <li>
                            <?php echo latest2("theme/ranking", 'ranking', 4, 25, '영국'); ?>
                        </li>
                        <li>
                            <?php echo latest2("theme/ranking", 'ranking', 4, 25, '미국'); ?>
                        </li>
                        <li>
                            <?php echo latest2("theme/ranking", 'ranking', 4, 25, '캐나다'); ?>
                        </li>
                        <li>
                            <?php echo latest2("theme/ranking", 'ranking', 4, 25, '뉴질랜드'); ?>
                        </li>
                    </ul>
                </div>
                <div class="area2_wrap clfl">
                    <?php echo latest("theme/index_tips", 'tips', 6, 25); ?>
                </div>
            </div>
            <div class="inner3_wrap clfl">
                <div class="area1_wrap">
                    <div class="more"><a href="/theme1/food_aus.php"><span>More></span></a></div>
                    <ul class="clfl">
                        <li><a href="/theme1/food_aus.php"><img src="/front/image/main/inner3_area1_btn1_off.png" alt=""/></a></li>
                        <li><a href="/theme1/aviation_aus.php"><img src="/front/image/main/inner3_area1_btn2_off.png" alt=""/></a></li>
                        <li><a href="/theme1/art_aus.php"><img src="/front/image/main/inner3_area1_btn3_off.png" alt=""/></a></li>
                        <li><a href="/theme1/health_aus.php"><img src="/front/image/main/inner3_area1_btn4_off.png" alt=""/></a></li>
                        <li><a href="/theme1/hotel_aus.php"><img src="/front/image/main/inner3_area1_btn5_off.png" alt=""/></a></li>
                        <li><a href="/theme1/it_aus.php"><img src="/front/image/main/inner3_area1_btn6_off.png" alt=""/></a></li>
                    </ul>
                </div>
                <div class="area2_wrap">
                    <a href="/company/info.php"><img src="/front/image/main/inner3_area2_bg.png" alt=""/></a>
                </div>
            </div>
            <div class="inner4_wrap clfl">
                <div class="fl" style="width: 767px;">
                    <div class="area1_wrap">
                        <div class="title clfl">
                            <p><img src="/front/image/main/inner4_area1_tit1.gif" alt=""/></p>
                            <ul class="btns ar" id="b_tab">
                                <li><a href="prev" class="prev"><img src="/front/image/main/inner4_area1_btn1.gif"/></a></li>
                                <li><a href="next" class="next"><img src="/front/image/main/inner4_area1_btn2.gif"/></a></li>
                            </ul>
                        </div>
                        <div class="newsslider">
                            <?php echo latest("theme/index_news", 'news', 6, 25); ?>
                        </div>
                        <script type="text/javascript">
                            $(function() {
                                if($('.newsslider').length > 0) {
                                    $('#b_tab .prev, #b_tab .next').on('click', function(e){
                                        e.preventDefault();

                                        var href = $(this).attr('href');
                                        $('.newsslider').flexslider(href);
                                    });

                                    $('.newsslider').flexslider({
                                        directionNav: false,
                                        controlNav: false,
                                        slideshow: false,
                                        animation: "slide"
                                    });
                                }
                            });
                        </script>
                    </div>
                    <div class="area2_wrap">
                        <?php
                        $bo_table ="schedule";
                        $board_skin_path    = get_skin_path('board', "theme/schedule");
                        $board_skin_url     = get_skin_url('board', "theme/schedule");
                        include_once ($board_skin_path.'/schedule_index.skin.php');
                        ?>
                    </div>
                    <div class="area3_wrap">
                        <?php echo latest("theme/index_review", 'review', 3, 25); ?>
                    </div>
                    <div class="area4_wrap">
                        <?php echo latest("theme/index_qna", 'qna', 3, 25); ?>
                    </div>
                </div>
                <div class="area5_wrap">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.7";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-page" data-href="https://www.facebook.com/idpkorea/?fref=ts" data-tabs="timeline" data-width="222" data-height="449" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/idpkorea/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/idpkorea/?fref=ts">IDP Korea</a></blockquote></div>
                </div>
            </div>
            <div class="inner5_wrap">
                <div class="area1_wrap clfl">
                    <p class="tit1"><img src="/front/image/main/inner6_area1_tit1.gif" alt=""/></p>
                    <ul class="tab1">
                        <li><img src="/front/image/main/inner2_area1_tab1_on.gif" alt=""/></li>
                        <li><img src="/front/image/main/inner2_area1_tab2_off.gif" alt=""/></li>
                        <li><img src="/front/image/main/inner2_area1_tab3_off.gif" alt=""/></li>
                        <li><img src="/front/image/main/inner2_area1_tab4_off.gif" alt=""/></li>
                        <li><img src="/front/image/main/inner2_area1_tab5_off.gif" alt=""/></li>
                    </ul>
                    <div id="popup" style="display: none;">
                        <div class="content" style="width:640px; height: 360px; position: relative; border: 20px solid #fff; "></div>
                    </div>
                    <script type="text/javascript" src="/front/js/jquery.bpopup.min.js"></script>
                    <script type="text/javascript">
                        $(function  () {
                            $('.pop_youtube').on('click', function(e) {
                                e.preventDefault();
                                var self = $(this) //button
                                    , content = $('.content');

                                $('#popup').bPopup({
                                    onOpen: function() {
                                        content.html(self.data('bpopup') || '');
                                    },
                                    onClose: function() {
                                        content.empty();
                                    }
                                });
                            })
                        });
                    </script>
                    <ul class="cont1">
                        <li>
                            <?php echo latest2("theme/media", 'media', 4, 25, '호주'); ?>
                        </li>
                        <li>
                            <?php echo latest2("theme/media", 'media', 4, 25, '영국'); ?>
                        </li>
                        <li>
                            <?php echo latest2("theme/media", 'media', 4, 25, '미국'); ?>
                        </li>
                        <li>
                            <?php echo latest2("theme/media", 'media', 4, 25, '캐나다'); ?>
                        </li>
                        <li>
                            <?php echo latest2("theme/media", 'media', 4, 25, '뉴질랜드'); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="inner6_wrap">
                <div id="bncarousel" class="flexslider">
                    <?php echo latest("theme/bottom", 'bottom', 20, 25); ?>
                </div>
                <script type="text/javascript">
                    $(window).load(function() {
                        $('#bncarousel').flexslider({
                            animation: "slide",
                            directionNav: true,
                            controlNav: false,
                            animationLoop: true,
                            slideshow: false,
                            itemWidth: 183,
                            itemMargin: 22
                        });
                    });
                </script>
            </div>
        </div>
    </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
