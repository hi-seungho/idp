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
                    <p><img src="/front/image/common/lnb/top_mypage.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='/mypage/myinfo.php'">나의유학</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=reservation'">상담예약</p>
                        </li>
                        <li class="m3">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/board.php?bo_table=myqna'">나의Q&A</p>
                        </li>
                        <li class="m4">
                            <p class="dep1" onclick="javascript: location.href='/self/apply_info.php'">셀프학교지원</p>
                        </li>
                        <li class="m5">
                            <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php'">회원정보변경</p>
                        </li>
                        <li class="m6">
                            <p class="dep1" onclick="javascript: member_leave();">회원탈퇴</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/mypage/myinfo/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>마이페이지</li>
                            <li>></li>
                            <li>나의 Q&A</li>
                        </ul>
                    </li>
                </ul>
                <img class="mb30" src="/front/image/mypage/myqna/txt1.gif"/>
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
                <table cellpadding="0" cellspacing="0" class="tb_type9">
                    <colgroup>
                        <col width="10%"/>
                        <col width="*"/>
                        <col width="10%"/>
                        <col width="15%"/>
                        <col width="10%"/>
                    </colgroup>
                    <thead>
                        <tr>
                            <td>번호</td>
                            <td>제목</td>
                            <td>작성자</td>
                            <td>날짜</td>
                            <td>조회</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><a href="myqna_view.php"><img class="ico_reply"src="/front/image/common/board/ico_reply.gif"/><span class="reply">[답변]&nbsp;</span>제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="myqna_view.php">제목이 들어갑니다.<img class="ml05" src="/front/image/common/board/ico_new.png"/></a></td>
                            <td>홍길동</td>
                            <td>2016-12-12</td>
                            <td>9999</td>
                        </tr>
                    </tbody>
                </table>
                <div class="ar mt20">
                    <a href="myqna_write.php"><img src="/front/image/common/board/btn_write.gif"/></a>
                </div>
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