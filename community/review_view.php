<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 3;
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
                    <li class="title fl"><img src="/front/image/community/review/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>커뮤니티</li>
                            <li>></li>
                            <li>유학 후기</li>
                        </ul>
                    </li>
                </ul>
                <table cellpadding="0" cellspacing="0" class="tb_type6">
                    <tr>
                        <td class="title">
                            <span class="tit">제목</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="info">
                            <ul>
                                <li><span>작성자 : </span><strong>관리자</strong></li>
                                <li><span>16-12-12 12:12</span></li>
                                <li><span>조회</span><span>20</span><span>회</span></li>
                                <li><span>댓글</span><span>20</span><span>건</span></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="download_link">
                        <td>
                            <img src="/front/image/common/board/ico_file.gif" alt="다운로드"/><a href="">abc.zip</a>&nbsp;<span>(2.2M)</span>
                        </br><span>20</span><span>회 다운로드 DATE : </span><span>2015-01-04 15:55:45</span>
                        </td>
                    </tr>
                    <tr class="download_link">
                        <td>
                            <img src="/front/image/common/board/ico_link.gif" alt="링크"/><a href="" target="_blank">http://www.abc.com</a>
                        </br><span>20</span><span>회 연결</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="cont">
                            asdadasdasd</br>
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
                        </td>
                    </tr>
                </table>
                <table cellpadding="0" cellspacing="0" class="tb_type7 mt30">
                    <colgroup>
                        <col width="*"/>
                        <col width="20%"/>
                    </colgroup>
                    <tr class="title">
                        <td colspan="2">댓글목록</td>
                    </tr>
                    <tr>
                        <td>
                            <div><strong class="mr10">홍길동</strong><span class="mr05">작성일</span><span>16-12-12 20:32</span></div>
                            <div class="mt10">
                                댓글 내용이 노출되는 영역입니다.
                            </div>
                        </td>
                        <td class="ar">
                            <a href=""><img src="/front/image/common/board/btn_reply.gif"/></a>
                            <a href=""><img src="/front/image/common/board/btn_delete.gif"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div><strong class="mr10">홍길동</strong><span class="mr05">작성일</span><span>16-12-12 20:32</span></div>
                            <div class="mt10">
                                댓글 내용이 노출되는 영역입니다.
                            </div>
                        </td>
                        <td class="ar">
                            <a href=""><img src="/front/image/common/board/btn_reply.gif"/></a>
                            <a href=""><img src="/front/image/common/board/btn_delete.gif"/></a>
                        </td>
                    </tr>
                </table>

                <table cellpadding="0" cellspacing="0" class="tb_type5 mt30">
                    <colgroup>
                        <col width="15%"/>
                        <col width="*"/>
                    </colgroup>
                    <tr>
                        <td class="title">이름</td>
                        <td class="cont">
                            <input type="text" class="inp_text1" size="40">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">비밀번호</td>
                        <td class="cont">
                            <input type="password" class="inp_text1" size="40">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">비밀글 사용</td>
                        <td class="cont">
                            <input type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">자동등록방지</td>
                        <td class="cont">
                            자동등록방지
                        </td>
                    </tr>
                    <tr>
                        <td class="title">내용</td>
                        <td class="cont">
                            <textarea class="textarea2"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="ac mt10">
                                <a href=""><img src="/front/image/common/board/btn_reply_submit.gif"/></a>
                            </div>
                        </td>
                    </tr>
                </table>
                <ul class="b_btns mt30 ar clfl">
                    <li class="fl mr05"><a href=""><img src="/front/image/common/board/btn_bprev.gif"/></a></li>
                    <li class="fl"><a href=""><img src="/front/image/common/board/btn_bnext.gif"/></a></li>
                    <li><a href=""><img src="/front/image/common/board/btn_wedit.gif"/></a></li>
                    <li><a href=""><img src="/front/image/common/board/btn_wdelete.gif"/></a></li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=review"><img src="/front/image/common/board/btn_wlist.gif"/></a></li>
                    <li><a href=""><img src="/front/image/common/board/btn_wreply.gif"/></a></li>
                    <li><a href=""><img src="/front/image/common/board/btn_write.gif"/></a></li>
                </ul>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>