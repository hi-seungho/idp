<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>
<?php if ($w == '') { ?>
<!-- 회원정보 입력/수정 시작 { -->
<script type="text/javascript">
    var dep1 = 2;
    var dep2 = 0;
</script>
<div id="sub_container" class="clfl">
    <div class="lnb_wrap">
        <div id="lnb">
            <p><img src="/front/image/common/lnb/top_member.gif"/></p>
            <ul>
                <li class="m1">
                    <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/login.php'">로그인</p>
                </li>
                <li class="m2">
                    <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/register.php'">회원가입</p>
                </li>
                <li class="m3">
                    <p class="dep1" onclick="javascript: location.href='<?php echo G5_BBS_URL ?>/password_lost.php'">ID/PW 찾기</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="subcontents_wrap">
        <ul class="title_wrap clfl">
            <li class="title fl"><img src="/front/image/member/join/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>멤버쉽</li>
                    <li>></li>
                    <li>회원가입</li>
                </ul>
            </li>
        </ul>
        <img src="/front/image/member/join/top_join2.gif"/>
<?php } else { ?>
<div id="sub_container" class="clfl">
    <?php if ($member['mb_level'] == 2) { ?>
        <script type="text/javascript">
            var dep1 = 5;
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
            var dep1 = 2;
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
            <li class="title fl"><img src="/front/image/mypage/modify/title.gif"/></li>
            <li class="location fr">
                <ul>
                    <li>HOME</li>
                    <li>></li>
                    <li>마이페이지</li>
                    <li>></li>
                    <li>회원정보변경</li>
                </ul>
            </li>
        </ul>
        <img src="/front/image/mypage/modify/txt1.gif"/>
<?php } ?>
        <script src="<?php echo G5_JS_URL ?>/jquery.register_form.js"></script>
        <?php if($config['cf_cert_use'] && ($config['cf_cert_ipin'] || $config['cf_cert_hp'])) { ?>
            <script src="<?php echo G5_JS_URL ?>/certify.js"></script>
        <?php } ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript">
            $(function(){
                var today = new Date();

                $( '#reg_mb_3' ).datepicker({
                    dateFormat: "yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "c-90:c",
                    //showOn: "both",
                    //buttonImage: "/front/image/reservation/ico_cal.gif",
                    maxDate: "-1d",
                    monthNames: ["01 /", "02 /", "03 /", "04 /", "05 /", "06 /",
                        "07 /", "08 /", "09 /", "10 /", "11 /", "12 /"],
                    monthNamesShort: ["01", "02", "03", "04", "05", "06",
                        "07", "08", "09", "10", "11", "12"],
                    defaultDate: new Date ((today.getFullYear() - 30) + '-'+ (today.getMonth()+1) +'-'+today.getDate())
                });
            });
        </script>


        <form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" name="w" value="<?php echo $w ?>">
            <input type="hidden" name="url" value="<?php echo $urlencode ?>">
            <input type="hidden" name="agree" value="<?php echo $agree ?>">
            <input type="hidden" name="agree2" value="<?php echo $agree2 ?>">
            <input type="hidden" name="cert_type" value="<?php echo $member['mb_certify']; ?>">
            <input type="hidden" name="cert_no" value="">
            <?php if (isset($member['mb_sex'])) {  ?><input type="hidden" name="mb_sex" value="<?php echo $member['mb_sex'] ?>"><?php }  ?>
            <?php if (isset($member['mb_nick_date']) && $member['mb_nick_date'] > date("Y-m-d", G5_SERVER_TIME - ($config['cf_nick_modify'] * 86400))) { // 닉네임수정일이 지나지 않았다면  ?>
                <input type="hidden" name="mb_nick_default" value="<?php echo get_text($member['mb_nick']) ?>">
                <input type="hidden" name="mb_nick" value="<?php echo get_text($member['mb_nick']) ?>">
            <?php }  ?>
            <p class="stit_type1 mt70"><img src="/front/image/member/join/tit3.gif"/></p>
            <table cellpadding="0" cellspacing="0" class="tb_type5">
                <colgroup>
                    <col width="15%"/>
                    <col width="*"/>
                </colgroup>
                <tr>
                    <td class="title"><label for="reg_mb_id">아이디<strong class="sound_only">필수</strong></label></td>
                    <td class="cont">
                        <input type="text" name="mb_id" value="<?php echo $member['mb_id'] ?>" id="reg_mb_id" <?php echo $required ?> <?php echo $readonly ?> class="inp_text1 <?php echo $required ?> <?php echo $readonly ?>" minlength="3" maxlength="20" size="40">
                        <span class="frm_info">영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.</span>
                        <span id="msg_mb_id"></span>
                    </td>
                </tr>
                <tr>
                    <td class="title"><label for="reg_mb_password">비밀번호<strong class="sound_only">필수</strong></label></td>
                    <td class="cont"><input type="password" name="mb_password" id="reg_mb_password" <?php echo $required ?> class="inp_text1 <?php echo $required ?>" minlength="3" maxlength="20" size="40"></td>
                </tr>
                <tr>
                    <td class="title"><label for="reg_mb_password_re">비밀번호 확인<strong class="sound_only">필수</strong></label></td>
                    <td class="cont"><input type="password" name="mb_password_re" id="reg_mb_password_re" <?php echo $required ?> class="inp_text1 <?php echo $required ?>" minlength="3" maxlength="20" size="40"></td>
                </tr>
            </table>


            <p class="stit_type1 mt70"><img src="/front/image/member/join/tit4.gif"/></p>
            <table cellpadding="0" cellspacing="0" class="tb_type5">
                <colgroup>
                    <col width="15%"/>
                    <col width="*"/>
                </colgroup>
                <tr>
                    <td class="title"><label for="reg_mb_name">이름<strong class="sound_only">필수</strong></label></td>
                    <td class="cont">
                        <?php if ($config['cf_cert_use']) { ?>
                            <span class="frm_info">아이핀 본인확인 후에는 이름이 자동 입력되고 휴대폰 본인확인 후에는 이름과 휴대폰번호가 자동 입력되어 수동으로 입력할수 없게 됩니다.</span>
                        <?php } ?>
                        <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo get_text($member['mb_name']) ?>" <?php echo $required ?> <?php echo $readonly; ?> class="inp_text1 <?php echo $required ?> <?php echo $readonly ?>" size="10">
                        <?php
                        if($config['cf_cert_use']) {
                            if($config['cf_cert_ipin'])
                                echo '<button type="button" id="win_ipin_cert" class="btn_frmline">아이핀 본인확인</button>'.PHP_EOL;
                            if($config['cf_cert_hp'])
                                echo '<button type="button" id="win_hp_cert" class="btn_frmline">휴대폰 본인확인</button>'.PHP_EOL;

                            echo '<noscript>본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.</noscript>'.PHP_EOL;
                        }
                        ?>
                        <?php
                        if ($config['cf_cert_use'] && $member['mb_certify']) {
                            if($member['mb_certify'] == 'ipin')
                                $mb_cert = '아이핀';
                            else
                                $mb_cert = '휴대폰';
                            ?>
                            <div id="msg_certify">
                                <strong><?php echo $mb_cert; ?> 본인확인</strong><?php if ($member['mb_adult']) { ?> 및 <strong>성인인증</strong><?php } ?> 완료
                            </div>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td class="title"><label for="reg_mb_3">생년월일 <strong class="sound_only">필수</strong></label></td>
                    <td class="cont"><input type="text" name="mb_3" value="<?php echo get_text($member['mb_3']) ?>" id="reg_mb_3" required class="inp_text1 required" size="10" maxlength="20" readonly="readonly"></td>
                </tr>

                <?php if ($config['cf_use_tel']) {  ?>
                    <tr>
                        <td class="title"><label for="reg_mb_tel">전화번호<?php if ($config['cf_req_tel']) { ?><strong class="sound_only">필수</strong><?php } ?></label></td>
                        <td class="cont"><input type="text" name="mb_tel" value="<?php echo get_text($member['mb_tel']) ?>" id="reg_mb_tel" <?php echo $config['cf_req_tel']?"required":""; ?> class="inp_text1 <?php echo $config['cf_req_tel']?"required":""; ?>" maxlength="20"></td>
                    </tr>
                <?php }  ?>
                <?php if ($config['cf_use_hp'] || $config['cf_cert_hp']) {  ?>
                    <tr>
                        <td class="title"><label for="reg_mb_hp">휴대폰번호<?php if ($config['cf_req_hp']) { ?><strong class="sound_only">필수</strong><?php } ?></label></td>
                        <td class="cont">
                            <input type="text" name="mb_hp" value="<?php echo get_text($member['mb_hp']) ?>" id="reg_mb_hp" <?php echo ($config['cf_req_hp'])?"required":""; ?> class="inp_text1 <?php echo ($config['cf_req_hp'])?"required":""; ?>" maxlength="20">
                            <?php if ($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
                                <input type="hidden" name="old_mb_hp" value="<?php echo get_text($member['mb_hp']) ?>">
                            <?php } ?>
                            <span class="sub_t ml20">ex) 01012345678</span>
                        </td>
                    </tr>
                <?php }  ?>
                <tr>
                    <td class="title"><label for="reg_mb_email">이메일<strong class="sound_only">필수</strong></label></td>
                    <td class="cont">
                        <?php if ($config['cf_use_email_certify']) {  ?>
                            <span class="frm_info">
                    <?php if ($w=='') { echo "E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다."; }  ?>
                    <?php if ($w=='u') { echo "E-mail 주소를 변경하시면 다시 인증하셔야 합니다."; }  ?>
                </span>
                        <?php }  ?>
                        <input type="hidden" name="old_email" value="<?php echo $member['mb_email'] ?>">
                        <input type="text" name="mb_email" value="<?php echo isset($member['mb_email'])?$member['mb_email']:''; ?>" id="reg_mb_email" required class="inp_text1 email required" size="70" maxlength="100">
                        <span class="sub_t ml20">ex) idp@idp.com</span>
                    </td>
                </tr>
                <?php if ($config['cf_use_addr']) { ?>
                    <tr>
                        <td class="title">
                            주소
                            <?php if ($config['cf_req_addr']) { ?><strong class="sound_only">필수</strong><?php }  ?>
                        </td>
                        <td class="cont">
                            <label for="reg_mb_zip" class="sound_only">우편번호<?php echo $config['cf_req_addr']?'<strong class="sound_only"> 필수</strong>':''; ?></label>
                            <input type="text" name="mb_zip" value="<?php echo $member['mb_zip1'].$member['mb_zip2']; ?>" id="reg_mb_zip" <?php echo $config['cf_req_addr']?"required":""; ?> class="inp_text1 <?php echo $config['cf_req_addr']?"required":""; ?>" size="5" maxlength="6">
                            <a href="#" onclick="win_zip('fregisterform', 'mb_zip', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');return false;"><img src="/front/image/common/board/btn_address.gif"/></a>
                            <br>
                            <input type="text" name="mb_addr1" value="<?php echo get_text($member['mb_addr1']) ?>" id="reg_mb_addr1" <?php echo $config['cf_req_addr']?"required":""; ?> class="inp_text1 frm_address <?php echo $config['cf_req_addr']?"required":""; ?>" size="50">
                            <label for="reg_mb_addr1">기본주소<?php echo $config['cf_req_addr']?'<strong class="sound_only"> 필수</strong>':''; ?></label><br>
                            <input type="text" name="mb_addr2" value="<?php echo get_text($member['mb_addr2']) ?>" id="reg_mb_addr2" class="inp_text1 frm_address" size="50">
                            <label for="reg_mb_addr2">상세주소</label>
                            <br>
                            <input type="text" name="mb_addr3" value="<?php echo get_text($member['mb_addr3']) ?>" id="reg_mb_addr3" class="inp_text1 frm_address" size="50" readonly="readonly">
                            <label for="reg_mb_addr3">참고항목</label>
                            <input type="hidden" name="mb_addr_jibeon" value="<?php echo get_text($member['mb_addr_jibeon']); ?>">
                        </td>
                    </tr>
                <?php }  ?>
            </table>

            <?php if ($member['mb_level'] == 3) { ?>
            <p class="stit_type1 mt70"><img src="/front/image/member/join/tit9.gif" alt="컨설턴트 정보"/></p>
            <table cellpadding="0" cellspacing="0" class="tb_type5">
                <colgroup>
                    <col width="15%"/>
                    <col width="*"/>
                </colgroup>
                <tr>
                    <td class="title"><label for="reg_mb_4">팩스번호</label></td>
                    <td class="cont"><input type="text" name="mb_4" value="<?php echo get_text($member['mb_4']) ?>" id="reg_mb_4" class="inp_text1" maxlength="20"></td>
                </tr>
            </table>
            <?php }  ?>

            <p class="stit_type1 mt70"><img src="/front/image/member/join/tit5.gif"/></p>
            <table cellpadding="0" cellspacing="0" class="tb_type5">
                <colgroup>
                    <col width="15%"/>
                    <col width="*"/>
                </colgroup>
                <tr>
                    <td class="title">국가</td>
                    <td class="cont">
                        <ul class="radio_sel">
                            <li><input type="radio" name="mb_1" value="호주" <?php echo get_checked($member['mb_1'], '호주'); ?> class="input_chk"><label>호주</label></li>
                            <li><input type="radio" name="mb_1" value="영국" <?php echo get_checked($member['mb_1'], '영국'); ?> class="input_chk"><label>영국</label></li>
                            <li><input type="radio" name="mb_1" value="미국" <?php echo get_checked($member['mb_1'], '미국'); ?> class="input_chk"><label>미국</label></li>
                            <li><input type="radio" name="mb_1" value="캐나다" <?php echo get_checked($member['mb_1'], '캐나다'); ?> class="input_chk"><label>캐나다</label></li>
                            <li><input type="radio" name="mb_1" value="뉴질랜드" <?php echo get_checked($member['mb_1'], '뉴질랜드'); ?> class="input_chk"><label>뉴질랜드</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="title">유학종류</td>
                    <td class="cont">
                        <ul class="radio_sel">
                            <li><input type="radio" name="mb_2" value="전문대 과정" <?php echo get_checked($member['mb_2'], '전문대 과정'); ?> class="input_chk"><label>전문대 과정</label></li>
                            <li><input type="radio" name="mb_2" value="대학교 입학" <?php echo get_checked($member['mb_2'], '대학교 입학'); ?> class="input_chk"><label>대학교 입학</label></li>
                            <li><input type="radio" name="mb_2" value="대학교 편입" <?php echo get_checked($member['mb_2'], '대학교 편입'); ?> class="input_chk"><label>대학교 편입</label></li>
                            <li><input type="radio" name="mb_2" value="석사과정" <?php echo get_checked($member['mb_2'], '석사과정'); ?> class="input_chk"><label>석사과정</label></li>
                            <li><input type="radio" name="mb_2" value="박사과정" <?php echo get_checked($member['mb_2'], '박사과정'); ?> class="input_chk"><label>박사과정</label></li>
                            <li><input type="radio" name="mb_2" value="기타" <?php echo get_checked($member['mb_2'], '기타'); ?> class="input_chk"><label>기타</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="title">유학정보 수신</td>
                    <td class="cont">
                        <input type="checkbox" name="mb_mailling" value="1" id="reg_mb_mailling" <?php echo ($w=='' || $member['mb_mailling'])?'checked':''; ?>>
                        정보 메일을 받겠습니다.
                    </td>
                </tr>
            </table>
            <p class="stit_type1 mt70"><img src="/front/image/member/join/tit6.gif"/></p>
            <table cellpadding="0" cellspacing="0" class="tb_type5">
                <colgroup>
                    <col width="15%"/>
                    <col width="*"/>
                </colgroup>
                <tr>
                    <td class="title">자동등록방지</td>
                    <td class="cont"><?php echo captcha_html(); ?></td>
                </tr>
            </table>
            <div class="ac mt70">
                <?php if ($w == '') { ?>
                <input type="image" src="/front/image/member/join/btn_join.gif">
                <?php } else { ?>
                <input type="image" src="/front/image/mypage/modify/btn_edit.gif">
                <?php } ?>
                <a href="<?php echo G5_URL ?>"><img src="/front/image/member/join/btn_cancel.gif"/></a>
            </div>
        </form>
    </div>
</div>

<div class="mbskin">


    <script>
    $(function() {
        $("#reg_zip_find").css("display", "inline-block");

        <?php if($config['cf_cert_use'] && $config['cf_cert_ipin']) { ?>
        // 아이핀인증
        $("#win_ipin_cert").click(function() {
            if(!cert_confirm())
                return false;

            var url = "<?php echo G5_OKNAME_URL; ?>/ipin1.php";
            certify_win_open('kcb-ipin', url);
            return;
        });

        <?php } ?>
        <?php if($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
        // 휴대폰인증
        $("#win_hp_cert").click(function() {
            if(!cert_confirm())
                return false;

            <?php
            switch($config['cf_cert_hp']) {
                case 'kcb':
                    $cert_url = G5_OKNAME_URL.'/hpcert1.php';
                    $cert_type = 'kcb-hp';
                    break;
                case 'kcp':
                    $cert_url = G5_KCPCERT_URL.'/kcpcert_form.php';
                    $cert_type = 'kcp-hp';
                    break;
                case 'lg':
                    $cert_url = G5_LGXPAY_URL.'/AuthOnlyReq.php';
                    $cert_type = 'lg-hp';
                    break;
                default:
                    echo 'alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");';
                    echo 'return false;';
                    break;
            }
            ?>

            certify_win_open("<?php echo $cert_type; ?>", "<?php echo $cert_url; ?>");
            return;
        });
        <?php } ?>
    });

    // submit 최종 폼체크
    function fregisterform_submit(f)
    {
        // 회원아이디 검사
        if (f.w.value == "") {
            var msg = reg_mb_id_check();
            if (msg) {
                alert(msg);
                f.mb_id.select();
                return false;
            }
        }

        if (f.w.value == "") {
            if (f.mb_password.value.length < 3) {
                alert("비밀번호를 3글자 이상 입력하십시오.");
                f.mb_password.focus();
                return false;
            }
        }

        if (f.mb_password.value != f.mb_password_re.value) {
            alert("비밀번호가 같지 않습니다.");
            f.mb_password_re.focus();
            return false;
        }

        if (f.mb_password.value.length > 0) {
            if (f.mb_password_re.value.length < 3) {
                alert("비밀번호를 3글자 이상 입력하십시오.");
                f.mb_password_re.focus();
                return false;
            }
        }

        // 이름 검사
        if (f.w.value=="") {
            if (f.mb_name.value.length < 1) {
                alert("이름을 입력하십시오.");
                f.mb_name.focus();
                return false;
            }

            /*
            var pattern = /([^가-힣\x20])/i;
            if (pattern.test(f.mb_name.value)) {
                alert("이름은 한글로 입력하십시오.");
                f.mb_name.select();
                return false;
            }
            */
        }

        <?php if($w == '' && $config['cf_cert_use'] && $config['cf_cert_req']) { ?>
        // 본인확인 체크
        if(f.cert_no.value=="") {
            alert("회원가입을 위해서는 본인확인을 해주셔야 합니다.");
            return false;
        }
        <?php } ?>

        // E-mail 검사
        if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
            var msg = reg_mb_email_check();
            if (msg) {
                alert(msg);
                f.reg_mb_email.select();
                return false;
            }
        }

        <?php if (($config['cf_use_hp'] || $config['cf_cert_hp']) && $config['cf_req_hp']) {  ?>
        // 휴대폰번호 체크
        var msg = reg_mb_hp_check();
        if (msg) {
            alert(msg);
            f.reg_mb_hp.select();
            return false;
        }
        <?php } ?>

        if (typeof f.mb_icon != "undefined") {
            if (f.mb_icon.value) {
                if (!f.mb_icon.value.toLowerCase().match(/.(gif)$/i)) {
                    alert("회원아이콘이 gif 파일이 아닙니다.");
                    f.mb_icon.focus();
                    return false;
                }
            }
        }

        if (typeof(f.mb_recommend) != "undefined" && f.mb_recommend.value) {
            if (f.mb_id.value == f.mb_recommend.value) {
                alert("본인을 추천할 수 없습니다.");
                f.mb_recommend.focus();
                return false;
            }

            var msg = reg_mb_recommend_check();
            if (msg) {
                alert(msg);
                f.mb_recommend.select();
                return false;
            }
        }

        <?php echo chk_captcha_js();  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>

</div>
<!-- } 회원정보 입력/수정 끝 -->