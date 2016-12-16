<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<ul class="item_wrap clfl">
    <?php for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], 255, 155);

        if($thumb['src']) {
            ?>
            <li class="item">
                <?php if ($list[$i]['link'][1]) {
                    $youtube_url = $list[$i]['link'][1];
                    $regExp = '/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/';
                    preg_match($regExp, $youtube_url, $matches);
                    $youtube_id = $matches[7];
                    ?>
                    <a href="#"  class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0' frameborder='0' allowfullscreen></iframe>">
                        <img src="<?php echo $thumb['src']; ?>" alt="<?php echo $list[$i]['subject']; ?>">
                    </a>
                    <?php
                } else { ?>
                    <img src="<?php echo $thumb['src']; ?>" alt="<?php echo $list[$i]['subject']; ?>">
                <?php } ?>
                <p><?php echo $list[$i]['subject']; ?></p>
            </li>
            <?php
        }
    }
    ?>
</ul>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->