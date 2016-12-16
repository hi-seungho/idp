<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<link href='<?php echo G5_PLUGIN_URL; ?>/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo G5_PLUGIN_URL; ?>/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo G5_PLUGIN_URL; ?>/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo G5_PLUGIN_URL; ?>/fullcalendar/lib/jquery.min.js'></script>
<script src='<?php echo G5_PLUGIN_URL; ?>/fullcalendar/fullcalendar.min.js'></script>
<script src='<?php echo G5_PLUGIN_URL; ?>/fullcalendar/lang-all.js'></script>
<script src='<?php echo G5_PLUGIN_URL; ?>/fullcalendar/gcal.js'></script>
<script>
    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev today',
                center: 'title',
                right: 'next'
            },
            lang: 'ko',
          //  weekends: false,
            timeFormat: 'H(:mm)',
            editable: false,
            eventLimit: false,
            eventSources: [
                {
                    url: '<?php echo $board_skin_url; ?>/get-events.php',
                    data: {
                        bo_table:'<?php echo $bo_table; ?>',
                        sca: '<?php echo $sca; ?>',
                        sfl: '<?php echo $sfl; ?>',
                        stx: '<?php echo $stx; ?>'
                    },
                    error: function() {
                        $('#script-warning').show();
                    }
                },
            ],
            loading: function(bool) {
                $('#loading').toggle(bool);
            },
			height: "auto"
        });
    });

</script>

<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">
    <div id='script-warning'>
        <code>php/get-events.php</code> must be running.
    </div>
    <div id='loading'>loading...</div>
    <div id='calendar'></div>

</div>
