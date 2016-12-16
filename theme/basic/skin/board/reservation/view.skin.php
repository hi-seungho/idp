<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<div id="sub_container" class="clfl">
    <?php if ($member['mb_level'] == 2) { ?>
        <script type="text/javascript">
            var dep1 = 3;
            var dep2 = 0;
        </script>
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
    <?php } else { ?>
        <script type="text/javascript">
            var dep1 = 1;
            var dep2 = 0;
        </script>
        <div class="lnb_wrap">
            <div id="lnb">
                <p><img src="/front/image/common/lnb/top_mypage.gif"/></p>
                <ul>
                    <li class="m1">
                        <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/board.php?bo_table=reservation'">상담예약</p>
                    </li>
                    <li class="m2">
                        <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php'">회원정보변경</p>
                    </li>
                    <li class="m3">
                        <p class="dep1" onclick="javascript: member_leave();">회원탈퇴</p>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>
    <div class="subcontents_wrap">
        <ul class="title_wrap clfl">
            <li class="title fl"><img src="/front/image/mypage/reservation/title.gif"/></li>
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
        <img src="/front/image/mypage/reservation/txt1.gif"/>
        <p class="stit_type1 mt70"><img src="/front/image/mypage/reservation/tit1.gif"/></p>

        <table cellpadding="0" cellspacing="0" class="tb_type5">
            <colgroup>
                <col width="15%"/>
                <col width="*"/>
            </colgroup>
            <tbody>
            <tr>
                <td class="title"><label for="wr_name">성명<strong class="sound_only">필수</strong></label></td>
                <td class="cont"><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></td>
            </tr>

            <tr>
                <td class="title"><label for="wr_email">이메일</label></td>
                <td class="cont"><?php echo $view['wr_email'] ?></td>
            </tr>

            <tr>
                <td class="title"><label for="ca_name">분류</label></td>
                <td class="cont"><?php echo $view['ca_name'] ?></td>
            </tr>

            <tr>
                <td class="title"><label for="wr_1">담당 유학 <br>컨설턴트</label></td>
                <td class="cont">
                    <?php
                    $mb = get_member($write['wr_1']);
                    echo $mb['mb_name'];
                    echo '(';
                    echo $mb['mb_id'];
                    echo ')';
                    ?>
                </td>
            </tr>

            <tr>
                <td class="title"><label for="wr_2">희망국가</label></td>
                <td class="cont"><?php echo $view['wr_2'] ?></td>
            </tr>

            <tr>
                <td class="title"><label for="wr_subject">관심분야</label></td>
                <td class="cont"><?php echo $view['wr_subject'] ?></td>
            </tr>

            <tr>
                <td class="title"><label for="wr_3">희망시기</label></td>
                <td class="cont">
                    <?php echo $view['wr_3'] ?>
                    년
                    <?php echo $view['wr_4'] ?>
                    월
                </td>
            </tr>

            <tr>
                <td class="title"><label for="wr_6">방문희망일</label></td>
                <td class="cont"><?php echo $view['wr_6'] ?></td>
            </tr>

            <tr>
                <td class="title"><label for="wr_content">문의사항</label></td>
                <td class="cont"><?php echo $view['content'] ?></td>
            </tr>
            </tbody>
        </table>

        <!-- 링크 버튼 시작 { -->
        <div id="bo_v_bot" style="margin-top: 10px;">
            <?php if ($prev_href || $next_href) { ?>
                <ul class="bo_v_nb">
                    <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>"><img src="/front/image/common/board/btn_bprev.gif" title=""></a></li><?php } ?>
                    <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>"><img src="/front/image/common/board/btn_bnext.gif" title=""></a></li><?php } ?>
                </ul>
            <?php } ?>

            <ul class="bo_v_com">
                <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=myqna&sca=<?php echo $wr_id; ?>"><img src="/front/image/common/board/btn_qna.gif" title="qna관리"></a></li>
                <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>"><img src="/front/image/common/board/btn_wedit.gif" title=""></a></li><?php } ?>
                <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;"><img src="/front/image/common/board/btn_wdelete.gif" title=""></a></li><?php } ?>
                <li><a href="<?php echo $list_href ?>"><img src="/front/image/common/board/btn_list.gif" title=""></a></li>
            </ul>
        </div>
        <!-- } 링크 버튼 끝 -->
        <!-- } 게시판 읽기 끝 -->

        <script>
            <?php if ($board['bo_download_point'] < 0) { ?>
            $(function() {
                $("a.view_file_download").click(function() {
                    if(!g5_is_member) {
                        alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
                        return false;
                    }

                    var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

                    if(confirm(msg)) {
                        var href = $(this).attr("href")+"&js=on";
                        $(this).attr("href", href);

                        return true;
                    } else {
                        return false;
                    }
                });
            });
            <?php } ?>

            function board_move(href)
            {
                window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
            }
        </script>

        <script>
            $(function() {
                $("a.view_image").click(function() {
                    window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
                    return false;
                });

                // 추천, 비추천
                $("#good_button, #nogood_button").click(function() {
                    var $tx;
                    if(this.id == "good_button")
                        $tx = $("#bo_v_act_good");
                    else
                        $tx = $("#bo_v_act_nogood");

                    excute_good(this.href, $(this), $tx);
                    return false;
                });

                // 이미지 리사이즈
                $("#bo_v_atc").viewimageresize();
            });

            function excute_good(href, $el, $tx)
            {
                $.post(
                    href,
                    { js: "on" },
                    function(data) {
                        if(data.error) {
                            alert(data.error);
                            return false;
                        }

                        if(data.count) {
                            $el.find("strong").text(number_format(String(data.count)));
                            if($tx.attr("id").search("nogood") > -1) {
                                $tx.text("이 글을 비추천하셨습니다.");
                                $tx.fadeIn(200).delay(2500).fadeOut(200);
                            } else {
                                $tx.text("이 글을 추천하셨습니다.");
                                $tx.fadeIn(200).delay(2500).fadeOut(200);
                            }
                        }
                    }, "json"
                );
            }
        </script>
        <!-- } 게시글 읽기 끝 -->
    </div>
</div>