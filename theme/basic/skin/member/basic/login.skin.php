<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<script type="text/javascript">
    var dep1 = 1;
    //var dep2 = 0;
</script>
<div id="sub_container" class="clfl">
    <div class="lnb_wrap">
        <div id="lnb">
            <p><img src="/front/image/common/lnb/top_member.gif"/></p>
            <ul>
                <li class="m1">
                    <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/login.php'">로그인</p>
                </li>
                <li class="m2">
                    <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/register.php'">회원가입</p>
                </li>
                <li class="m3">
                    <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/password_lost.php'">ID/PW 찾기</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="subcontents_wrap">
        <ul class="title_wrap clfl">
            <li class="title fl"><img src="/front/image/member/login/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>멤버쉽</li>
                    <li>></li>
                    <li>로그인</li>
                </ul>
            </li>
        </ul>
        <div class="login_wrap">
            <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
                <input type="hidden" name="url" value="<?php echo $login_url ?>">
                <label for="login_id" class="sound_only">회원아이디 필수</label>
                <input type="text" name="mb_id" id="login_id" required class="inp_id inp_text2 required" size="30" maxLength="20">
                <label for="login_pw" class="sound_only">비밀번호 필수</label>
                <input type="password" name="mb_password" id="login_pw" required class="inp_pw inp_text2 required" size="30" maxLength="20">
                <button class="btn_login" type="submit"></button>
                <a href="<?php echo G5_BBS_URL ?>/password_lost.php"><img class="btn_find" src="/front/image/member/login/btn_idpw.gif"/></a>
                <a href="<?php echo G5_BBS_URL ?>/register.php"><img class="btn_join" src="/front/image/member/login/btn_join.gif"/></a>
            </form>
        </div>
    </div>
</div>
<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->