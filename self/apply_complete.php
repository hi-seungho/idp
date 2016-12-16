<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    //var dep1 = 1;
    //var dep2 = 0;
</script>
        <div id="sub_container" class="clfl">
            <div class="subcontents_wrap_type2">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/self/apply/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>셀프 학교 지원</li>
                        </ul>
                    </li>
                </ul>
                <div class="step_wrap"><img src="/front/image/self/apply/step3.gif"/></div>
                <div class="apply_complete_wrap">
                    <div class="member_complete">
                        <span><?php echo $name; ?></span><span>님의 원서접수가 정상적으로 완료되었습니다.</span>
                    </div>
                    <a href="<?php echo G5_URL; ?>"><img class="btn_main" src="/front/image/self/apply/btn_main.gif"/></a>
                </div>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>