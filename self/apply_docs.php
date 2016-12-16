<?php
include_once('./_common.php');
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

$qaconfig = get_qa_config();

$upload_max_filesize = number_format($qaconfig['qa_upload_size']) . ' 바이트';

$captcha_html = '';
$captcha_js   = '';
if ($is_guest) {
    $captcha_html = captcha_html();
    $captcha_js   = chk_captcha_js();
}


if ($_SERVER['REQUEST_METHOD'] !== 'POST' && $_POST['agree'] != 'Y')
    alert('잘못된 접근입니다.', G5_URL.'/self/apply_info.php');

$post = array(
    "agree" => "Y",
    "wr_name" => "이름",
    "wr_1" => "010123456789",
    "wr_email" => "email@domain.com",
    "wr_2" => "06126",
    "wr_3" => "서울 강남구 논현로99길 19",
    "wr_4" => "상세주소",
    "wr_5" => " (역삼동)",
    "ca_name" => "호주",
    "wr_subject" => "전문대 과정",
    "wr_6" => "대학교",
    "wr_7" => "학과 (희망코스) 1지망",
    "wr_8" => "학과 (희망코스) 2지망",
    "wr_9" => "희망전공",
    "wr_10" => "2016",
    "wr_11" => "2월",
    "wr_12" => "1000"
);

$action_url = G5_BBS_URL.'/write_update.php';
$bo_table = 'apply';


include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = '';
    var dep2 = '';
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
                <div class="step_wrap"><img src="/front/image/self/apply/step2.gif"/></div>
                <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
                    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                    <?php
                    foreach ($post as $key => $value) {
                        echo '<input type="hidden" name="'.$key.'" value="'.$_POST[$key].'">'.PHP_EOL;
                    }
                    ?>
                    <p class="stit_type1 clfl">
                        <img class="fl" src="/front/image/self/apply/tit2_1.gif"/>
                        <img style="position: relative; top: 25px;" class="fr" src="/front/image/common/board/txt_essential.gif"/>
                    </p>
                    <table cellpadding="0" cellspacing="0" class="tb_type5">
                        <colgroup>
                            <col width="15%"/>
                            <col width="*"/>
                        </colgroup>
                        <tr>
                            <td class="title">IELTS/토플점수<br>성적표</td>
                            <td class="cont">
                                <input type="file" name="bf_file[0]" title="IELTS/토플점수 성적표 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1" size="40">
                            </td>
                        </tr>
                        <tr>
                            <td class="title">여권사본*</td>
                            <td class="cont">
                                <input type="file" name="bf_file[1]" title="여권사본 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1 required" size="40" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">학교 지원서*</td>
                            <td class="cont">
                                <ul class="input_address">
                                    <li>
                                        <span class="sub_t mr10">지원서1</span>
                                        <input type="file" name="bf_file[2]" title="학교 지원서1 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1 required" size="54" required>
                                    </li>
                                    <li>
                                        <span class="sub_t mr10">지원서2</span>
                                        <input type="file" name="bf_file[3]" title="학교 지원서2 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1" size="54" >
                                    </li>
                                    <li>
                                        <span class="sub_t mr10">지원서3</span>
                                        <input type="file" name="bf_file[4]" title="학교 지원서3 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1" size="54">
                                    </li>
                                    <li><span class="sub_t">* 해외대학 지원서는 각 대학 공식 홈페이지에서 다운 받을 수 있습니다.</span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">최종학력 졸업증명서</br>/재학증명서*</td>
                            <td class="cont">
                                <ul class="input_address">
                                    <li>
                                        <span class="sub_t mr10">입학서류 업로드</span>
                                        <input type="file" name="bf_file[5]" title="최종학력 졸업증명서/재학증명서 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1 required" size="54" required>
                                    </li>
                                    <li><span class="sub_t">* 영문으로 작성된 최종 학력 고등학교 졸업증명서입니다.</span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">최종학력</br>성적증명서*</td>
                            <td class="cont">
                                <ul class="input_address">
                                    <li>
                                        <span class="sub_t mr10">입학서류 업로드</span>
                                        <input type="file" name="bf_file[6]" title="최종학력 성적증명서 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1 required" size="54" required>
                                    </li>
                                    <li><span class="sub_t">* 영문으로 작성된 최종 학력 성적 증명서입니다.</span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">고등학교</br>졸업 증명서</td>
                            <td class="cont">
                                <ul class="input_address">
                                    <li>
                                        <span class="sub_t mr10">입학서류 업로드</span>
                                        <input type="file" name="bf_file[7]" title="고등학교졸업 증명서 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1" size="54">
                                    </li>
                                    <li><span class="sub_t">* 대학교 1학년만 이수했을 경우 영문으로 된 졸업 증명서 필요</span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">영국 재직</br>또는 경력증명서</td>
                            <td class="cont">
                                <ul class="input_address">
                                    <li>
                                        <span class="sub_t mr10">입학서류 업로드</span>
                                        <input type="file" name="bf_file[8]" title="영국 재직 또는 경력증명서 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1" size="54">
                                    </li>
                                    <li><span class="sub_t">* 영문으로 작성된 재직/경력 증명서입니다.</span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">CV or SOP</td>
                            <td class="cont">
                                <ul class="input_address">
                                    <li>
                                        <span class="sub_t mr10">입학서류 업로드</span>
                                        <input type="file" name="bf_file[9]" title="CV or SOP : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file inp_text1" size="54">
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">기타 사항</td>
                            <td class="cont">
                                <textarea id="wr_content" name="wr_content" class="textarea1" maxlength="65536"></textarea>
                            </td>
                        </tr>

                        <?php if ($is_guest) { //자동등록방지  ?>
                            <tr>
                                <td class="title">자동등록방지</td>
                                <td class="cont">
                                    <?php echo $captcha_html ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

                    <ul class="btns ac mt70">
                        <li><a href="javascript:$('#history_back').submit();"><img src="/front/image/self/apply/btn_prev.gif"/></a></li>
                        <li><input type="image" src="/front/image/self/apply/btn_next.gif" id="btn_submit" accesskey="s"></li>
                        <li><a href="<?php echo G5_URL; ?>"><img src="/front/image/self/apply/btn_cancel.gif"/></a></li>
                    </ul>
                </form>
                <p class="ac mt50"><img src="/front/image/self/apply/txt_center.gif"/></p>
                <div style="display: none;">
                    <form action="apply_info.php" method="post" id="history_back">
                    <?php
                    foreach ($post as $key => $value) {
                        echo '<input type="hidden" name="'.$key.'" value="'.$_POST[$key].'">'.PHP_EOL;
                    }
                    ?>
                    </form>
                </div>
                <script>
                    function fwrite_submit(f)
                    {
                        /*
                        if(document.pressed == "선택복사") {
                            f.action = "./board_list_update.php";
                            return;
                        }

                        if(document.pressed == "선택이동") {
                            f.action = "./board_list_update.php";
                            return;
                        }
                        */
                        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

                        document.getElementById("btn_submit").disabled = "disabled";

                        return true;
                    }
                </script>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>