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
                    <p><img src="/front/image/common/lnb/top_uk.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1">영국 유학 개요</p>
                            <ul class="dep2">
                                <li><a href="why.php">왜 영국인가</a></li>
                                <li><a href="institution.php">영국 교육 제도</a></li>
                                <li><a href="city.php">주요 도시 안내</a></li>
                                <li><a href="visa.php">영국 비자 신청</a></li>
                                <li><a href="scholarship.php">장학금 정보</a></li>
                                <li><a href="procedure.php">출국 준비 안내</a></li>
                            </ul>
                        </li>
                        <li class="m2">
                            <p class="dep1">학위과정</p>
                            <ul class="dep2">
                                <li><a href="university.php">영국 대학 소개</a></li>
                                <li><a href="prep.php">대학 예비 과정</a></li>
                                <li><a href="bachelor.php">학사 과정</a></li>
                                <li><a href="master.php">석박사 과정</a></li>
                                <li><a href="ranking.php">영국 대학 랭킹</a></li>
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
                    <li class="title fl"><img src="/front/image/uk/recommend/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>영국</li>
                            <li>></li>
                            <li>학위과정</li>
                            <li>></li>
                            <li>IDP 추천학교</li>
                        </ul>
                    </li>
                </ul>
                <ul class="ca_recommend clfl">
                    <li class="btn1"><img src="/front/image/uk/recommend/logo.gif"/></li>
                    <li><img src="/front/image/uk/recommend/logo.gif"/></li>
                    <li><img src="/front/image/uk/recommend/logo.gif"/></li>
                    <li><img src="/front/image/uk/recommend/logo.gif"/></li>
                    <li><img src="/front/image/uk/recommend/logo.gif"/></li>
                    <li><img src="/front/image/uk/recommend/logo.gif"/></li>
                    <li><img src="/front/image/uk/recommend/logo.gif"/></li>
                    <li><img src="/front/image/uk/recommend/logo.gif"/></li>
                </ul>
                <div class="popcontent_wrap">
                    <div class="content"></div>
                </div>
                <script type="text/javascript" src="/front/js/jquery.bpopup.min.js"></script>
                <script type="text/javascript">
                    $('.btn1').click(function(){
                        $('.popcontent_wrap').bPopup({
                            content: "iframe",
                            contentContainer:'.content',
                            loadUrl:'./popup/university_pop1.php',
                            zIndex: '99999',
                            iframeAttr: 'width="652" height="831" scrolling="no" frameborder="0"'
                        });
                    })
                </script>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>