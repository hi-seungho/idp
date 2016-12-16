<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>
<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="title_wrap clfl">
    <img class="fl" src="/front/image/community/index/tit1.gif"/>
    <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table; ?>"><img class="fr" src="/front/image/community/index/btn_more.gif"/></a>
</div>
<div class="mt20 clfl">
    <table cellpadding="0" cellspacing="0" class="tb_commleft1">
        <tr class="cell1">
            <td>
                <a href="<?php echo $list[0]['href'] ?>">
                    <?php
                    $thumb = get_list_thumbnail($bo_table, $list[0]['wr_id'], 181, 113);

                    if($thumb['src']) {
                        ?>
                        <img src="<?php echo $thumb['src']; ?>" alt="<?php echo  $list[0]['wr_subject']; ?>">
                        <?php
                    } else {
                        echo '<img src="http://placehold.it/181x113"/>';
                    }
                    ?>
                </a>
            </td>
        </tr>
        <tr class="cell2">
            <td>
                <a href="<?php echo $list[0]['href'] ?>">
                    <?php echo $list[0]['subject'] ?>
                </a>
            </td>
        </tr>
        <tr class="cell3">
            <td>
                <?php echo nl2br(cut_str($list[0]['wr_1'], 70)); ?>
            </td>
        </tr>
        <tr class="cell4">
            <td><?php echo $list[0]['datetime2'] ?></td>
        </tr>
    </table>
    <table cellpadding="0" cellspacing="0" class="tb_commleft2">
        <colgroup>
            <col width="48%"/>
            <col width="*"/>
        </colgroup>
        <?php for ($i=1; $i<count($list); $i++) { ?>
            <tr>
                <td>
                    <a href="<?php echo $list[$i]['href'] ?>">
                        <?php
                        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], 107, 67);

                        if($thumb['src']) {
                            ?>
                            <img src="<?php echo $thumb['src']; ?>" alt="<?php echo  $list[$i]['wr_subject']; ?>">
                            <?php
                        } else {
                            echo '<img src="http://placehold.it/107x67"/>';
                        }
                        ?>
                    </a>
                </td>
                <td>
                    <ul>
                        <li class="title">
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <?php echo $list[$i]['subject'] ?>
                            </a>
                        </li>
                        <li class="date"><?php echo $list[$i]['datetime2'] ?></li>
                    </ul>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->