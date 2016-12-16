<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 2;
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
                    <li class="title fl"><img src="/front/image/mypage/reservation/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>마이페이지</li>
                            <li>></li>
                            <li>상담예약</li>
                        </ul>
                    </li>
                </ul>
                <img src="/front/image/mypage/reservation/txt1.gif"/>
                <p class="stit_type1 mt70"><img src="/front/image/mypage/reservation/tit1.gif"/></p>
                <table cellpadding="0" cellspacing="0" class="tb_type5">
                    <colgroup>
                        <col width="15%"/>
                        <col width="*"/>
                    </colgroup>
                    <tr>
                        <td class="title">이름</td>
                        <td class="cont"><input type="text" class="inp_text1" size="40"></td>
                    </tr>
                    <tr>
                        <td class="title">희망국가</td>
                        <td class="cont">
                            <ul class="radio_sel">
                                <li><input type="radio" class="input_chk"><label>호주</label></li>
                                <li><input type="radio" class="input_chk"><label>영국</label></li>
                                <li><input type="radio" class="input_chk"><label>미국</label></li>
                                <li><input type="radio" class="input_chk"><label>캐나다</label></li>
                                <li><input type="radio" class="input_chk"><label>뉴질랜드</label></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">관심분야</td>
                        <td class="cont">
                            <ul class="radio_sel">
                                <li><input type="radio" class="input_chk"><label>조기유학</label></li>
                                <li><input type="radio" class="input_chk"><label>어학연수</label></li>
                                <li><input type="radio" class="input_chk"><label>정규유학</label></li>
                                <li><input type="radio" class="input_chk"><label>석사유학</label></li>
                                <li><input type="radio" class="input_chk"><label>박사유학</label></li>
                                <li><input type="radio" class="input_chk"><label>기타</label></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">유학희망시기</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="10">
                            <span class="sub_t mr10">년</span>
                            <input type="text" class="inp_text1" size="10">
                            <span class="sub_t mr10">월</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">희망상담일</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="10">
                            <span class="sub_t mr10">년</span>
                            <input type="text" class="inp_text1" size="10">
                            <span class="sub_t mr10">월</span>
                            <input type="text" class="inp_text1" size="10">
                            <span class="sub_t mr10">일</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">문의 사항</td>
                        <td class="cont">
                            <textarea class="textarea2"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>