<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 2;
    var dep2 = 6;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_ca.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1">캐나다 유학 개요</p>
                            <ul class="dep2">
                                <li><a href="why.php">왜 캐나다인가</a></li>
                                <li><a href="institution.php">캐나다 교육제도</a></li>
                                <li><a href="city.php">주요 도시 안내</a></li>
                                <li><a href="visa.php">캐나다 비자 신청</a></li>
                                <li><a href="procedure.php">출국 준비 안내</a></li>
                            </ul>
                        </li>
                        <li class="m2">
                            <p class="dep1">학위과정</p>
                            <ul class="dep2">
                                <li><a href="university.php">캐나다 대학 소개</a></li>
                                <li><a href="prep.php">명문대 진학 과정</a></li>
                                <li><a href="bachelor.php">학사/준학사 과정</a></li>
                                <li><a href="master.php">석사 과정</a></li>
                                <li><a href="ranking_univ.php">캐나다 대학 랭킹</a></li>
                            </ul>
                        </li>

                        <li class="m3">
                            <p class="dep1">어학연수</p>
                            <ul class="dep2">
                                <li><a href="affiliated.php">대학부설 영어연수</a></li>
                                <li><a href="academy.php">사설기관 영어연수</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/ca/recommend/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>캐나다</li>
                            <li>></li>
                            <li>학위과정</li>
                            <li>></li>
                            <li>IDP 추천 대학교</li>
                        </ul>
                    </li>
                </ul>
                <ul class="ca_recommend clfl">
                    <li class="my_button"><img src="/front/image/ca/recommend/logo.gif"/></li>
                    <li><img src="/front/image/ca/recommend/logo.gif"/></li>
                    <li><img src="/front/image/ca/recommend/logo.gif"/></li>
                    <li><img src="/front/image/ca/recommend/logo.gif"/></li>
                    <li><img src="/front/image/ca/recommend/logo.gif"/></li>
                    <li><img src="/front/image/ca/recommend/logo.gif"/></li>
                    <li><img src="/front/image/ca/recommend/logo.gif"/></li>
                    <li><img src="/front/image/ca/recommend/logo.gif"/></li>
                </ul>
                <div id="element_to_pop_up">
                    <div class="content"></div>
                </div>
                <script type="text/javascript">
                    // DOM Ready
                    $(function() {
                        // Binding a click event
                        // From jQuery v.1.7.0 use .on() instead of .bind()
                        $('.my_button').bind('click', function(e) {

                        // Prevents the default action to be triggered.
                            e.preventDefault();

                            // Triggering bPopup when click event is fired
                            $('#element_to_pop_up').bPopup({
                            content:'iframe', //'ajax', 'iframe' or 'image'
                            contentContainer:'.content',
                            loadUrl:'http://idp.e-bizs.net/ca/popup/university_pop1.php', //Uses jQuery.load()
                            iframeAttr: 'width="652" height="555" scrolling="no" frameborder="0"'
                            });
                        });
                    });
                </script>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>