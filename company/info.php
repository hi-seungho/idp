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
                    <li class="title fl"><img src="/front/image/company/info/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>회사소개</li>
                            <li>></li>
                            <li>IDP 소개</li>
                        </ul>
                    </li>
                </ul>
                <img src="/front/image/company/info/cont1.gif"/>
                <img class="mt70" src="/front/image/company/info/cont2.gif"/>
                <img class="mt70" src="/front/image/company/info/cont3.gif"/>
                <p class="stit_type1 mt70"><img src="/front/image/company/info/tit1.gif"/></p>
                <div class="company_info_wrap">
                    <script type="text/javascript" src="/front/js/flexslider/jquery.flexslider.js"></script>
                    <link type="text/css" rel="stylesheet" href="/front/js/flexslider/flexslider.css" />
                    <div id="companyslider" class="flexslider">
                        <ul class="slides">
                            <li><img src="http://placehold.it/792x420"/></li>
                            <li><img src="http://placehold.it/792x420"/></li>
                            <li><img src="http://placehold.it/792x420"/></li>
                            <li><img src="http://placehold.it/792x420"/></li>
                            <li><img src="http://placehold.it/792x420"/></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $('#companyslider').flexslider({
                                animation: "slide",
                                directionNav: true,
                                controlNav: false,
                                itemWidth: '792',
                                slideshow: true
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>