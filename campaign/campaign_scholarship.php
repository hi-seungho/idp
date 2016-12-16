<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
    <div id="wrap">
        <div style="width: 940px; height: 2560px; position: relative; margin: 0 auto;">
            <img usemap="#001" src="/front/image/campaign/campaign_scholarship/cont1.jpg"/>
            <map name="001">
                <area shape="rect" coords="319,689,619,735" href="" target="_blank">
                <area shape="rect" coords="381,2459,573,2499" href="" target="_blank">
            </map>

        </div>
    </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
