<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div id="bannerimg">
    <?php for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], 1920, 130);

        if($thumb['src']) {
            if ($list[$i]['link'][1]) { ?>
                <a href="<?php echo $list[$i]['link_href'][1] ?>" style="background-image: url(<?php echo $thumb['src']; ?>);">&nbsp;</a>
                <?php
            } else { ?>
                <a href="#" onclick="return false;" style="background-image: url(<?php echo $thumb['src']; ?>);">&nbsp;</a>
            <?php }
        }
    }
    ?>
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->