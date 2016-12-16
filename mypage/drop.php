<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 6;
    //var dep2 = 0;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_mypage.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='/mypage/myinfo.php'">나의유학</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=reservation'">상담예약</p>
                        </li>
                        <li class="m3">
                            <p class="dep1" onclick="javascript: location.href='my<?php echo G5_BBS_URL; ?>/board.php?bo_table=qna'">나의Q&A</p>
                        </li>
                        <li class="m4">
                            <p class="dep1" onclick="javascript: location.href='/self/apply_info.php'">셀프학교지원</p>
                        </li>
                        <li class="m5">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php'">회원정보변경</p>
                        </li>
                        <li class="m6">
                            <p class="dep1" onclick="javascript: member_leave();">회원탈퇴</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/mypage/drop/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>마이페이지</li>
                            <li>></li>
                            <li>회원탈퇴</li>
                        </ul>
                    </li>
                </ul>
                <img src="/front/image/mypage/drop/txt1.gif"/>
                <div class="drop_pw_wrap">
                    <div class="text_id">
                        <span>회원 아이디</span><span class="id">abc123</span>
                    </div>
                    <div class="inputsearch">
                        <input type="password" class="inp_text2" size="31">
                        <button name=""></button>
                    </div>
                </div>
                <div class="ac mt30">
                    <a href=""><img src="/front/image/mypage/modify/btn_main.gif"/></a>
                </div>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>