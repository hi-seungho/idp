<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 3;
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
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/mypage/myqna/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>마이페이지</li>
                            <li>></li>
                            <li>나의 Q&A</li>
                        </ul>
                    </li>
                </ul>
                <table cellpadding="0" cellspacing="0" class="tb_type5 mt30">
                    <colgroup>
                        <col width="15%"/>
                        <col width="*"/>
                    </colgroup>
                    <tr>
                        <td class="title">이름</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="40">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">비밀번호</td>
                        <td class="cont">
                            <input type="password" class="inp_text1" size="40">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">제목</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="80">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">내용</td>
                        <td class="cont">
                            <div class="ar"><a href=""><img src="/front/image/common/board/btn_alarm.gif"/></a></div>
                            에디터 삽입
                        </td>
                    </tr>
                    <tr>
                        <td class="title">링크#1</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="80">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">링크#2</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="80">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">파일#1</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="54">
                            <a href=""><img src="/front/image/common/board/btn_find.gif"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">파일#2</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="54">
                            <a href=""><img src="/front/image/common/board/btn_find.gif"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">자동등록방지</td>
                        <td class="cont">
                            자동등록방지
                        </td>
                    </tr>
                </table>
                <ul class="b_btns mt30 ac clfl">
                    <li><a href=""><img src="/front/image/common/board/btn_submit.gif"/></a></li>
                    <li><a href=""><img src="/front/image/common/board/btn_cancel.gif"/></a></li>
                </ul>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>