<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<script>
    function window_open(url, title) {
        if (url != "") {
            window.open(url, title);
        }
    }
</script>
<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<select onchange="window_open(this.value, '<?php echo $list[$i]['subject'] ?>')" class="select_type1">
    <option value="">FAMILY SITE</option>
    <?php for ($i=0; $i<count($list); $i++) {
        if ($list[$i]['link'][1]) { ?>
            <option value="<?php echo $list[$i]['link_href'][1] ?>"><?php echo $list[$i]['subject'] ?></option>
        <?php }
    }
    ?>
</select>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->