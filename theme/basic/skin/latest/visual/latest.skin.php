<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div style="position: relative; z-index: 0;">
    <div id="mainslider" class="flexslider">
        <ul class="slides">
            <?php for ($i=0; $i<count($list); $i++) {
                $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], 1378, 496);

                if($thumb['src']) {
                    $row[] = $list[$i]['wr_subject'];
                    ?>
                    <li>
                        <?php if ($list[$i]['link'][1]) { ?>
                            <a href="<?php echo $list[$i]['link_href'][1] ?>"
                               style='background: url("<?php echo $thumb['src']; ?>") center top no-repeat;display: block;height: 496px;'>&nbsp;</a>
                            <?php
                        } else { ?>
                            <a href="#"
                               style='background: url("<?php echo $thumb['src']; ?>") center top no-repeat; height:496px;display: block;'>&nbsp;</a>
                        <?php } ?>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
</div>
<div id="maincarousel" class="flexslider">
    <ul class="slides">
        <?php for ($i=0; $i<count($row); $i++) { ?>
        <li><span><?php echo $row[$i]; ?></span></li>
        <?php } ?>
        <!-- items mirrored twice, total of 12 -->
    </ul>
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->