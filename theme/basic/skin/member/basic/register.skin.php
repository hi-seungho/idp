<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>
<!-- 회원가입약관 동의 시작 { -->
<script type="text/javascript">
    var dep1 = 2;
    var dep2 = 0;
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
            <li class="title fl"><img src="/front/image/member/join/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>멤버쉽</li>
                    <li>></li>
                    <li>회원가입</li>
                </ul>
            </li>
        </ul>
        <img src="/front/image/member/join/top_join1.gif"/>
        <form  name="fregister" id="fregister" action="<?php echo $register_action_url ?>" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">
            <p class="stit_type1 mt70"><img src="/front/image/member/join/tit1.gif"/></p>
            <div class="termspolicy_wrap">
                <div class="small2 terms">
                    <script type="text/javascript">
                        terms();
                    </script>
                </div>
                <div class="chk_agree">
                    <input type="checkbox" name="agree" value="1" id="agree11" class="input_chk"><label>이용약관의 내용에 동의합니다.</label>
                </div>
            </div>
            <p class="stit_type1 mt70"><img src="/front/image/member/join/tit2.gif"/></p>
            <div class="termspolicy_wrap">
                <div class="small2 policy">
                    <script type="text/javascript">
                        policy();
                    </script>
                </div>
                <div class="chk_agree">
                    <input type="checkbox" name="agree2" value="1" id="agree21" class="input_chk"><label>개인정보취급방침의 내용에 동의합니다.</label>
                </div>
            </div>
            <div class="mt30 ac">
                <input type="image" src="/front/image/member/join/btn_join.gif" >
                <a href="<?php echo G5_URL; ?>"><img src="/front/image/member/join/btn_main.gif"/></a>
            </div>
        </form>
    </div>
</div>

<div class="mbskin">


    <script>
    function fregister_submit(f)
    {
        if (!f.agree.checked) {
            alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
            f.agree.focus();
            return false;
        }

        if (!f.agree2.checked) {
            alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
            f.agree2.focus();
            return false;
        }

        return true;
    }
    </script>
</div>
<!-- } 회원가입 약관 동의 끝 -->