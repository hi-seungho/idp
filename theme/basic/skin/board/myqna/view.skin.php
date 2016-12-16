<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

check_sca ($member, $sca);
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

        <div class="subcontents_wrap">
            <ul class="title_wrap clfl">
                <li class="title fl"><img src="/front/image/mypage/myinfo/title.gif"/></li>
                <li class="location fr">
                    <ul>
                        <li>HOME</li>
                        <li>></li>
                        <li>마이페이지</li>
                        <li>></li>
                        <li>나의 유학</li>
                    </ul>
                </li>
            </ul>
            <?php } ?>

        <article id="bo_v" style="width:<?php echo $width; ?>">
            <header>
                <h1 id="bo_v_title">
                    <?php
                    if ($category_name) echo $view['ca_name'].' | '; // 분류 출력 끝
                    echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                    ?>
                </h1>
            </header>

            <section id="bo_v_info">
                <h2>페이지 정보</h2>
                작성자 <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
                <span class="sound_only">작성일</span><strong><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>
                조회<strong><?php echo number_format($view['wr_hit']) ?>회</strong>
            </section>

            <?php
            if ($view['file']['count']) {
                $cnt = 0;
                for ($i=0; $i<count($view['file']); $i++) {
                    if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                        $cnt++;
                }
            }
            ?>

            <?php if($cnt) { ?>
                <!-- 첨부파일 시작 { -->
                <section id="bo_v_file">
                    <h2>첨부파일</h2>
                    <ul>
                        <?php
                        // 가변 파일
                        for ($i=0; $i<count($view['file']); $i++) {
                            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
                                ?>
                                <li>
                                    <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                                        <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                                        <strong><?php echo $view['file'][$i]['source'] ?></strong>
                                        <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                                    </a>
                                    <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span>
                                    <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </section>
                <!-- } 첨부파일 끝 -->
            <?php } ?>

            <?php
            if ($view['link']) {
                ?>
                <!-- 관련링크 시작 { -->
                <section id="bo_v_link">
                    <h2>관련링크</h2>
                    <ul>
                        <?php
                        // 링크
                        $cnt = 0;
                        for ($i=1; $i<=count($view['link']); $i++) {
                            if ($view['link'][$i]) {
                                $cnt++;
                                $link = cut_str($view['link'][$i], 70);
                                ?>
                                <li>
                                    <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                                        <img src="<?php echo $board_skin_url ?>/img/icon_link.gif" alt="관련링크">
                                        <strong><?php echo $link ?></strong>
                                    </a>
                                    <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </section>
                <!-- } 관련링크 끝 -->
            <?php } ?>

            <section id="bo_v_atc">
                <h2 id="bo_v_atc_title">본문</h2>
                <!-- 본문 내용 시작 { -->
                <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
                <?php//echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
                <!-- } 본문 내용 끝 -->

            </section>

            <!-- 링크 버튼 시작 { -->
            <div id="bo_v_bot">
                <?php if ($prev_href || $next_href) { ?>
                    <ul class="bo_v_nb">
                        <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>"><img src="/front/image/common/board/btn_bprev.gif" title=""></a></li><?php } ?>
                        <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>"><img src="/front/image/common/board/btn_bnext.gif" title=""></a></li><?php } ?>
                    </ul>
                <?php } ?>

                <ul class="bo_v_com">
                    <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>"><img src="/front/image/common/board/btn_wedit.gif" title=""></a></li><?php } ?>
                    <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;"><img src="/front/image/common/board/btn_wdelete.gif" title=""></a></li><?php } ?>
                    <li><a href="<?php echo $list_href ?>"><img src="/front/image/common/board/btn_list.gif" title=""></a></li>
                    <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>"><img src="/front/image/common/board/btn_wreply.gif" title=""></a></li><?php } ?>
                    <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>"><img src="/front/image/common/board/btn_write.gif" title=""></a></li><?php } ?>
                </ul>
            </div>
            <!-- } 링크 버튼 끝 -->

        </article>
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