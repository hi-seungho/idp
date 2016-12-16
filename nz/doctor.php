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
    var dep2 = 4;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_nz.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1">뉴질랜드 유학 개요</p>
                            <ul class="dep2">
                                <li><a href="why.php">왜 뉴질랜드인가</a></li>
                                <li><a href="institution.php">뉴질랜드 교육 제도</a></li>
                                <li><a href="city.php">주요 도시 안내</a></li>
                                <li><a href="visa.php">비자 신청</a></li>
                                <li><a href="procedure.php">출국 준비 안내</a></li>
                            </ul>
                        </li>
                        <li class="m2">
                            <p class="dep1">학위과정</p>
                            <ul class="dep2">
                                <li><a href="university.php">뉴질랜드 대학 소개</a></li>
                                <li><a href="prep.php">대학 예비 과정</a></li>
                                <li><a href="bachelor.php">학사 과정</a></li>
                                <li><a href="doctor.php">석박사 과정</a></li>
                                <li><a href="college.php">전문대 과정</a></li>
                                <li><a href="ranking_univ.php">뉴질랜드 대학 랭킹</a></li>
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
                    <li class="title fl"><img src="/front/image/nz/doctor/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>뉴질랜드</li>
                            <li>></li>
                            <li>학위과정</li>
                            <li>></li>
                            <li>석박사 과정</li>
                        </ul>
                    </li>
                </ul>
                <img src="/front/image/nz/doctor/cont1.jpg"/>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>