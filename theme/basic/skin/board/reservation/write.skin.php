<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

$row = sql_fetch("select count(*) as total from $write_table where mb_id='{$member['mb_id']}' and ca_name='신청완료' order by wr_num, wr_reply");

if ($row['total'] > 0) {
    alert("신청한 예약이 있습니다.", G5_BBS_URL.'/board.php?bo_table=myqna');
}
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
    $(function () {
        $( '#wr_6' ).datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
        });
    });
</script>
<div id="sub_container" class="clfl">
    <?php if ($member['mb_level'] == 2) { ?>
        <script type="text/javascript">
            var dep1 = 2;
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
            var dep1 = 1;
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
            <li class="title fl"><img src="/front/image/mypage/reservation/title.gif"/></li>
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
        <img src="/front/image/mypage/reservation/txt1.gif"/>
        <p class="stit_type1 mt70"><img src="/front/image/mypage/reservation/tit1.gif"/></p>

        <!-- 게시물 작성/수정 시작 { -->
        <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
            <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
            <input type="hidden" name="w" value="<?php echo $w ?>">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="sst" value="<?php echo $sst ?>">
            <input type="hidden" name="sod" value="<?php echo $sod ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="hidden" name="wr_password" value="<?php echo rand(1111, 9999) ?>">
            <?php if ($is_category && !$is_admin) { ?>
                <input type="hidden" name="ca_name" value="<?php echo $w == '' ? '신청대기':$write['ca_name'] ?>">
            <?php } ?>

            <table cellpadding="0" cellspacing="0" class="tb_type5">
                <colgroup>
                    <col width="15%"/>
                    <col width="*"/>
                </colgroup>
                <tbody>
                <?php if ($is_name) { ?>
                    <tr>
                        <td class="title"><label for="wr_name">성명<strong class="sound_only">필수</strong></label></td>
                        <td class="cont"><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="10" maxlength="20"></td>
                    </tr>
                <?php } ?>

                <?php if ($is_email) { ?>
                    <tr>
                        <td class="title"><label for="wr_email">이메일</label></td>
                        <td class="cont"><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" size="50" maxlength="100"></td>
                    </tr>
                <?php } ?>

                <?php if ($is_category && $is_admin) { ?>
                    <tr>
                        <td class="title"><label for="ca_name">분류<strong class="sound_only">필수</strong></label></td>
                        <td class="cont">
                            <select name="ca_name" id="ca_name" required class="required" >
                                <option value="">선택하세요</option>
                                <?php echo $category_option ?>
                            </select>
                        </td>
                    </tr>
                <?php } ?>

                <?php if ($is_admin) { ?>
                    <tr>
                        <td class="title"><label for="wr_1">담당 유학 <br>컨설턴트</label></td>
                        <td class="cont">
                            <select name="wr_1" id="wr_1">
                                <option value="">선택하세요</option>
                                <?php
                                $result = sql_query("select * from {$g5['member_table']} where mb_level=3 order by mb_name");
                                while ($row = sql_fetch_array($result)) {
                                    echo '<option value="'.$row['mb_id'].'" '.get_selected($row['mb_id'], $write['wr_1']).'>'.$row['mb_name'].'('.$row['mb_id'].')</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                <?php } ?>

                <tr>
                    <td class="title"><label for="wr_2">희망국가<strong class="sound_only">필수</strong></label></td>
                    <td class="cont">
                        <ul class="radio_sel">
                            <li><input type="radio" name="wr_2" value="호주" <?php echo $w == '' ? 'checked': get_checked('호주', $write['wr_2']); ?> class="input_chk"><label>호주</label></li>
                            <li><input type="radio" name="wr_2" value="영국" <?php echo get_checked('영국', $write['wr_2']); ?> class="input_chk"><label>영국</label></li>
                            <li><input type="radio" name="wr_2" value="미국" <?php echo get_checked('미국', $write['wr_2']); ?> class="input_chk"><label>미국</label></li>
                            <li><input type="radio" name="wr_2" value="캐나다" <?php echo get_checked('캐나다', $write['wr_2']); ?> class="input_chk"><label>캐나다</label></li>
                            <li><input type="radio" name="wr_2" value="뉴질랜드" <?php echo get_checked('뉴질랜드', $write['wr_2']); ?> class="input_chk"><label>뉴질랜드</label></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td class="title"><label for="wr_subject">관심분야<strong class="sound_only">필수</strong></label></td>
                    <td class="cont">
                        <ul class="radio_sel">
                            <li><input type="radio" name="wr_subject" <?php echo $w == '' ? 'checked': get_checked('조기유학', $subject); ?> value="조기유학" class="input_chk"><label>조기유학</label></li>
                            <li><input type="radio" name="wr_subject" <?php echo get_checked('어학연수', $subject); ?> value="어학연수" class="input_chk"><label>어학연수</label></li>
                            <li><input type="radio" name="wr_subject" <?php echo get_checked('정규유학', $subject); ?> value="정규유학" class="input_chk"><label>정규유학</label></li>
                            <li><input type="radio" name="wr_subject" <?php echo get_checked('석사유학', $subject); ?> value="석사유학" class="input_chk"><label>석사유학</label></li>
                            <li><input type="radio" name="wr_subject" <?php echo get_checked('박사유학', $subject); ?> value="박사유학" class="input_chk"><label>박사유학</label></li>
                            <li><input type="radio" name="wr_subject" <?php echo get_checked('기타', $subject); ?> value="기타" class="input_chk"><label>기타</label></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td class="title"><label for="wr_3">희망시기</label></td>
                    <td class="cont">
                        <input type="text" name="wr_3" value="<?php echo $write['wr_3'] ?>" id="wr_3" class="frm_input required" size="10" maxlength="4" required>
                        년
                        <input type="text" name="wr_4" value="<?php echo $write['wr_4'] ?>" id="wr_4" class="frm_input required" size="5" maxlength="2" required>
                        월
                    </td>
                </tr>

                <tr>
                    <td class="title"><label for="wr_6">방문희망일</label></td>
                    <td class="cont">
                        <input type="text" name="wr_6" value="<?php echo $write['wr_6'] ?>" id="wr_6" class="frm_input required" size="20" maxlength="10" required readonly>
                    </td>
                </tr>

                <tr>
                    <td class="title"><label for="wr_content">문의사항<strong class="sound_only">필수</strong></label></td>
                    <td class="cont wr_content">
                        <?php if($write_min || $write_max) { ?>
                            <!-- 최소/최대 글자 수 사용 시 -->
                            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                        <?php } ?>
                        <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                        <?php if($write_min || $write_max) { ?>
                            <!-- 최소/최대 글자 수 사용 시 -->
                            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                        <?php } ?>
                    </td>
                </tr>

                <?php if ($is_guest) { //자동등록방지  ?>
                    <tr>
                        <td class="title">자동등록방지</td>
                        <td class="cont">
                            <?php echo $captcha_html ?>
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>

            <div class="btn_confirm" style="margin-top: 15px;">
                <input type="image" src="/front/image/common/board/btn_submit.gif" title="작성완료" id="btn_submit" accesskey="s">
                <?php if ($is_admin) { //자동등록방지  ?>
                    <a href="./board.php?bo_table=<?php echo $bo_table ?>"><img src="/front/image/common/board/btn_cancel.gif" title=""></a>
                <?php } ?>
            </div>
        </form>

        <script>
            <?php if($write_min || $write_max) { ?>
            // 글자수 제한
            var char_min = parseInt(<?php echo $write_min; ?>); // 최소
            var char_max = parseInt(<?php echo $write_max; ?>); // 최대
            check_byte("wr_content", "char_count");

            $(function() {
                $("#wr_content").on("keyup", function() {
                    check_byte("wr_content", "char_count");
                });
            });

            <?php } ?>
            function html_auto_br(obj)
            {
                if (obj.checked) {
                    result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
                    if (result)
                        obj.value = "html2";
                    else
                        obj.value = "html1";
                }
                else
                    obj.value = "";
            }

            function fwrite_submit(f)
            {
                <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

                var subject = "";
                var content = "";
                $.ajax({
                    url: g5_bbs_url+"/ajax.filter.php",
                    type: "POST",
                    data: {
                        "subject": f.wr_subject.value,
                        "content": f.wr_content.value
                    },
                    dataType: "json",
                    async: false,
                    cache: false,
                    success: function(data, textStatus) {
                        subject = data.subject;
                        content = data.content;
                    }
                });

                if (subject) {
                    alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
                    f.wr_subject.focus();
                    return false;
                }

                if (content) {
                    alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
                    if (typeof(ed_wr_content) != "undefined")
                        ed_wr_content.returnFalse();
                    else
                        f.wr_content.focus();
                    return false;
                }

                if (document.getElementById("char_count")) {
                    if (char_min > 0 || char_max > 0) {
                        var cnt = parseInt(check_byte("wr_content", "char_count"));
                        if (char_min > 0 && char_min > cnt) {
                            alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                            return false;
                        }
                        else if (char_max > 0 && char_max < cnt) {
                            alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                            return false;
                        }
                    }
                }

                <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

                document.getElementById("btn_submit").disabled = "disabled";

                return true;
            }
        </script>
        <!-- } 게시물 작성/수정 끝 -->
    </div>
</div>