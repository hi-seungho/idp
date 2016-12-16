<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 1;
    var dep2 = 0;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_recommend.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='usa.php'">미국 커뮤니티</br>컬리지 2+2</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='aus.php'">호주 대학부설</br>어학연수</p>
                        </li>
                        <li class="m3">
                            <p class="dep1" onclick="javascript: location.href='uk_art.php'">영국 아트 유학</p>
                        </li>
                        <li class="m4">
                            <p class="dep1" onclick="javascript: location.href='uk_rusell.php'">영국 러셀그룹</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/recommend/usa/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>IDP 추천 프로그램</li>
                            <li>></li>
                            <li>미국 커뮤니티 컬리지 2+2</li>
                        </ul>
                    </li>
                </ul>
                <img src="/front/image/recommend/usa/cont1.jpg"/>
                <div class="ac mt30"><a href=""><img src="/front/image/recommend/usa/btn_comm.gif"/></a></div>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>