<?php include_once('./_common.php');
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

$captcha_html = '';
$captcha_js   = '';
if ($is_guest) {
    $captcha_html = captcha_html();
    $captcha_js   = chk_captcha_js();
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
    <title>IDP에듀케이션</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.1, maximum-scale=1, user-scalable=no, target-densitydpi=high-dpi" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

    <script type="text/javascript" src="/front/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/front/js/jquery-accordion-menu.js"></script>
    <script type="text/javascript" src="/front/js/common.js"></script>

    <link type="text/css" rel="stylesheet" href="/front/css/common.css" />
    <link type="text/css" rel="stylesheet" href="/front/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/front/css/layout.css" />
    <script type="text/javascript">
        var dep1 = 1;
        var dep2 = 0;
    </script>
</head>

<body>
    <script>
      document.body.style.overflow='hidden';
      if (navigator.userAgent.indexOf('Chrome')>-1) {
			    window.resizeTo(715, 950);
      }
    </script>
    <style>

        /* 캡챠 자동등록(입력)방지 기본 -pc */
        #captcha {display:inline-block;position:relative;    border: 0px;}
        #captcha legend {position:absolute;margin:0;padding:0;font-size:0;line-height:0;text-indent:-9999em;overflow:hidden;}
        #captcha #captcha_img {width:160px;height:60px;border:1px solid #e9e9e9;vertical-align:top;padding:0;margin:0}
        #captcha #captcha_mp3 {position:absolute;top:0;left:161px;;margin:0;padding:0;width:31px;height:31px;border:0;background:transparent;vertical-align:middle;overflow:hidden;cursor:pointer}
        #captcha #captcha_mp3 span {position:absolute;top:0;left:0;width:31px;height:31px;background:url('../../../img/captcha.png') no-repeat;}
        #captcha #captcha_reload {position:absolute;top:31px;left:161px;margin:0;padding:0;width:31px;height:31px;border:0;background:transparent;vertical-align:middle;overflow:hidden;cursor:pointer;background:url('../../../img/captcha.png') no-repeat  0 -30px;border-top:1px solid #ccc;text-indent:-999px}
        #captcha #captcha_key {margin:0 0 0 33px;padding:0 5px;width:70px;height:60px;border:1px solid #b8c9c2;background:#f7f7f7;font-size:1.333em;font-weight:bold;text-align:center;line-height:2.8em;vertical-align:top}
        #captcha #captcha_info {display:block;margin:5px 0 0;font-size:0.95em;letter-spacing:-0.1em}
        .required, textarea.required {
            background: url(../../img/wrest.gif) #fff top right no-repeat !important;
        }
    </style>
    <div class="quick_pop_wrap">
        <!-- 게시물 작성/수정 시작 { -->
        <form name="fwrite" id="fwrite" action="<?php echo G5_BBS_URL; ?>/write_update.php" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:100%">
            <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
            <input type="hidden" name="bo_table" value="visit">
            <input type="hidden" name="wr_password" value="<?php echo rand(1111, 9999) ?>">
            <img class="mb30" src="/front/image/popup/visit/top_img.gif"/>
            <table cellpadding="0" cellspacing="0" class="tb_type5">
                <colgroup>
                    <col width="100"/>
                    <col width="*"/>
                </colgroup>
                <tbody>
                <tr>
                    <td class="title"><label for="wr_name">성명</label></td>
                    <td class="cont"><input type="text" name="wr_name" value="" id="wr_name" required class="inp_text1 required" size="50" maxlength="20"></td>
                </tr>
                <tr>
                    <td class="title"><label for="wr_1">연락처</label></td>
                    <td class="cont"><input type="text" name="wr_1" value="" id="wr_1" class="inp_text1" size="50" maxlength="100"></td>
                </tr>
                <tr>
                    <td class="title"><label for="wr_email">이메일</label></td>
                    <td class="cont"><input type="text" name="wr_email" value="" id="wr_email" class="inp_text1 email" size="50" maxlength="100"></td>
                </tr>
                <tr>
                    <td class="title"><label for="wr_2">희망국가</label></td>
                    <td class="cont">
                        <ul class="radio_sel">
                            <li><input type="radio" name="wr_2" value="호주"  class="input_chk"><label>호주</label></li>
                            <li><input type="radio" name="wr_2" value="영국"  class="input_chk"><label>영국</label></li>
                            <li><input type="radio" name="wr_2" value="미국"  class="input_chk"><label>미국</label></li>
                            <li><input type="radio" name="wr_2" value="캐나다"  class="input_chk"><label>캐나다</label></li>
                            <li><input type="radio" name="wr_2" value="뉴질랜드"  class="input_chk"><label>뉴질랜드</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="title"><label for="wr_subject">희망과정</label></td>
                    <td class="cont">
                        <ul class="radio_sel">
                            <li><input type="radio" name="wr_subject" checked value="어학연수" class="input_chk"><label>어학연수</label></li>
                            <li><input type="radio" name="wr_subject"  value="전문대 과정" class="input_chk"><label>전문대 과정</label></li>
                            <li><input type="radio" name="wr_subject"  value="대학교 입학" class="input_chk"><label>대학교 입학</label></li>
                            <li><input type="radio" name="wr_subject"  value="대학교 편입" class="input_chk"><label>대학교 편입</label></li>
                            <li><input type="radio" name="wr_subject"  value="석사과정" class="input_chk"><label>석사과정</label></li>
                            <li><input type="radio" name="wr_subject"  value="박사과정" class="input_chk"><label>박사과정</label></li>
                            <li><input type="radio" name="wr_subject"  value="조기유학" class="input_chk"><label>조기유학</label></li>
                            <li><input type="radio" name="wr_subject"  value="기타" class="input_chk"><label>기타</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="title"><label for="wr_3">희망시기</label></td>
                    <td class="cont">
                        <input type="text" name="wr_3" value="" id="wr_3" class="inp_text1" size="10" maxlength="4">
                        <span class="sub_t ml10 mr20">년</span>
                        <select name="wr_4" id="wr_4" class="select_type1">
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
                            <option value="7" >7</option>
                            <option value="8" >8</option>
                            <option value="9" >9</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                        </select>
                        <span class="sub_t ml10 mr20">월</span>
                        <input type="checkbox" name="wr_5"  value="미정" class="input_chk"><span class="sub_t">미정</span>
                    </td>
                </tr>
                <tr>
                    <td class="title"><label for="wr_6">방문희망일</label></td>
                    <td class="cont">
                        <script type="text/javascript" src="/front/js/jquery_ui/jquery-ui.js"></script>
                        <link type="text/css" rel="stylesheet" href="/front/js/jquery_ui/jquery-ui.css">
                        <link type="text/css" rel="stylesheet" href="/front/js/jquery_ui/jquery-ui.structure.css">
                        <link type="text/css" rel="stylesheet" href="/front/js/jquery_ui/jquery-ui.theme.css">
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $( '#wr_6' ).datepicker({
                                    dateFormat: "yy-mm-dd",
                                    changeMonth: true,
                                    changeYear: true,
                                    showOn: "both",
                                    buttonImage: "/front/image/common/main/ico_date.gif",
                                    buttonImageOnly: true,
                                });
                            });
                        </script>
                        <input type="text" name="wr_6" value="" id="wr_6" class="inp_text1 mr05" size="20" maxlength="10">
                        <input type="text" name="wr_7" value="" id="wr_7" class="inp_text1 ml10" size="5" maxlength="2"><span class="sub_t ml05 mr10">시</span>
                        <input type="text" name="wr_8" value="" id="wr_8" class="inp_text1" size="5" maxlength="2">
                        <span class="sub_t ml05">분</span>
                        <select name="wr_9" id="wr_9" class="select_type1">
                            <option value="오전" >오전</option>
                            <option value="오후" >오후</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="title"><label for="wr_content">문의사항</label></td>
                    <td class="cont"><textarea id="wr_content" name="wr_content" class="textarea3" maxlength="65536" ></textarea></td>
                </tr>
                <?php if ($is_guest) { //자동등록방지  ?>
                    <tr>
                        <td class="title">자동등록방지</td>
                        <td class="cont">
                            <?php echo $captcha_html ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="chk_agree">
                <input type="checkbox" class="input_chk required" required><label>개인정보 동의. 등록을 위한 개인정보 수집과 IDP 서비스 이용약관에 동의합니다.</label>
                <a href="/guide/terms.php" target="_blank"><img src="/front/image/popup/estimate/btn_terms.gif"/></a>
            </div>
            <div class="ac mt30">
                <input type="image" src="/front/image/common/board/btn_submit.gif" title="작성완료" id="btn_submit" accesskey="s">
                <a href="javascript:self.close();"><img src="/front/image/common/board/btn_cancel.gif" title=""></a>
            </div>
        </form>
        <script>
            function fwrite_submit(f)
            {
                var regexMdn = /^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})-?([0-9]{3,4})-?([0-9]{4})$/;

                if(!regexMdn.test(f.wr_1.value)){
                    alert('잘못된 전화번호입니다');
                    f.wr_1.focus();
                    return false;
                }

                <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

                document.getElementById("btn_submit").disabled = "disabled";

                return true;
            }


            function autoHypenPhone(str) {
                str = str.replace(/[^0-9]/g, '');
                return str.replace(/^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})-?([0-9]{3,4})-?([0-9]{4})$/, "$1-$2-$3");
            }

            var wr_1 = document.getElementById('wr_1');
            wr_1.onkeyup = function(event){
                event = event || window.event;
                var _val = this.value.trim();
                this.value = autoHypenPhone(_val) ;
            }
        </script>
    </div>
</body>
