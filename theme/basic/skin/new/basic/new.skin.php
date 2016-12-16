<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// 선택삭제으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_admin) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$new_skin_url.'/style.css">', 0);
?>

<script type="text/javascript">
    var dep1 = 0;
    var dep2 = 0;
</script>
<div id="sub_container" class="clfl">
    <div class="subcontents_wrap_type2">
        <ul class="title_wrap clfl">
            <li class="title fl" style="font-size: 24px;font-weight: bold;"><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>등록관리</li>
                    <li>></li>
                    <li><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></li>
                </ul>
            </li>
        </ul>

        <!-- 전체게시물 검색 시작 { -->
        <fieldset id="new_sch">
            <legend>상세검색</legend>
            <form name="fnew" method="get">
            <?php echo $group_select ?>
            <label for="view" class="sound_only">검색대상</label>
            <select name="view" id="view">
                <option value="">전체게시물
                <option value="w">원글만
                <option value="c">코멘트만
            </select>
            <label for="mb_id" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="mb_id" value="<?php echo $mb_id ?>" id="mb_id" required class="frm_input required">
            <input type="submit" value="검색" class="btn_submit">
            <p>회원 아이디만 검색 가능</p>
            </form>
            <script>
            /* 셀렉트 박스에서 자동 이동 해제
            function select_change()
            {
                document.fnew.submit();
            }
            */
            document.getElementById("gr_id").value = "<?php echo $gr_id ?>";
            document.getElementById("view").value = "<?php echo $view ?>";
            </script>
        </fieldset>
        <!-- } 전체게시물 검색 끝 -->

        <!-- 전체게시물 목록 시작 { -->
        <form name="fnewlist" method="post" action="#" onsubmit="return fnew_submit(this);">
            <input type="hidden" name="sw"       value="move">
            <input type="hidden" name="view"     value="<?php echo $view; ?>">
            <input type="hidden" name="sfl"      value="<?php echo $sfl; ?>">
            <input type="hidden" name="stx"      value="<?php echo $stx; ?>">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
            <input type="hidden" name="page"     value="<?php echo $page; ?>">
            <input type="hidden" name="pressed"  value="">

            <table cellpadding="0" cellspacing="0" class="tb_type9">
                <colgroup>
                    <?php if ($is_checkbox) { ?>
                        <col width="5%"/>
                    <?php } ?>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="*"/>
                    <col width="10%"/>
                    <col width="15%"/>
                </colgroup>
                <thead>
                <tr>
                    <?php if ($is_admin) { ?>
                    <td>
                        <label for="all_chk" class="sound_only">목록 전체</label>
                        <input type="checkbox" id="all_chk">
                    </td>
                    <?php } ?>
                    <td>그룹</td>
                    <td>게시판</td>
                    <td>제목</td>
                    <td>이름</td>
                    <td>일시</td>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i=0; $i<count($list); $i++)
                {
                    $num = $total_count - ($page - 1) * $config['cf_page_rows'] - $i;
                    $gr_subject = cut_str($list[$i]['gr_subject'], 20);
                    $bo_subject = cut_str($list[$i]['bo_subject'], 20);
                    $wr_subject = get_text(cut_str($list[$i]['wr_subject'], 80));
                ?>
                <tr>
                    <?php if ($is_admin) { ?>
                    <td class="td_chk">
                        <label for="chk_bn_id_<?php echo $i; ?>" class="sound_only"><?php echo $num?>번</label>
                        <input type="checkbox" name="chk_bn_id[]" value="<?php echo $i; ?>" id="chk_bn_id_<?php echo $i; ?>">
                        <input type="hidden" name="bo_table[<?php echo $i; ?>]" value="<?php echo $list[$i]['bo_table']; ?>">
                        <input type="hidden" name="wr_id[<?php echo $i; ?>]" value="<?php echo $list[$i]['wr_id']; ?>">
                    </td>
                    <?php } ?>
                    <td class="td_group"><a href="./new.php?gr_id=<?php echo $list[$i]['gr_id'] ?>"><?php echo $gr_subject ?></a></td>
                    <td class="td_board"><a href="./board.php?bo_table=<?php echo $list[$i]['bo_table'] ?>"><?php echo $bo_subject ?></a></td>
                    <td><a href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['comment'] ?><?php echo $wr_subject ?></a></td>
                    <td class="td_name"><div><?php echo $list[$i]['name'] ?></div></td>
                    <td class="td_date"><?php echo $list[$i]['datetime2'] ?></td>
                </tr>
                <?php }  ?>

                <?php if ($i == 0)
                    echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>';
                ?>
                </tbody>
            </table>

            <?php if ($is_admin) { ?>
            <div class="sir_bw02 sir_bw">
                <input type="submit" onclick="document.pressed=this.value" value="선택삭제" class="btn_submit">
            </div>
            <?php } ?>
        </form>

        <?php if ($is_admin) { ?>
        <script>
        $(function(){
            $('#all_chk').click(function(){
                $('[name="chk_bn_id[]"]').attr('checked', this.checked);
            });
        });

        function fnew_submit(f)
        {
            f.pressed.value = document.pressed;

            var cnt = 0;
            for (var i=0; i<f.length; i++) {
                if (f.elements[i].name == "chk_bn_id[]" && f.elements[i].checked)
                    cnt++;
            }

            if (!cnt) {
                alert(document.pressed+"할 게시물을 하나 이상 선택하세요.");
                return false;
            }

            if (!confirm("선택한 게시물을 정말 "+document.pressed+" 하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다")) {
                return false;
            }

            f.action = "./new_delete.php";

            return true;
        }
        </script>
        <?php } ?>

        <?php echo $write_pages ?>
        <!-- } 전체게시물 목록 끝 -->
    </div>
</div>