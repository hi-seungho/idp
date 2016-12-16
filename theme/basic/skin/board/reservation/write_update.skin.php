<?php
if (!$is_admin) alert('신청되었습니다.', '/mypage/myinfo.php');
else
    goto_url(G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.$qstr);