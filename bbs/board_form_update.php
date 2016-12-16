<?php
include_once('./_common.php');

if (!$bo_table) { alert('게시판 TABLE명은 반드시 입력하세요.'); }
if (!preg_match("/^([A-Za-z0-9_]{1,20})$/", $bo_table)) { alert('게시판 TABLE명은 공백없이 영문자, 숫자, _ 만 사용 가능합니다. (20자 이내)'); }

// 분류에 & 나 = 는 사용이 불가하므로 2바이트로 바꾼다.
$src_char = array('&', '=');
$dst_char = array('＆', '〓');
$bo_category_list = str_replace($src_char, $dst_char, $bo_category_list);

$sql_common = "  ";

    $sql = " update {$g5['board_table']}
                set bo_category_list    = '{$_POST['bo_category_list']}'
              where bo_table = '{$bo_table}' ";
    sql_query($sql);

delete_cache_latest($bo_table);

goto_url("board.php?bo_table={$bo_table}");
?>
