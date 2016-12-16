<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
    <div id="wrap">
        <div style="width: 940px; height: 2391px; position: relative; margin: 0 auto;">
            <img usemap="#001" src="/front/image/campaign/campaign_world/cont1.jpg" style="position: absolute;" />
            <map name="001">
                <area shape="rect" coords="79,679,319,879" href="http://www.idp.co.kr/program/semina.asp" target="_blank">
                <area shape="rect" coords="349,679,589,879" href="http://www.idp.co.kr/e_notice/school_benefit.asp" target="_blank">
                <area shape="rect" coords="620,679,859,879" href="http://www.idp.co.kr/e_notice/event2.asp" target="_blank">
                <area shape="rect" coords="120,957,201,1041" href="http://www.idp.co.kr/aus/aus5.asp" target="_blank">
                <area shape="rect" coords="220,957,300,1041" href="http://www.idp.co.kr/uk/uk5.asp" target="_blank">
                <area shape="rect" coords="320,957,400,1041" href="http://www.idp.co.kr/usa/usa5.asp" target="_blank">
                <area shape="rect" coords="420,957,500,1041" href="http://www.idp.co.kr/ca/ca5.asp" target="_blank">
                <area shape="rect" coords="520,957,600,1041" href="http://www.idp.co.kr/new/new1.asp" target="_blank">
                <area shape="rect" coords="381,2309,558,2350" href="http://www.idp.co.kr/advance_registration/advance_registration.asp" target="_blank">
            </map>
            <div style="position: absolute; bottom: 208px; left: 51px;">
                <!-- * Daum 지도 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1473427682745" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
    2. 설치 스크립트
    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
    new daum.roughmap.Lander({
        "timestamp" : "1473427682745",
        "key" : "cygi",
        "mapWidth" : "838",
        "mapHeight" : "353"
    }).render();
</script>
            </div>
        </div>
    </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
