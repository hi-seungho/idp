<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원 비밀번호 확인 시작 { -->

<div id="sub_container" class="clfl">
    <?php if ($member['mb_level'] == 2) { ?>
        <script type="text/javascript">
            var dep1 = 0;
            var dep2 = 0;
        </script>
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
                        <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/board.php?bo_table=myqna'">나의Q&A</p>
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
    <?php } else { ?>
        <script type="text/javascript">
            var dep1 = 0;
            var dep2 = 0;
        </script>
        <div class="lnb_wrap">
            <div id="lnb">
                <p><img src="/front/image/common/lnb/top_mypage.gif"/></p>
                <ul>
                    <li class="m1">
                        <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/board.php?bo_table=reservation'">상담예약</p>
                    </li>
                    <li class="m2">
                        <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php'">회원정보변경</p>
                    </li>
                    <li class="m3">
                        <p class="dep1" onclick="javascript: member_leave();">회원탈퇴</p>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>
    <div class="subcontents_wrap">
        <ul class="title_wrap clfl">
            <li class="title fl"><img src="/front/image/mypage/confirm/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>마이페이지</li>
                    <li>></li>
                    <li><?php echo $g5['title']; ?></li>
                </ul>
            </li>
        </ul>
        <div class="modify_pw_wrap">
            <form name="fmemberconfirm" action="<?php echo $url ?>" onsubmit="return fmemberconfirm_submit(this);" method="post">
                <input type="hidden" name="mb_id" value="<?php echo $member['mb_id'] ?>">
                <input type="hidden" name="w" value="u">
                <div class="text_id">
                    <span>회원 아이디</span><span class="id"><?php echo $member['mb_id'] ?></span>
                </div>
                <div class="inputsearch">
                    <label for="confirm_mb_password" class="sound_only">비밀번호 필수</label>
                    <input type="password" name="mb_password" id="confirm_mb_password" required class="required inp_text2" size="34" maxLength="20">
                    <button type="submit"></button>
                </div>
            </form>
        </div>
        <div class="ac mt30">
            <a href="<?php echo G5_URL ?>"><img src="/front/image/mypage/modify/btn_main.gif"/></a>
        </div>
    </div>
</div>


<script>
function fmemberconfirm_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    return true;
}
</script>
<!-- } 회원 비밀번호 확인 끝 -->