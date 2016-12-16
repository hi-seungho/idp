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
    //var dep2 = 0;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_comm.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=news'">IDP 새소식</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=tips'">유학 꿀팁!!</p>
                        </li>
                        <li class="m3">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=review'">유학 후기</p>
                        </li>
                        <li class="m4">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=qna'">질문있어요!!</p>
                        </li>
                        <li class="m5">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=schedule'">이달의 행사</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/community/qna/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>커뮤니티</li>
                            <li>></li>
                            <li>질문있어요!!</li>
                        </ul>
                    </li>
                </ul>
                <div class="qna_pw_wrap">
                    <div class="inputsearch">
                        <input type="password" class="inp_text2" size="31">
                        <button name=""></button>
                    </div>
                </div>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>