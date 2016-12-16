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
                    <p><img src="/front/image/common/lnb/top_guide.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='terms.php'">이용약관</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='policy.php'">개인정보취급방침</p>
                        </li>
                        <li class="m3">
                            <p class="dep1" onclick="javascript: location.href='sitemap.php'">사이트맵</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/guide/terms/title2.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>이용안내</li>
                            <li>></li>
                            <li>개인정보취급방침</li>
                        </ul>
                    </li>
                </ul>
                <div class="termspolicy_wrap">
                    <div class="big policy">
                        <script type="text/javascript">
                            policy();
                        </script>
                    </div>
                </div>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>