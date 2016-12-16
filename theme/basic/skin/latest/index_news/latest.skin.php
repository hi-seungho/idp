<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<ul class="slides">
    <li>
        <table cellpadding="0" cellspacing="0" class="tb_type1 mt15">
            <colgroup>
                <col width="40%"/>
                <col width="60%"/>
            </colgroup>
                <?php for ($i=0; $i<count($list); $i++) {
                    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], 107, 67);
                    ?>
                    <tr>
                        <td class="thumbimage">
                            <?php
                            if($thumb['src']) {
                                $imgcontent = '<img src="'.$thumb['src'].'" alt="'.$list[$i]['wr_subject'].'"/>';
                            } else {
                                $imgcontent = '<img src="http://placehold.it/107x67"/>';
                            }
                            ?>
                            <a href="<?php echo $list[$i]['href'] ?>"><?php echo $imgcontent; ?></a>
                        </td>
                        <td class="cont">
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <p class="txt1"><?php echo $list[$i]['subject']; ?></p>
                                <p class="txt2"><?php echo $list[$i]['datetime2']; ?></p>
                            </a>
                        </td>
                    </tr>
                    <?php
                    if ($i%2 == 1 && ($i+1) < count($list)) {
                        ?>
        </table>
    </li>
    <li>
        <table cellpadding="0" cellspacing="0" class="tb_type1 mt15">
            <colgroup>
                <col width="40%"/>
                <col width="60%"/>
            </colgroup>
                        <?php
                    }
                }
                ?>
        </table>
    </li>
</ul>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->