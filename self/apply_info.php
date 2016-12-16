<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        $var = $key;
        $$var = trim($value);
    }
}

$action_url = G5_URL.'/self/apply_docs.php';
?>
<script type="text/javascript">
    var dep1 = '';
    var dep2 = '';
</script>

    <script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>
    <script>
        function sample6_execDaumPostcode() {
            new daum.Postcode({
                oncomplete: function(data) {
                    var fullAddr = ''; // 최종 주소 변수
                    var extraAddr = ''; // 조합형 주소 변수
                    if (data.userSelectedType === 'R') {
                        fullAddr = data.roadAddress;
                    } else {
                        fullAddr = data.jibunAddress;
                    }

                    if(data.userSelectedType === 'R'){
                        if(data.bname !== ''){
                            extraAddr += data.bname;
                        }
                        if(data.buildingName !== ''){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        extraAddr = (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                    }

                    document.getElementById('wr_2').value = data.zonecode;
                    document.getElementById('wr_3').value = fullAddr;
                    document.getElementById('wr_5').value = extraAddr;
                    document.getElementById('wr_4').focus();
                }
            }).open();
        }
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
                <div class="step_wrap"><img src="/front/image/self/apply/step1.gif"/></div>
                <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
                    <p class="stit_type1"><img src="/front/image/self/apply/tit1.gif"/></p>
                    <div class="termspolicy_wrap">
                        <div class="small policy">
                            <script type="text/javascript">
                                policy();
                            </script>
                        </div>
                        <div class="chk_agree">
                            <input type="checkbox" class="input_chk required" id="agree" name="agree" value="Y" required <?php echo get_checked($agree, 'Y'); ?>><label>개인정보취급방침의 내용에 동의합니다.</label>
                        </div>
                    </div>
                    <p class="stit_type1 mt70"><img src="/front/image/self/apply/tit2.gif"/></p>
                    <table cellpadding="0" cellspacing="0" class="tb_type5">
                        <colgroup>
                            <col width="15%"/>
                            <col width="*"/>
                        </colgroup>
                        <tr>
                            <td class="title"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></td>
                            <td class="cont"><input type="text" name="wr_name" id="wr_name" required class="inp_text1 required" size="40" maxlength="20" value="<?php echo $wr_name; ?>"></td>
                        </tr>
                        <tr>
                            <td class="title"><label for="wr_1">휴대폰<strong class="sound_only">필수</strong></label></td>
                            <td class="cont">
                                <input type="text" name="wr_1" id="wr_1" required class="inp_text1 required" size="40" maxlength="20" value="<?php echo $wr_1; ?>">
                                <span class="sub_t ml20">ex) 01012345678</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="title"><label for="wr_email">이메일<strong class="sound_only">필수</strong></label></td>
                            <td class="cont">
                                <input type="text" name="wr_email" id="wr_email" class="inp_text1 email required" required size="50" maxlength="100" value="<?php echo $wr_email; ?>">
                                <span class="sub_t ml20">ex) idp@idp.com</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">주소</td>
                            <td class="cont">
                                <ul class="input_address">
                                    <li>
                                        <label for="wr_2" class="sound_only">우편번호<strong>필수</strong></label>
                                        <input type="text" name="wr_2" id="wr_2" required class="inp_text1 required" size="20" maxlength="20" readonly value="<?php echo $wr_2; ?>">
                                        <a href="javascript:sample6_execDaumPostcode()"><img src="/front/image/common/board/btn_address.gif"/></a>
                                    </li>
                                    <li>
                                        <label for="wr_3" class="sound_only">기본주소<strong>필수</strong></label>
                                        <input type="text" name="wr_3" id="wr_3" required class="inp_text1 required" size="80" maxlength="100" readonly value="<?php echo $wr_3; ?>">
                                        <span class="sub_t ml20">기본주소</span>
                                    </li>
                                    <li>
                                        <label for="wr_4" class="sound_only">상세주소</label>
                                        <input type="text" name="wr_4" id="wr_4"  class="inp_text1" size="80" maxlength="100" value="<?php echo $wr_4; ?>">
                                        <span class="sub_t ml20">상세주소</span>
                                    </li>
                                    <li>
                                        <label for="wr_5" class="sound_only">참고항목</label>
                                        <input type="text" name="wr_5" id="wr_5"  class="inp_text1" size="80" maxlength="100" readonly value="<?php echo $wr_5; ?>">
                                        <span class="sub_t ml20">참고항목</span>
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
                                <ul class="radio_sel">
                                    <li><input type="radio" name="ca_name" class="input_chk" value="호주"  <?php echo $w == '' ? 'checked':get_checked($ca_name, '호주'); ?> ><label>호주</label></li>
                                    <li><input type="radio" name="ca_name" class="input_chk" value="영국" <?php echo get_checked($ca_name, '영국'); ?>><label>영국</label></li>
                                    <li><input type="radio" name="ca_name" class="input_chk" value="미국" <?php echo get_checked($ca_name, '미국'); ?>><label>미국</label></li>
                                    <li><input type="radio" name="ca_name" class="input_chk" value="캐나다" <?php echo get_checked($ca_name, '캐나다'); ?>><label>캐나다</label></li>
                                    <li><input type="radio" name="ca_name" class="input_chk" value="뉴질랜드" <?php echo get_checked($ca_name, '뉴질랜드'); ?>><label>뉴질랜드</label></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">유학종류</td>
                            <td class="cont">
                                <ul class="radio_sel">
                                    <li><input type="radio" name="wr_subject" value="전문대 과정"  class="input_chk" <?php echo $w == '' ? 'checked': get_checked($wr_saubject, '전문대 과정'); ?>><label>전문대 과정</label></li>
                                    <li><input type="radio" name="wr_subject" value="대학교 입학"  class="input_chk" <?php echo get_checked($wr_saubject, '대학교 입학'); ?>><label>대학교 입학</label></li>
                                    <li><input type="radio" name="wr_subject" value="대학교 편입"  class="input_chk" <?php echo get_checked($wr_saubject, '대학교 편입'); ?>><label>대학교 편입</label></li>
                                    <li><input type="radio" name="wr_subject" value="석사일반과정"  class="input_chk" <?php echo get_checked($wr_saubject, '석사일반과정'); ?>><label>석사일반과정</label></li>
                                    <li><input type="radio" name="wr_subject" value="석사연구과정"  class="input_chk" <?php echo get_checked($wr_saubject, '석사연구과정'); ?>><label>석사연구과정</label></li>
                                    <li><input type="radio" name="wr_subject" value="박사과정"  class="input_chk" <?php echo get_checked($wr_saubject, '박사과정'); ?>><label>박사과정</label></li>
                                    <li><input type="radio" name="wr_subject" value="기타"  class="input_chk" <?php echo get_checked($wr_saubject, '기타'); ?>><label>기타</label></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title"><label for="wr_6">대학교</label></td>
                            <td class="cont">
                                <input type="text" name="wr_6" id="wr_6" class="inp_text1 required" required size="60" maxlength="100" value="<?php echo $wr_6; ?>">
                                <span class="sub_t ml20">* 해외 지원 희망 대학교 정식 명칭을 영어로 입력해 주세요.</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">학과 (희망코스)</td>
                            <td class="cont">
                                <ul class="input_address">
                                    <li>
                                        <span class="sub_t mr10">1지망
                                            <label for="wr_7" class="sound_only">학과 (희망코스) 1지망</label>
                                        </span>
                                        <input type="text" name="wr_7" id="wr_7" class="inp_text1 required" size="54" maxlength="100" required value="<?php echo $wr_7; ?>">
                                        <span class="sub_t ml20">* 학과 이름을 영어로 입력해 주세요</span>
                                    </li>
                                    <li>
                                        <span class="sub_t mr10">2지망
                                            <label for="wr_8" class="sound_only">학과 (희망코스) 2지망</label>
                                        </span>
                                        <input type="text" name="wr_8" id="wr_8" class="inp_text1 required" size="54" maxlength="100" required value="<?php echo $wr_8; ?>">
                                        <span class="sub_t ml20">ex) Bachelor of Business, Master of commerce</span>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title"><label for="wr_9">희망전공</label></td>
                            <td class="cont">
                                <input type="text" name="wr_9" id="wr_9" class="inp_text1 required" size="60" maxlength="100" required value="<?php echo $wr_9; ?>">
                                <span class="sub_t ml20">ex) Accounting, Finance, International Business 등등</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="title">시기</td>
                            <td class="cont">
                                <label for="wr_10" class="sound_only">시기 년도</label>
                                <input type="text" name="wr_10" id="wr_10" class="inp_text1 required" size="10" maxlength="4" required value="<?php echo $wr_10; ?>">
                                <span class="sub_t ml20">년</span>
                                <label for="wr_11" class="sound_only">시기 년도</label>
                                <ul class="radio_sel mt10">
                                    <li><input type="radio" name="wr_11" value="2월" class="input_chk" <?php echo $w == '' ? 'checked': get_checked($wr_11, '2월'); ?>><label>2월</label></li>
                                    <li><input type="radio" name="wr_11" value="9월" class="input_chk" <?php echo get_checked($wr_11, '9월'); ?>><label>9월</label></li>
                                    <li><input type="radio" name="wr_11" value="기타" class="input_chk" <?php echo get_checked($wr_11, '기타'); ?>><label>기타</label></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="title"><label for="wr_12">IELTS/토플점수</label></td>
                            <td class="cont">
                                <input type="text" name="wr_12" id="wr_12" class="inp_text1 required" size="10" maxlength="100" required value="<?php echo $wr_12; ?>">
                                <span class="sub_t mr10">점</span>
                            </td>
                        </tr>
                    </table>
                    <ul class="btns ac mt70">
                        <li><input type="image" src="/front/image/self/apply/btn_next.gif" id="btn_submit" accesskey="s"></li>
                        <li><a href="<?php echo G5_URL; ?>"><img src="/front/image/self/apply/btn_cancel.gif"/></a></li>
                    </ul>
                </form>
                <script>
                    function fwrite_submit(f)
                    {
                        document.getElementById("btn_submit").disabled = "disabled";

                        return true;
                    }
                </script>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>