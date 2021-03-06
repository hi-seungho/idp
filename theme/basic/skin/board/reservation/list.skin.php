<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 10;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

$write_pages = get_paging2(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './board.php?bo_table='.$bo_table.$qstr.'&amp;page=');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
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
                    <option value="mb_id"<?php echo get_selected($sfl, 'mb_id', true); ?>>아이디</option>
                    <option value="wr_name"<?php echo get_selected($sfl, 'wr_name'); ?>>성명</option>
                    <option value="wr_2"<?php echo get_selected($sfl, 'wr_2'); ?>>희망국가</option>
                    <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject'); ?>>관심분야</option>
                    <?php if ($is_checkbox) { ?>
                        <option value="wr_1"<?php echo get_selected($sfl, 'wr_1'); ?>>컨설턴트</option>
                    <?php } ?>
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
                    <col width="5%"/>
                    <?php if ($is_checkbox) { ?>
                        <col width="*"/>
                    <?php } ?>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="10%"/>
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
                    <td>상태</td>
                    <td>아이디</td>
                    <td>성명</td>
                    <td>희망국가</td>
                    <td>관심분야</td>
                    <td>희망시기</td>
                    <td>방문희망일</td>
                    <td>컨설턴트</td>
                    <td><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜</a></td>
                </tr>
                </thead>
                <tbody>
                <?php for ($i=0; $i<count($list); $i++) { ?>
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
                        <td><?php echo $list[$i]['ca_name'] ?></td>
                        <td><?php echo $list[$i]['mb_id'] ?></td>
                        <td>
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <?php echo $list[$i]['name'] ?>
                            </a>
                            <?php
                            // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                            // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                            if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
                            if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
                            if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file'];
                            if (isset($list[$i]['icon_link'])) echo $list[$i]['icon_link'];
                            if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret'];

                            ?>
                        </td>
                        <td><?php echo $list[$i]['wr_2'] ?></td>
                        <td><?php echo $list[$i]['subject'] ?></td>
                        <td><?php echo $list[$i]['wr_3'] ?>년 <?php echo $list[$i]['wr_4'] ?>월</td>
                        <td><?php echo $list[$i]['wr_6'] ?></td>
                        <td><?php echo $list[$i]['wr_1'] ?></td>
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
