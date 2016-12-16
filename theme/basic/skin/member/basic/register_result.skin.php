<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>
<script type="text/javascript">
    var dep1 = 2;
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
        <img src="/front/image/member/join/top_join3.gif"/>
        <div class="joincomplete_wrap">
            <div class="text_id">
                <span class="id"><?php echo $mb['mb_id'] ?></span><span>님의 회원가입을 진심으로 축하들힙니다.</span>
            </div>
            <a href="<?php echo G5_URL ?>"><img class="btn_gomain"src="/front/image/member/join/btn_gomain.gif"/></a>
        </div>
    </div>
</div>