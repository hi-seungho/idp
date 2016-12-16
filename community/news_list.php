<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 1;
    //var dep2 = 0;
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
                    <li class="title fl"><img src="/front/image/community/news/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>커뮤니티</li>
                            <li>></li>
                            <li>IDP 새소식</li>
                        </ul>
                    </li>
                </ul>
                <img class="mb40" src="/front/image/community/news/img_top.jpg"/>
                <div class="boardsearch_wrap clfl">
                    <select class="select_type2">
                        <option value="">전체</option>
                        <option value="">제목</option>
                        <option value="">내용</option>
                        <option value="">글쓴이</option>
                    </select>
                    <div class="inputsearch clfl">
                        <input type="text" class="inp_text2" size="31">
                        <button name=""></button>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" class="tb_type8">
                    <colgroup>
                        <col width="38%"/>
                        <col width="*"/>
                    </colgroup>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="image"><a href="news_view.php"><img src="http://placehold.it/238x148"/></a></td>
                        <td class="text">
                            <a href="news_view.php">
                                <p class="title">제목</p>
                                <p class="date">2016-12-12</p>
                                <p class="cont">
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                    요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구 노출영역 요약문구
                                </p>
                            </a>
                        </td>
                    </tr>
                </table>
                <div id="page_sel" class="mt30">
                    <a href=""><img src="/front/image/common/board/btn_first.gif"/></a>
                    <a href=""><img src="/front/image/common/board/btn_prev.gif"/></a>
                    <a class="p_num on" href="">1</a>
                    <a class="p_num" href="">2</a>
                    <a class="p_num" href="">3</a>
                    <a class="p_num" href="">4</a>
                    <a class="p_num" href="">5</a>
                    <a class="p_num" href="">6</a>
                    <a class="p_num" href="">7</a>
                    <a class="p_num" href="">8</a>
                    <a class="p_num" href="">9</a>
                    <a href=""><img src="/front/image/common/board/btn_next.gif"/></a>
                    <a href=""><img src="/front/image/common/board/btn_last.gif"/></a>
                </div>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>