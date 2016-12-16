<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 5;
    var dep2 = 0;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_comm.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=news'">IDP 새소식</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=tips'">유학 꿀팁!!</p>
                        </li>
                        <li class="m3">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=review'">유학 후기</p>
                        </li>
                        <li class="m4">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=qna'">질문있어요!!</p>
                        </li>
                        <li class="m5">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=schedule'">이달의 행사</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/community/schedule/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>커뮤니티</li>
                            <li>></li>
                            <li>이달의 행사</li>
                        </ul>
                    </li>
                </ul>
                <link type="text/css" rel="stylesheet" href="/front/js/fullcalendar/fullcalendar.css" />
                <link type="text/css" rel="stylesheet" href="/front/js/fullcalendar/fullcalendar.print.css" />
                <script type="text/javascript" src="/front/js/fullcalendar/moment.min.js"></script>
                <script type="text/javascript" src="/front/js/fullcalendar/fullcalendar.js"></script>
                <script type="text/javascript" src="/front/js/fullcalendar/lang-all.js"></script>
                <script type="text/javascript" src="/front/js/jquery_ui/jquery-ui.js"></script>
                <link type="text/css" rel="stylesheet" href="/front/js/jquery_ui/jquery-ui.css" />
                <script>
                    $(document).ready(function() {

                        $('#calendar').fullCalendar({
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month,basicWeek,basicDay'
                            },
                            defaultDate: '2016-06-12',
                            editable: true,
                            eventLimit: true, // allow "more" link when too many events
                            events: [
                                {
                                    title: 'All Day Event',
                                    start: '2016-06-01'
                                },
                                {
                                    title: 'Long Event',
                                    start: '2016-06-07',
                                    end: '2016-06-10'
                                },
                                {
                                    id: 999,
                                    title: 'Repeating Event',
                                    start: '2016-06-09T16:00:00'
                                },
                                {
                                    id: 999,
                                    title: 'Repeating Event',
                                    start: '2016-06-16T16:00:00'
                                },
                                {
                                    title: 'Conference',
                                    start: '2016-06-11',
                                    end: '2016-06-13'
                                },
                                {
                                    title: 'Meeting',
                                    start: '2016-06-12T10:30:00',
                                    end: '2016-06-12T12:30:00'
                                },
                                {
                                    title: 'Lunch',
                                    start: '2016-06-12T12:00:00'
                                },
                                {
                                    title: 'Meeting',
                                    start: '2016-06-12T14:30:00'
                                },
                                {
                                    title: 'Happy Hour',
                                    start: '2016-06-12T17:30:00'
                                },
                                {
                                    title: 'Dinner',
                                    start: '2016-06-12T20:00:00'
                                },
                                {
                                    title: 'Birthday Party',
                                    start: '2016-06-13T07:00:00'
                                },
                                {
                                    title: 'Click for Google',
                                    url: 'http://google.com/',
                                    start: '2016-06-28'
                                }
                            ]
                        });

                    });

                </script>
                <style>

                    body {
                        margin: 40px 10px;
                        padding: 0;
                        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                        font-size: 14px;
                    }

                    #calendar {
                        max-width: 900px;
                        margin: 0 auto;
                    }

                </style>
                <div id="calendar"></div>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>