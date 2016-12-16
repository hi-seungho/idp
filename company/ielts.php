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
    //var dep2 = 0;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_company.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='info.php'">IDP 소개</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='ielts.php'">IELTS 소개</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/company/ielts/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>회사소개</li>
                            <li>></li>
                            <li>IELTS 소개</li>
                        </ul>
                    </li>
                </ul>
                <img src="/front/image/company/ielts/cont1.gif"/>
                <div class="ac mt40 mb40">
                    <a href=""><img src="/front/image/company/ielts/btn_ielts.gif"/></a>
                </div>
                <img src="/front/image/company/ielts/cont2.gif"/>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>