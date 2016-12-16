<?php
for ($i=11; $i<=15; $i++) {
    $var = "wr_$i";
    $$var = "";
    if (isset($_POST['wr_'.$i]) && settype($_POST['wr_'.$i], 'string')) {
        $$var = trim($_POST['wr_'.$i]);
    }
}

if ($w == 'u') $wr_id = $wr['wr_id'];

$sql = " update {$write_table}
            set  wr_11 = '{$wr_11}',
                 wr_12 = '{$wr_12}',
                 wr_13 = '{$wr_13}',
                 wr_14 = '{$wr_14}',
                 wr_15 = '{$wr_15}'
          where wr_id = '{$wr_id}' ";
sql_query($sql);

if (!$is_admin) goto_url(G5_URL.'/self/apply_complete.php?name='.$wr_name);