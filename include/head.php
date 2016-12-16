<?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/head.sub.php'); ?>

    <div id="wrap">
        <div id="header">
            <div class="top_banner">
                <div class="inner_cont">
                    <div id="quickmenu">
                        <ul>
                            <li><img src="/front/image/common/quickmenu/btn3.gif" alt=""/></li>
                            <li><img class="btn3" src="/front/image/common/quickmenu/btn4.gif" alt=""/></li>
                            <li><img class="btn2" src="/front/image/common/quickmenu/btn5.gif" alt=""/></li>
                            <li><img class="btn1" src="/front/image/common/quickmenu/btn6.gif" alt=""/></li>
                            <li><a href=""><img src="/front/image/common/quickmenu/btn7.gif" alt=""/></a></li>
                            <li><img src="/front/image/common/quickmenu/btn9.gif" alt=""/></li>
                            <li style="margin-bottom: 20px;"><a href="#wrap"><img src="/front/image/common/quickmenu/btn10.gif" alt=""/></a></li>
                            <!--<li style="margin-bottom: 10px;"><a href=""><img src="/front/image/common/quickmenu/btn8.gif" alt=""/></a></li>-->
                            <li style="margin-bottom: 5px;"><a href=""><img src="/front/image/common/quickmenu/btn1.gif" alt=""/></a></li>
                            <li style="margin-bottom: 5px;"><a href=""><img src="/front/image/common/quickmenu/btn2.gif" alt=""/></a></li>
                            <li style="margin-bottom: 5px;"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=exhibition"><img src="/front/image/common/quickmenu/btn11.gif" alt=""/></a></li>
                            <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=exhibition"><img src="/front/image/common/quickmenu/btn12.gif" alt=""/></a></li>
                        </ul>
                    </div>
                    <div class="popcontent_wrap">
                        <div class="content"></div>
                    </div>
                    <script type="text/javascript" src="/front/js/jquery.bpopup.min.js"></script>
                    <script type="text/javascript">
                        $('.btn1').click(function(){
                            $('.popcontent_wrap').bPopup({
                                content: "iframe",
                                contentContainer:'.content',
                                loadUrl:'/popup/estimate.php',
                                zIndex: '99999',
                                iframeAttr: 'width="712" height="891" scrolling="no" frameborder="0"'
                            });
                        })

                        $('.btn2').click(function(){
                            $('.popcontent_wrap').bPopup({
                                content: "iframe",
                                contentContainer:'.content',
                                loadUrl:'/popup/phone.php',
                                zIndex: '99999',
                                iframeAttr: 'width="712" height="891" scrolling="no" frameborder="0"'
                            });
                        })

                        $('.btn3').click(function(){
                            $('.popcontent_wrap').bPopup({
                                content: "iframe",
                                contentContainer:'.content',
                                loadUrl:'/popup/visit.php',
                                zIndex: '99999',
                                iframeAttr: 'width="712" height="891" scrolling="no" frameborder="0"'
                            });
                        })
                    </script>
                    <a href=""><img class="btn_link" src="/front/image/common/main/btn_top_banner_go.png" alt=""/></a>
                    <p class="btn_close"><img src="/front/image/common/main/btn_top_banner_close.png" alt="닫기"/></p>
                </div>
            </div>
            <div class="utilmenu_area">
                <div class="inner_cont">
                    <a href=""><img src="/front/image/common/gnb/btn_fav.gif"/></a>
                    <select class="select_type1" name="">
                        <option value="">Family Site</option>
                        <option value="">Family_Site_1</option>
                        <option value="">Family_Site_2</option>
                        <option value="">Family_Site_3</option>
                    </select>
                    <ul class="utilmenu">
                        <li><img src="/front/image/common/gnb/ico_lock.gif" alt="" /><a href="<?php echo G5_BBS_URL; ?>/login.php">로그인</a></li>
                        <li>｜</li>
                        <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                        <li>｜</li>
                        <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">마이페이지</a></li>
                        <li>｜</li>
                        <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">커뮤니티</a></li>
                    </ul>
                </div>
            </div>
            <div class="top_banner2">
                <p class="bn1"><img src="/front/image/common/main/bn1.png"/></p>
                <h1><a href="/index.php"><img src="/front/image/common/main/logo.gif"/></a></h1>
                <p class="bn2"><img src="/front/image/common/main/bn2.gif"/></p>
            </div>
            <div class="gnb">
                <div class="inner_cont">
                    <ul class="clfl">
                        <li><a href="/aus/why.php"><img src="/front/image/common/gnb/m1_1.png" alt="호주"/></a></li>
                        <li><a href="/uk/why.php"><img src="/front/image/common/gnb/m1_2.png" alt="영국"/></a></li>
                        <li><a href="/us/why.php"><img src="/front/image/common/gnb/m1_3.png" alt="미국"/></a></li>
                        <li><a href="/ca/why.php"><img src="/front/image/common/gnb/m1_4.png" alt="캐나다"/></a></li>
                        <li><a href="/nz/why.php"><img src="/front/image/common/gnb/m1_5.png" alt="뉴질랜드"/></a></li>
                        <li style="margin-left: 3px;"><a href="/theme1/food_aus.php"><img src="/front/image/common/gnb/m2_1.png" alt=""/></a></li>
                        <li><a href="/recommend/usa.php"><img src="/front/image/common/gnb/m2_2.png" alt=""/></a></li>
                        <li><a href="/self/apply_info.php"><img src="/front/image/common/gnb/m2_3.png" alt=""/></a></li>
                        <li><a href="/community/index.php"><img src="/front/image/common/gnb/m2_4.png" alt=""/></a></li>
                        <li><a href="/company/info.php"><img src="/front/image/common/gnb/m2_5.png" alt=""/></a></li>
                    </ul>
                </div>
            </div>
        </div>
