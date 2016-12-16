<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<ul class="slides">
    <?php for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], 183, 60);

        if($thumb['src']) {
            ?>
            <li>
                <?php if ($list[$i]['link'][1]) { ?>
                    <a href="<?php echo $list[$i]['link_href'][1] ?>" target="_blank"><img src="<?php echo $thumb['src']; ?>" alt="<?php echo $list[$i]['wr_subject']; ?>"/></a>
                    <?php
                } else { ?>
                    <img src="<?php echo $thumb['src']; ?>" alt="<?php echo $list[$i]['wr_subject']; ?>"/>
                <?php } ?>
            </li>
            <?php
        }
    }
    ?>
</ul>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->