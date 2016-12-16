<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

$bo_table = "reservation";
$write_table = $g5['write_prefix'] . $bo_table;

$row = sql_fetch("select * from $write_table where mb_id='{$member['mb_id']}' order by wr_num, wr_reply");

if (!isset($row['ca_name']) || $row['ca_name'] == "신청해지") {
    alert("신청한 예약이 없습니다.", G5_BBS_URL.'/write.php?bo_table=reservation');
}

if ($row['ca_name'] == "신청대기") {
    alert("신청대기 상태입니다.", G5_BBS_URL.'/member_confirm.php?url='.G5_BBS_URL.'/register_form.php');
}

$mb =  get_member($row['wr_1']);
?>
<script type="text/javascript">
    var dep1 = 1;
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
                    <li class="title fl"><img src="/front/image/mypage/myinfo/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>마이페이지</li>
                            <li>></li>
                            <li>나의 유학</li>
                        </ul>
                    </li>
                </ul>
                <div class="myinfo_wrap clfl">
                    <div class="inner" style="margin-right: 14px;">
                        <p class="stit_type1"><img src="/front/image/mypage/myinfo/tit1.gif"/></p>
                        <table cellpadding="0" cellspacing="0" class="tb_type5">
                            <colgroup>
                                <col width="30%"/>
                                <col width="*"/>
                            </colgroup>
                            <tr>
                                <td class="title">유학국가</td>
                                <td class="cont"><?php echo $row['wr_2'] ?></td>
                            </tr>
                            <tr>
                                <td class="title">희망유학시기</td>
                                <td class="cont"><?php echo $row['wr_3'] ?>년 <?php echo $row['wr_4'] ?>월</td>
                            </tr>
                            <tr>
                                <td class="title">생년월일</td>
                                <td class="cont"><?php echo $member['mb_3'] ?></td>
                            </tr>
                            <tr>
                                <td class="title">휴대폰</td>
                                <td class="cont"><?php echo $member['mb_hp'] ?></td>
                            </tr>
                            <tr>
                                <td class="title">이메일</td>
                                <td class="cont"><?php echo $member['mb_email'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="inner">
                        <p class="stit_type1"><img src="/front/image/mypage/myinfo/tit2.gif"/></p>
                        <table cellpadding="0" cellspacing="0" class="tb_type5">
                            <colgroup>
                                <col width="30%"/>
                                <col width="*"/>
                            </colgroup>
                            <tr>
                                <td class="title">컨설턴트</td>
                                <td class="cont"><?php echo $mb['mb_name'] ?></td>
                            </tr>
                            <tr>
                                <td class="title">전화</td>
                                <td class="cont"><?php echo $mb['mb_tel'] ?></td>
                            </tr>
                            <tr>
                                <td class="title">팩스</td>
                                <td class="cont"><?php echo $mb['mb_4'] ?></td>
                            </tr>
                            <tr>
                                <td class="title">이메일</td>
                                <td class="cont"><?php echo $mb['mb_email'] ?></td>
                            </tr>
                            <tr>
                                <td class="title">주소</td>
                                <td class="cont"><?php echo $mb['mb_addr1'] ?> <?php echo $mb['mb_addr2'] ?> <?php echo $mb['mb_addr3'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p class="stit_type1 mt70"><img src="/front/image/mypage/myinfo/tit3.gif"/></p>
                <img src="/front/image/mypage/myinfo/cont1.gif"/>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>