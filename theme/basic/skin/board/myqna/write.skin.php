<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

check_sca ($member, $sca);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div id="sub_container" class="clfl">
    <?php if ($member['mb_level'] == 2) { ?>
    <script type="text/javascript">
        var dep1 = 3;
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

    <div class="subcontents_wrap">
        <ul class="title_wrap clfl">
            <li class="title fl"><img src="/front/image/mypage/myinfo/title.gif"/></li>
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
        <img class="mb30" src="/front/image/mypage/myqna/txt1.gif"/>
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
            <?php } ?>

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
            <input type="hidden" name="ca_name" value="<?php echo $sca ?>">
            <table cellpadding="0" cellspacing="0" class="tb_type5">
                <tbody>
                <tr>
                    <td class="title"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></td>
                    <td class="cont">
                        <div id="autosave_wrapper">
                            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255">
                            <?php if ($is_member) { // 임시 저장된 글 기능 ?>
                                <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
                            <?php if($editor_content_js) echo $editor_content_js; ?>
                                <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
                                <div id="autosave_pop">
                                    <strong>임시 저장된 글 목록</strong>
                                    <div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
                                    <ul></ul>
                                    <div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
                                </div>
                            <?php } ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="title"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></td>
                    <td class="wr_content cont">
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

                <?php for ($i=1; 0 && $i<=G5_LINK_COUNT; $i++) { ?>
                    <tr>
                        <td class="title"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></td>
                        <td class="cont"><input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input" size="50"></td>
                    </tr>
                <?php } ?>

                <tr>
                    <td class="title"><label for="wr_1">희망국가<strong class="sound_only">필수</strong></label></td>
                    <td class="cont">
                        <ul class="radio_sel">
                            <li><input type="radio" name="wr_1" value="호주" <?php echo $w == '' ? 'checked': get_checked('호주', $write['wr_1']); ?> class="input_chk"><label>호주</label></li>
                            <li><input type="radio" name="wr_1" value="영국" <?php echo get_checked('영국', $write['wr_1']); ?> class="input_chk"><label>영국</label></li>
                            <li><input type="radio" name="wr_1" value="미국" <?php echo get_checked('미국', $write['wr_1']); ?> class="input_chk"><label>미국</label></li>
                            <li><input type="radio" name="wr_1" value="캐나다" <?php echo get_checked('캐나다', $write['wr_1']); ?> class="input_chk"><label>캐나다</label></li>
                            <li><input type="radio" name="wr_1" value="뉴질랜드" <?php echo get_checked('뉴질랜드', $write['wr_1']); ?> class="input_chk"><label>뉴질랜드</label></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td class="title"><label for="wr_2">유학분류<strong class="sound_only">필수</strong></label></td>
                    <td class="cont">
                        <ul class="radio_sel">
                            <li><input type="radio" name="wr_2" <?php echo $w == '' ? 'checked': get_checked('조기유학', $write['wr_2']); ?> value="조기유학" class="input_chk"><label>조기유학</label></li>
                            <li><input type="radio" name="wr_2" <?php echo get_checked('어학연수', $write['wr_2']); ?> value="어학연수" class="input_chk"><label>어학연수</label></li>
                            <li><input type="radio" name="wr_2" <?php echo get_checked('정규유학', $write['wr_2']); ?> value="정규유학" class="input_chk"><label>정규유학</label></li>
                            <li><input type="radio" name="wr_2" <?php echo get_checked('석사유학', $write['wr_2']); ?> value="석사유학" class="input_chk"><label>석사유학</label></li>
                            <li><input type="radio" name="wr_2" <?php echo get_checked('박사유학', $write['wr_2']); ?> value="박사유학" class="input_chk"><label>박사유학</label></li>
                            <li><input type="radio" name="wr_2" <?php echo get_checked('기타', $write['wr_2']); ?> value="기타" class="input_chk"><label>기타</label></li>
                        </ul>
                    </td>
                </tr>

                <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
                    <tr>
                        <td class="title">파일 #<?php echo $i+1 ?></td>
                        <td class="cont">
                            <input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file frm_input">
                            <?php if ($is_file_content) { ?>
                                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input" size="50">
                            <?php } ?>
                            <?php if($w == 'u' && $file[$i]['file']) { ?>
                                <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>

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

            <div class="btn_confirm">
                <input type="image" src="/front/image/common/board/btn_submit.gif" title="작성완료" id="btn_submit" accesskey="s">
                <a href="./board.php?bo_table=<?php echo $bo_table ?>"><img src="/front/image/common/board/btn_cancel.gif" title=""></a>
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