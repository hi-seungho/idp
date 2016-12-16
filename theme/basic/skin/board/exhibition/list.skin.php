<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// 분류 사용 여부
$is_category = false;
$category_option = '';
if ($board['bo_use_category']) {
    $is_category = true;
    $category_href = G5_BBS_URL.'/board.php?bo_table='.$bo_table.$qstr;

    $category_option .= '<li><a href="'.$category_href.'"';
    if ($sca=='')
        $category_option .= ' class="on"';
    $category_option .= '>전체</a></li>';

    $categories = explode('|', $board['bo_category_list']); // 구분자가 , 로 되어 있음
    for ($i=0; $i<count($categories); $i++) {
        $category = trim($categories[$i]);
        if ($category=='') continue;
        $category_option .= '<li><a href="'.($category_href."&amp;sca=".urlencode($category)).'"';
        $category_msg = '';
        if ($category==$sca) { // 현재 선택된 카테고리라면
            $category_option .= ' class="on"';
            $category_msg = '<span class="sound_only">열린 분류 </span>';
        }
        $category_option .= '>'.$category_msg.$category.'</a></li>';
    }
}

$write_pages = get_paging2(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './board.php?bo_table='.$bo_table.$qstr.'&amp;page=');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<?php if ($sfl == "wr_3" && $stx == '진행중') { ?>
<script type="text/javascript">
    var dep1 = 7;
    //var dep2 = 0;
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
            <li class="title fl"><img src="/front/image/exhibition/ongoing/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>커뮤니티</li>
                    <li>></li>
                    <li>진행중인 박람회</li>
                </ul>
            </li>
        </ul>
        <img class="mb50" src="/front/image/exhibition/exhibition/cont1.gif"/>
<?php } else { ?>
<script type="text/javascript">
    var dep1 = 6;
    //var dep2 = 0;
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
            <li class="title fl"><img src="/front/image/exhibition/exhibition/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>커뮤니티</li>
                    <li>></li>
                    <li>지난 박람회</li>
                </ul>
            </li>
        </ul>
        <img class="mb50" src="/front/image/exhibition/exhibition/cont1.gif"/>


        <!-- 게시판 카테고리 시작 { -->
        <?php if ($is_category) { ?>
            <ul class="tab_fluid">
                <?php echo $category_option ?>
            </ul>
        <?php } ?>
        <!-- } 게시판 카테고리 끝 -->

<?php } ?>
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

            <div class="exbihitionlist_wrap clfl">
                <?php for ($i=0; $i<count($list); $i++) { ?>
                    <div class="item clfl">
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

                        <div class="thumbnail_pic"><a href="exhibition_view.php"></a>
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
                        </div>
                        <div class="discription">
                            <p class="title">
                                <a href="<?php echo $list[$i]['href'] ?>">
                                    <?php echo $list[$i]['subject'] ?>
                                </a>
                            </p>
                            <p class="date"><?php echo $list[$i]['wr_1'] ?></p>
                            <p>
                                <?php echo nl2br($list[$i]['wr_2']); ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <?php if ($list_href || $is_checkbox || $write_href) { ?>
                <div class="bo_fx">
                    <?php if ($is_checkbox) { ?>
                        <ul class="btn_bo_adm">
                            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
                        </ul>
                    <?php } ?>

                    <?php if ($list_href || $write_href) { ?>
                        <ul class="btn_bo_user">
                            <?php if ($write_href) { ?><li><a href="<?php echo $write_href.$qstr ?>"><img src="/front/image/common/board/btn_write.gif" title=""></a></li><?php } ?>
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

        <?php if ($is_admin) { ?>
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
        <?php } ?>
    </div>
</div>
