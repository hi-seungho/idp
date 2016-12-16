<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 4;
    var dep2 = 0;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_theme.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='food_aus.php'">요리 & 제과</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='aviation_aus.php'">항공 & 항공 정비사</p>
                        </li>
                        <li class="m3">
                            <p class="dep1" onclick="javascript: location.href='art_aus.php'">아트 & 디자인</p>
                        </li>
                        <li class="m4">
                            <p class="dep1" onclick="javascript: location.href='health_aus.php'">간호 & 보건</p>
                        </li>
                        <li class="m5">
                            <p class="dep1" onclick="javascript: location.href='hotel_aus.php'">호텔 & 비지니스</p>
                        </li>
                        <li class="m6">
                            <p class="dep1" onclick="javascript: location.href='it_aus.php'">IT & 엔지니어링</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/theme/health/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>전공별유학</li>
                            <li>></li>
                            <li>간호 & 보건</li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab_3">
                    <li><a href="health_aus.php"><img src="/front/image/theme/health/tab1.gif" alt=""/></a></li>
                    <li><a href="health_ca.php"><img src="/front/image/theme/health/tab2_on.gif" alt=""/></a></li>
                    <li><a href="health_nz.php"><img src="/front/image/theme/health/tab3.gif" alt=""/></a></li>
                </ul>
                <img src="/front/image/theme/health/cont2.jpg"/>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>