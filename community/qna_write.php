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
    var dep2 = 0;
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
                <ul class="b_btns mt30 ar clfl">
                    <li><a href=""><img src="/front/image/common/board/btn_submit.gif"/></a></li>
                    <li><a href=""><img src="/front/image/common/board/btn_cancel.gif"/></a></li>
                </ul>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>