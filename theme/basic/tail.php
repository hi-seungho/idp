<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
    <div id="bottom">
        <div class="bottom_um_wrap">
            <div class="inner_um_wrap">
                <ul class="utilmenu">
                    <li><a href="/company/info.php"><img src="/front/image/common/footer/um1.gif" alt=""/></a></li>
                    <li><img src="/front/image/common/footer/um_line.gif" alt=""/></li>
                    <li><a href="/company/info.php"><img src="/front/image/common/footer/um2.gif" alt=""/></a></li>
                    <li><img src="/front/image/common/footer/um_line.gif" alt=""/></li>
                    <li><a href="/guide/terms.php"><img src="/front/image/common/footer/um3.gif" alt=""/></a></li>
                    <li><img src="/front/image/common/footer/um_line.gif" alt=""/></li>
                    <li><a href="/guide/policy.php"><img src="/front/image/common/footer/um4.gif" alt=""/></a></li>
                    <li><img src="/front/image/common/footer/um_line.gif" alt=""/></li>
                    <li><a href="/guide/sitemap.php"><img src="/front/image/common/footer/um5.gif" alt=""/></a></li>
                </ul>
                <?php echo latest("theme/family", 'family', 1000, 25); ?>
            </div>
        </div>
        <div class="bottom_address_wrap">
            <div class="address_wrap">
                <address><img src="/front/image/common/footer/address.gif"/></address>
                <ul class="linkbtn">
                    <li><a href="https://www.facebook.com/idpkorea/?fref=ts" target="_blank"><img src="/front/image/common/footer/ico_fb.gif"/></a></li>
                    <li><a href="http://blog.naver.com/idp_seoul" target="_blank"><img src="/front/image/common/footer/ico_nblog.gif"/></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>