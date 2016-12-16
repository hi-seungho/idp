<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>
<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="title">
    <p><img src="/front/image/main/inner5_area1_tit1.gif" alt=""/></p>
    <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table; ?>"><img src="/front/image/main/inner2_area2_ico1.gif" alt=""/></a>
</div>
<ul class="list_wrap">
    <?php for ($i=0; $i<count($list); $i++) { ?>
        <li>
            <a href="<?php echo $list[$i]['href'] ?>">
                <span><?php echo $list[$i]['subject'] ?></span>
            </a>
        </li>
    <?php } ?>
</ul>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->