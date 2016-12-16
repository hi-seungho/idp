<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
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
                    <li>지원관리</li>
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
            <input type="hidden" name="wr_password" value="<?php echo rand(1111, 9999) ?>">
            <div class="tbl_frm01 tbl_wrap">
                <table>
                    <tbody>
                    <?php if ($is_name) { ?>
                        <tr>
                            <th scope="row"><label for="wr_name">성명<strong class="sound_only">필수</strong></label></th>
                            <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="10" maxlength="20"></td>
                        </tr>
                    <?php } ?>

                    <tr>
                        <th scope="row"><label for="wr_1">연락처</label></th>
                        <td><input type="text" name="wr_1" value="<?php echo $write['wr_1'] ?>" id="wr_1" class="frm_input" size="50" maxlength="100"></td>
                    </tr>

                    <?php if ($is_email) { ?>
                        <tr>
                            <th scope="row"><label for="wr_email">이메일</label></th>
                            <td><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" size="50" maxlength="100"></td>
                        </tr>
                    <?php } ?>

                    <tr>
                        <th scope="row"><label for="wr_2">희망국가<strong class="sound_only">필수</strong></label></th>
                        <td>
                            <ul class="radio_sel">
                                <li><input type="radio" name="wr_2" value="호주" <?php echo get_checked('호주', $write['wr_2']); ?> class="input_chk"><label>호주</label></li>
                                <li><input type="radio" name="wr_2" value="영국" <?php echo get_checked('영국', $write['wr_2']); ?> class="input_chk"><label>영국</label></li>
                                <li><input type="radio" name="wr_2" value="미국" <?php echo get_checked('미국', $write['wr_2']); ?> class="input_chk"><label>미국</label></li>
                                <li><input type="radio" name="wr_2" value="캐나다" <?php echo get_checked('캐나다', $write['wr_2']); ?> class="input_chk"><label>캐나다</label></li>
                                <li><input type="radio" name="wr_2" value="뉴질랜드" <?php echo get_checked('뉴질랜드', $write['wr_2']); ?> class="input_chk"><label>뉴질랜드</label></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><label for="wr_subject">희망과정<strong class="sound_only">필수</strong></label></th>
                        <td>
                            <ul class="radio_sel">
                                <li><input type="radio" name="wr_subject" <?php echo $w == '' ? 'checked': get_checked('어학연수', $subject); ?> value="어학연수" class="input_chk"><label>어학연수</label></li>
                                <li><input type="radio" name="wr_subject" <?php echo get_checked('전문대 과정', $subject); ?> value="전문대 과정" class="input_chk"><label>전문대 과정</label></li>
                                <li><input type="radio" name="wr_subject" <?php echo get_checked('대학교 입학', $subject); ?> value="대학교 입학" class="input_chk"><label>대학교 입학</label></li>
                                <li><input type="radio" name="wr_subject" <?php echo get_checked('대학교 편입', $subject); ?> value="대학교 편입" class="input_chk"><label>대학교 편입</label></li>
                                <li><input type="radio" name="wr_subject" <?php echo get_checked('석사과정', $subject); ?> value="석사과정" class="input_chk"><label>석사과정</label></li>
                                <li><input type="radio" name="wr_subject" <?php echo get_checked('박사과정', $subject); ?> value="박사과정" class="input_chk"><label>박사과정</label></li>
                                <li><input type="radio" name="wr_subject" <?php echo get_checked('조기유학', $subject); ?> value="조기유학" class="input_chk"><label>조기유학</label></li>
                                <li><input type="radio" name="wr_subject" <?php echo get_checked('기타', $subject); ?> value="기타" class="input_chk"><label>기타</label></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><label for="wr_3">희망시기</label></th>
                        <td>
                            <input type="text" name="wr_3" value="<?php echo $write['wr_3'] ?>" id="wr_3" class="frm_input" size="10" maxlength="4">
                            년
                            <select name="wr_4" id="wr_4" >
                                <option value="1" <?php echo get_selected(1, $write['wr_4']); ?>>1</option>
                                <option value="2" <?php echo get_selected(2, $write['wr_4']); ?>>2</option>
                                <option value="3" <?php echo get_selected(3, $write['wr_4']); ?>>3</option>
                                <option value="4" <?php echo get_selected(4, $write['wr_4']); ?>>4</option>
                                <option value="5" <?php echo get_selected(5, $write['wr_4']); ?>>5</option>
                                <option value="6" <?php echo get_selected(6, $write['wr_4']); ?>>6</option>
                                <option value="7" <?php echo get_selected(7, $write['wr_4']); ?>>7</option>
                                <option value="8" <?php echo get_selected(8, $write['wr_4']); ?>>8</option>
                                <option value="9" <?php echo get_selected(9, $write['wr_4']); ?>>9</option>
                                <option value="10" <?php echo get_selected(10, $write['wr_4']); ?>>10</option>
                                <option value="11" <?php echo get_selected(11, $write['wr_4']); ?>>11</option>
                                <option value="12" <?php echo get_selected(12, $write['wr_4']); ?>>12</option>
                            </select>
                            월
                            <input type="checkbox" name="wr_5" <?php echo get_checked('미정', $write['wr_5']); ?> value="미정" class="input_chk"><label>미정</label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><label for="wr_6">방문희망일</label></th>
                        <td>
                            <input type="text" name="wr_6" value="<?php echo $write['wr_6'] ?>" id="wr_6" class="frm_input" size="20" maxlength="10">
                            <input type="text" name="wr_7" value="<?php echo $write['wr_7'] ?>" id="wr_7" class="frm_input" size="10" maxlength="2">
                            시
                            <input type="text" name="wr_8" value="<?php echo $write['wr_8'] ?>" id="wr_8" class="frm_input" size="10" maxlength="2">
                            분
                            <select name="wr_9" id="wr_9">
                                <option value="오전" <?php echo get_selected("오전", $write['wr_9']); ?>>오전</option>
                                <option value="오후" <?php echo get_selected("오후", $write['wr_9']); ?>>오후</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><label for="wr_content">문의사항<strong class="sound_only">필수</strong></label></th>
                        <td class="wr_content">
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