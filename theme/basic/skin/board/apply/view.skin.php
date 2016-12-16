<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<script type="text/javascript">
    var dep1 = 4;
    var dep2 = 0;
</script>
<div id="sub_container" class="clfl">
    <div class="subcontents_wrap_type2">
        <ul class="title_wrap clfl">
            <li class="title fl"><img src="/front/image/self/apply/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>셀프 학교 지원</li>
                </ul>
            </li>
        </ul>

        <p class="stit_type1"><img src="/front/image/self/apply/tit2.gif"/></p>
        <table cellpadding="0" cellspacing="0" class="tb_type5">
            <colgroup>
                <col width="15%"/>
                <col width="*"/>
            </colgroup>
            <tr>
                <td class="title">이름</td>
                <td class="cont">
                    <?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?>
                </td>
            </tr>
            <tr>
                <td class="title">휴대폰</td>
                <td class="cont">
                    <?php echo $view['wr_1'] ?>
                </td>
            </tr>
            <tr>
                <td class="title">이메일</td>
                <td class="cont">
                    <?php echo $view['wr_email'] ?>
                </td>
            </tr>
            <tr>
                <td class="title">주소</td>
                <td class="cont">
                    <ul class="input_address">
                        <li>
                            <?php echo $view['wr_2'] ?>
                        </li>
                        <li>
                            <?php echo $view['wr_3'] ?>
                        </li>
                        <li>
                            <?php echo $view['wr_4'] ?>
                        </li>
                        <li>
                            <?php echo $view['wr_5'] ?>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>

        <p class="stit_type1 mt70"><img src="/front/image/self/apply/tit3.gif"/></p>
        <table cellpadding="0" cellspacing="0" class="tb_type5">
            <colgroup>
                <col width="15%"/>
                <col width="*"/>
            </colgroup>
            <tr>
                <td class="title">국가</td>
                <td class="cont">
                    <?php echo $view['ca_name'] ?>
                </td>
            </tr>
            <tr>
                <td class="title">유학종류</td>
                <td class="cont">
                    <?php echo $view['wr_subject'] ?>
                </td>
            </tr>
            <tr>
                <td class="title"><label for="wr_6">대학교</label></td>
                <td class="cont">
                    <?php echo $view['wr_6'] ?>
                </td>
            </tr>
            <tr>
                <td class="title">학과 (희망코스)</td>
                <td class="cont">
                    <ul class="input_address">
                        <li>
                            <span class="sub_t mr10">1지망</span>
                            <?php echo $view['wr_7'] ?>
                        </li>
                        <li>
                            <span class="sub_t mr10">2지망</span>
                            <?php echo $view['wr_8'] ?>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="title"><label for="wr_9">희망전공</label></td>
                <td class="cont">
                    <?php echo $view['wr_9'] ?>
                </td>
            </tr>
            <tr>
                <td class="title">시기</td>
                <td class="cont">
                    <?php echo $view['wr_10'] ?>
                    <span class="sub_t ml20">년</span>
                    <?php echo $view['wr_11'] ?>
                </td>
            </tr>
            <tr>
                <td class="title"><label for="wr_12">IELTS/토플점수</label></td>
                <td class="cont">
                    <?php echo $view['wr_12'] ?>
                    <span class="sub_t mr10">점</span>
                </td>
            </tr>
        </table>
        <p class="stit_type1 clfl mt70">
            <img class="fl" src="/front/image/self/apply/tit2_1.gif"/>
        </p>
        <table cellpadding="0" cellspacing="0" class="tb_type5">
            <colgroup>
                <col width="15%"/>
                <col width="*"/>
            </colgroup>
            <tr>
                <td class="title">IELTS/토플점수<br>성적표</td>
                <td class="cont">
                    <?php
                    if (isset($view['file'][0]['source']) && $view['file'][0]['source']) {
                        ?>
                        <a href="<?php echo $view['file'][0]['href'];  ?>" class="view_file_download">
                            <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                            <strong><?php echo $view['file'][0]['source'] ?></strong>
                            <?php echo $view['file'][0]['content'] ?> (<?php echo $view['file'][0]['size'] ?>)
                        </a>
                        <span class="bo_v_file_cnt"><?php echo $view['file'][0]['download'] ?>회 다운로드</span>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="title">여권사본*</td>
                <td class="cont">
                    <?php
                    if (isset($view['file'][1]['source']) && $view['file'][1]['source']) {
                        ?>
                        <a href="<?php echo $view['file'][1]['href'];  ?>" class="view_file_download">
                            <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                            <strong><?php echo $view['file'][1]['source'] ?></strong>
                            <?php echo $view['file'][1]['content'] ?> (<?php echo $view['file'][1]['size'] ?>)
                        </a>
                        <span class="bo_v_file_cnt"><?php echo $view['file'][1]['download'] ?>회 다운로드</span>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="title">학교 지원서*</td>
                <td class="cont">
                    <ul class="input_address">
                        <li>
                            <span class="sub_t mr10">지원서1</span>
                            <?php
                            if (isset($view['file'][2]['source']) && $view['file'][2]['source']) {
                                ?>
                                <a href="<?php echo $view['file'][2]['href'];  ?>" class="view_file_download">
                                    <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                                    <strong><?php echo $view['file'][2]['source'] ?></strong>
                                    <?php echo $view['file'][2]['content'] ?> (<?php echo $view['file'][2]['size'] ?>)
                                </a>
                                <span class="bo_v_file_cnt"><?php echo $view['file'][2]['download'] ?>회 다운로드</span>
                                <?php
                            }
                            ?>
                        </li>
                        <li>
                            <span class="sub_t mr10">지원서2</span>
                            <?php
                            if (isset($view['file'][3]['source']) && $view['file'][3]['source']) {
                                ?>
                                <a href="<?php echo $view['file'][3]['href'];  ?>" class="view_file_download">
                                    <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                                    <strong><?php echo $view['file'][3]['source'] ?></strong>
                                    <?php echo $view['file'][3]['content'] ?> (<?php echo $view['file'][3]['size'] ?>)
                                </a>
                                <span class="bo_v_file_cnt"><?php echo $view['file'][3]['download'] ?>회 다운로드</span>
                                <?php
                            }
                            ?>
                        </li>
                        <li>
                            <span class="sub_t mr10">지원서3</span>
                            <?php
                            if (isset($view['file'][4]['source']) && $view['file'][4]['source']) {
                                ?>
                                <a href="<?php echo $view['file'][4]['href'];  ?>" class="view_file_download">
                                    <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                                    <strong><?php echo $view['file'][4]['source'] ?></strong>
                                    <?php echo $view['file'][4]['content'] ?> (<?php echo $view['file'][4]['size'] ?>)
                                </a>
                                <span class="bo_v_file_cnt"><?php echo $view['file'][4]['download'] ?>회 다운로드</span>
                                <?php
                            }
                            ?>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="title">최종학력 졸업증명서</br>/재학증명서*</td>
                <td class="cont">
                    <?php
                    if (isset($view['file'][5]['source']) && $view['file'][5]['source']) {
                        ?>
                        <a href="<?php echo $view['file'][5]['href'];  ?>" class="view_file_download">
                            <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                            <strong><?php echo $view['file'][5]['source'] ?></strong>
                            <?php echo $view['file'][5]['content'] ?> (<?php echo $view['file'][5]['size'] ?>)
                        </a>
                        <span class="bo_v_file_cnt"><?php echo $view['file'][5]['download'] ?>회 다운로드</span>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="title">최종학력</br>성적증명서*</td>
                <td class="cont">
                    <?php
                    if (isset($view['file'][6]['source']) && $view['file'][6]['source']) {
                        ?>
                        <a href="<?php echo $view['file'][6]['href'];  ?>" class="view_file_download">
                            <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                            <strong><?php echo $view['file'][6]['source'] ?></strong>
                            <?php echo $view['file'][6]['content'] ?> (<?php echo $view['file'][6]['size'] ?>)
                        </a>
                        <span class="bo_v_file_cnt"><?php echo $view['file'][6]['download'] ?>회 다운로드</span>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="title">고등학교</br>졸업 증명서</td>
                <td class="cont">
                    <?php
                    if (isset($view['file'][7]['source']) && $view['file'][7]['source']) {
                        ?>
                        <a href="<?php echo $view['file'][7]['href'];  ?>" class="view_file_download">
                            <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                            <strong><?php echo $view['file'][7]['source'] ?></strong>
                            <?php echo $view['file'][7]['content'] ?> (<?php echo $view['file'][7]['size'] ?>)
                        </a>
                        <span class="bo_v_file_cnt"><?php echo $view['file'][7]['download'] ?>회 다운로드</span>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="title">영국 재직</br>또는 경력증명서</td>
                <td class="cont">
                    <?php
                    if (isset($view['file'][8]['source']) && $view['file'][8]['source']) {
                        ?>
                        <a href="<?php echo $view['file'][8]['href'];  ?>" class="view_file_download">
                            <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                            <strong><?php echo $view['file'][8]['source'] ?></strong>
                            <?php echo $view['file'][8]['content'] ?> (<?php echo $view['file'][8]['size'] ?>)
                        </a>
                        <span class="bo_v_file_cnt"><?php echo $view['file'][8]['download'] ?>회 다운로드</span>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="title">CV or SOP</td>
                <td class="cont">
                    <?php
                    if (isset($view['file'][9]['source']) && $view['file'][9]['source']) {
                        ?>
                        <a href="<?php echo $view['file'][9]['href'];  ?>" class="view_file_download">
                            <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                            <strong><?php echo $view['file'][9]['source'] ?></strong>
                            <?php echo $view['file'][9]['content'] ?> (<?php echo $view['file'][9]['size'] ?>)
                        </a>
                        <span class="bo_v_file_cnt"><?php echo $view['file'][9]['download'] ?>회 다운로드</span>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="title">기타 사항</td>
                <td class="cont">
                    <?php echo nl2br($view['wr_content']) ?>
                </td>
            </tr>
        </table>

        <article id="bo_v" style="width:<?php echo $width; ?>">
            <!-- 링크 버튼 시작 { -->
            <div id="bo_v_bot">
                <?php if ($prev_href || $next_href) { ?>
                    <ul class="bo_v_nb">
                        <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>"><img src="/front/image/common/board/btn_bprev.gif" title=""></a></li><?php } ?>
                        <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>"><img src="/front/image/common/board/btn_bnext.gif" title=""></a></li><?php } ?>
                    </ul>
                <?php } ?>

                <ul class="bo_v_com">
                    <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;"><img src="/front/image/common/board/btn_wdelete.gif" title=""></a></li><?php } ?>
                    <li><a href="<?php echo $list_href ?>"><img src="/front/image/common/board/btn_list.gif" title=""></a></li>
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