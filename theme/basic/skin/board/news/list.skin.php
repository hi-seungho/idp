<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$write_pages = get_paging2(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './board.php?bo_table='.$bo_table.$qstr.'&amp;page=');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<script type="text/javascript">
    var dep1 = 1;
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
                <li class="m6">
                    <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=exhibition&sfl=wr_3&stx=<?php echo urlencode('마감'); ?>'">지난 박람회</p>
                </li>
                <li class="m7">
                    <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=exhibition&sfl=wr_3&stx=<?php echo urlencode('진행중'); ?>'">진행중인 박람회</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="subcontents_wrap">
        <ul class="title_wrap clfl">
            <li class="title fl"><img src="/front/image/community/news/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>커뮤니티</li>
                    <li>></li>
                    <li>IDP 새소식</li>
                </ul>
            </li>
        </ul>
        <img class="mb40" src="/front/image/community/news/img_top.jpg"/>
        <div class="boardsearch_wrap clfl">
            <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <label for="sfl" class="sound_only">검색대상</label>
                <select name="sfl" id="sfl" class="select_type2">
                    <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
                    <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
                    <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
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

            <?php if ($is_checkbox) { ?>
                <div id="gall_allchk">
                    <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                    <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                </div>
            <?php } ?>

            <table cellpadding="0" cellspacing="0" class="tb_type8">
                <colgroup>
                    <col width="38%"/>
                    <col width="*"/>
                </colgroup>
                <?php for ($i=0; $i<count($list); $i++) { ?>
                    <tr>
                        <td class="image">
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <?php
                                $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);

                                if($thumb['src']) {
                                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$board['bo_gallery_width'].'" height="'.$board['bo_gallery_height'].'">';
                                } else {
                                    $img_content = '<img src="http://placehold.it/'.$board['bo_gallery_width'].'x'.$board['bo_gallery_height'].'"/>';
                                }

                                echo $img_content;
                                ?>
                            </a>
                        </td>
                        <td class="text">
                            <?php if ($is_checkbox) { ?>
                                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                            <?php } ?>
                            <span class="sound_only">
                            <?php
                            if ($wr_id == $list[$i]['wr_id'])
                                echo "<span class=\"bo_current\">열람중</span>";
                            else
                                echo $list[$i]['num'];
                            ?>
                        </span>
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <p class="title"><?php echo $list[$i]['subject'] ?></p>
                                <p class="date"><?php echo $list[$i]['datetime2'] ?></p>
                                <p class="cont">
                                    <?php echo nl2br($list[$i]['wr_1']); ?>
                                </p>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
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
                            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>"><img src="/front/image/common/board/btn_write.gif" title=""></a></li><?php } ?>
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

    </div>
</div>
