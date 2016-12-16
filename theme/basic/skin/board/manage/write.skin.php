<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<script type="text/javascript">
    var dep1 = 0;
    var dep2 = 0;
</script>
<div id="sub_container" class="clfl">
    <div class="subcontents_wrap_type2">
        <ul class="title_wrap clfl">
            <li class="title fl" style="font-size: 24px;font-weight: bold;"><?php echo $g5['title'] ?></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>등록관리</li>
                    <li>></li>
                    <li><?php echo $g5['title'] ?></li>
                </ul>
            </li>
        </ul>

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
            <input type="hidden" name="wr_content" value="&nbsp;">
            <div class="tbl_frm01 tbl_wrap">
                <table>
                    <tbody>

                    <?php if ($is_category) { ?>
                        <tr>
                            <th scope="row"><label for="ca_name">분류<strong class="sound_only">필수</strong></label></th>
                            <td>
                                <select name="ca_name" id="ca_name" required class="required" >
                                    <option value="">선택하세요</option>
                                    <?php echo $category_option ?>
                                </select>
                            </td>
                        </tr>
                    <?php } ?>

                    <?php if ($bo_table == "visual") { ?>
                    <tr>
                        <th scope="row"><label for="wr_1">순서</label></th>
                        <td><input type="text" name="wr_1" value="<?php echo $w == 'u' ? $write['wr_1']:'0'; ?>" id="wr_1" class="frm_input" size="50" maxlength="100">
                        -2147483648 ~ 0 ~ 2147483647
                        </td>
                    </tr>
                    <?php } ?>

                    <tr>
                        <th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
                        <td>
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

                    <?php
                    $is_link = array(
                        'banner' => array(true, 1),
                        'visual' => array(true, 1),
                        'bottom' => array(true, 1),
                        'family' => array(true, 1),
                        'quick' => array(true, 1),
                        'media' => array(true, 1),
                    );
                    for ($i=1; $is_link[$bo_table][0] && $i<=$is_link[$bo_table][1]; $i++) { ?>
                        <tr>
                            <th scope="row"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></th>
                            <td><input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input" size="50"></td>
                        </tr>
                    <?php } ?>

                    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
                        <tr>
                            <?php if ($i > 0) { ?>
                                <th scope="row">파일 #<?php echo $i+1 ?></th>
                            <?php } else { ?>
                                <th scope="row"><?php echo '썸네일 <br> ('.$board['bo_gallery_width'].'px X '.$board['bo_gallery_height'].'px)'; ?></th>
                            <?php } ?>
                            <td>
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
                            <th scope="row">자동등록방지</th>
                            <td>
                                <?php echo $captcha_html ?>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>

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