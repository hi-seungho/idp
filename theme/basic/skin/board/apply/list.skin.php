<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 7;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

$write_pages = get_paging2(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './board.php?bo_table='.$bo_table.$qstr.'&amp;page=');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<script type="text/javascript">
    var dep1 = 4;
    var dep2 = 0;
</script>
<div id="sub_container" class="clfl">
    <div class="subcontents_wrap_type2">
        <ul class="title_wrap clfl">
            <li class="title fl"><img src="/front/image/self/apply/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>셀프 학교 지원</li>
                </ul>
            </li>
        </ul>


        <!-- 게시판 카테고리 시작 { -->
        <?php if ($is_category) { ?>
            <nav id="bo_cate">
                <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
                <ul id="bo_cate_ul">
                    <?php echo $category_option ?>
                </ul>
            </nav>
        <?php } ?>
        <!-- } 게시판 카테고리 끝 -->


        <div class="boardsearch_wrap clfl">
            <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <label for="sfl" class="sound_only">검색대상</label>
                <select name="sfl" id="sfl" class="select_type2">
                    <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>유학종류</option>
                    <option value="ca_name"<?php echo get_selected($sfl, 'ca_name'); ?>>국가</option>
                    <option value="wr_name"<?php echo get_selected($sfl, 'wr_name'); ?>>이름</option>
                    <option value="wr_1"<?php echo get_selected($sfl, 'wr_1'); ?>>휴대폰</option>
                    <option value="wr_email"<?php echo get_selected($sfl, 'wr_email'); ?>>이메일</option>
                </select>
                <div class="inputsearch clfl">
                    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                    <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="inp_text2 required" size="31" maxlength="20">
                    <button type="submit" name=""></button>
                </div>
            </form>
        </div>

        <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="sst" value="<?php echo $sst ?>">
            <input type="hidden" name="sod" value="<?php echo $sod ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="hidden" name="sw" value="">

            <table cellpadding="0" cellspacing="0" class="tb_type9">
                <colgroup>
                    <col width="10%"/>
                    <?php if ($is_checkbox) { ?>
                        <col width="5%"/>
                    <?php } ?>
                    <col width="*"/>
                    <col width="10%"/>
                    <col width="15%"/>
                    <col width="10%"/>
                </colgroup>
                <thead>
                <tr>
                    <td>번호</td>
                    <?php if ($is_checkbox) { ?>
                        <td>
                            <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                            <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                        </td>
                    <?php } ?>
                    <td>국가</td>
                    <td>유학종류</td>
                    <td>이름</td>
                    <td>휴대폰</td>
                    <td>이메일</td>
                    <td><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜</a></td>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i=0; $i<count($list); $i++) {
                    ?>
                    <tr class="<?php if ($list[$i]['is_notice']) echo "notice"; ?>">
                        <td>
                            <?php
                            if ($list[$i]['is_notice']) // 공지사항
                                echo '<strong>공지</strong>';
                            else if ($wr_id == $list[$i]['wr_id'])
                                echo "<span class=\"bo_current\">열람중</span>";
                            else
                                echo $list[$i]['num'];
                            ?>
                        </td>
                        <?php if ($is_checkbox) { ?>
                            <td>
                                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                            </td>
                        <?php } ?>
                        <td>
                            <?php
                            echo $list[$i]['icon_reply'];
                            if ($is_category && $list[$i]['ca_name']) {
                                ?>
                                <a href="<?php echo $list[$i]['ca_name_href'] ?>"><?php echo $list[$i]['ca_name'] ?></a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php echo $list[$i]['subject'] ?>
                        </td>
                        <td>
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <?php echo $list[$i]['name'] ?>
                                <?php
                                // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                                // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                                if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];

                                ?>
                            </a>
                        </td>
                        <td><?php echo $list[$i]['wr_1'] ?></td>
                        <td><?php echo $list[$i]['wr_email'] ?></td>
                        <td><?php echo $list[$i]['datetime2'] ?></td>
                    </tr>
                <?php } ?>
                <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
                </tbody>
            </table>

            <?php if ($list_href || $is_checkbox || $write_href) { ?>
                <div class="bo_fx">
                    <?php if ($is_checkbox) { ?>
                        <ul class="btn_bo_adm">
                            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
                        </ul>
                    <?php } ?>

                    <?php if ($list_href || $write_href) { ?>
                        <ul class="btn_bo_user">
                            <?php if ($write_href) { ?><li><a href="/self/apply_info.php"><img src="/front/image/common/board/btn_write.gif" title=""></a></li><?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            <?php } ?>
        </form>

        <?php if($is_checkbox) { ?>
            <noscript>
                <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
            </noscript>
        <?php } ?>

        <!-- 페이지 -->
        <?php echo $write_pages;  ?>

        <?php if ($is_checkbox) { ?>
            <script>
                function all_checked(sw) {
                    var f = document.fboardlist;

                    for (var i=0; i<f.length; i++) {
                        if (f.elements[i].name == "chk_wr_id[]")
                            f.elements[i].checked = sw;
                    }
                }

                function fboardlist_submit(f) {
                    var chk_count = 0;

                    for (var i=0; i<f.length; i++) {
                        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
                            chk_count++;
                    }

                    if (!chk_count) {
                        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
                        return false;
                    }

                    if(document.pressed == "선택복사") {
                        select_copy("copy");
                        return;
                    }

                    if(document.pressed == "선택이동") {
                        select_copy("move");
                        return;
                    }

                    if(document.pressed == "선택삭제") {
                        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
                            return false;

                        f.removeAttribute("target");
                        f.action = "./board_list_update.php";
                    }

                    return true;
                }

                // 선택한 게시물 복사 및 이동
                function select_copy(sw) {
                    var f = document.fboardlist;

                    if (sw == "copy")
                        str = "복사";
                    else
                        str = "이동";

                    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

                    f.sw.value = sw;
                    f.target = "move";
                    f.action = "./move.php";
                    f.submit();
                }
            </script>
        <?php } ?>
        <!-- } 게시판 목록 끝 -->

        <div class="boardsearch_wrap clfl">
            <form name="fsearch" method="post" action="board_form_update.php">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <p>
                    분류와 분류 사이는 | 로 구분하세요. (예: 질문|답변) 첫자로 #은 입력하지 마세요. (예: #질문|#답변 [X])
                </p>
                <div class="inputsearch clfl" style="width: 544px;">
                    <label for="bo_category_list" class="sound_only">카테고리<strong class="sound_only"> 필수</strong></label>
                    <input type="text" name="bo_category_list" value="<?php echo $board['bo_category_list'] ?>" required id="bo_category_list" class="inp_text2 required" size="80" maxlength="255">
                    <input type="submit" value="등록" id="btn_submit" accesskey="s" class="btn_submit" style="float: right;">
                </div>
            </form>
        </div>
    </div>
</div>
