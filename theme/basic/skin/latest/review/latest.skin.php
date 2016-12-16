<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="title_wrap clfl">
    <img class="fl" src="/front/image/community/index/tit2.gif"/>
    <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table; ?>"><img class="fr" src="/front/image/community/index/btn_more.gif"/></a>
</div>
<table cellpadding="0" cellspacing="0" class="tb_commright">
    <?php for ($i=0; $i<count($list); $i++) {  ?>
        <tr>
            <td>
                <ul>
                    <li>
                        <?php
                        //echo $list[$i]['icon_reply']." ";
                        echo "<a href=\"".$list[$i]['href']."\">";
                            echo $list[$i]['subject'];
                        echo "</a>";
                        ?>
                    </li>
                    <li><?php echo $list[$i]['datetime2']; ?></li>
                </ul>
            </td>
        </tr>
    <?php }  ?>
</table>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->