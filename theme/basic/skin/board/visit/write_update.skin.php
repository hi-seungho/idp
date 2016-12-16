<?php
if (!$is_admin) alert_close('신청되었습니다.');
else
    goto_url(G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.$qstr);