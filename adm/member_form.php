<?php
$sub_menu = "200100";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'w');

if ($w == '')
{
    $required_mb_id = 'required';
    $required_mb_id_class = 'required alnum_';
    $required_mb_password = 'required';
    $sound_only = '<strong class="sound_only">필수</strong>';

    $mb['mb_mailling'] = 1;
    $mb['mb_open'] = 1;
    $mb['mb_level'] = $config['cf_register_level'];
    $html_title = '추가';
}
else if ($w == 'u')
{
    $mb = get_member($mb_id);
    if (!$mb['mb_id'])
        alert('존재하지 않는 회원자료입니다.');

    if ($is_admin != 'super' && $mb['mb_level'] > $member['mb_level'])
        alert('자신보다 권한이 높거나 같은 회원은 수정할 수 없습니다.');

    $required_mb_id = 'readonly';
    $required_mb_password = '';
    $html_title = '수정';

    $mb['mb_name'] = get_text($mb['mb_name']);
    $mb['mb_nick'] = get_text($mb['mb_nick']);
    $mb['mb_email'] = get_text($mb['mb_email']);
    $mb['mb_homepage'] = get_text($mb['mb_homepage']);
    $mb['mb_birth'] = get_text($mb['mb_birth']);
    $mb['mb_tel'] = get_text($mb['mb_tel']);
    $mb['mb_hp'] = get_text($mb['mb_hp']);
    $mb['mb_addr1'] = get_text($mb['mb_addr1']);
    $mb['mb_addr2'] = get_text($mb['mb_addr2']);
    $mb['mb_addr3'] = get_text($mb['mb_addr3']);
    $mb['mb_signature'] = get_text($mb['mb_signature']);
    $mb['mb_recommend'] = get_text($mb['mb_recommend']);
    $mb['mb_profile'] = get_text($mb['mb_profile']);
    $mb['mb_1'] = get_text($mb['mb_1']);
    $mb['mb_2'] = get_text($mb['mb_2']);
    $mb['mb_3'] = get_text($mb['mb_3']);
    $mb['mb_4'] = get_text($mb['mb_4']);
    $mb['mb_5'] = get_text($mb['mb_5']);
    $mb['mb_6'] = get_text($mb['mb_6']);
    $mb['mb_7'] = get_text($mb['mb_7']);
    $mb['mb_8'] = get_text($mb['mb_8']);
    $mb['mb_9'] = get_text($mb['mb_9']);
    $mb['mb_10'] = get_text($mb['mb_10']);
}
else
    alert('제대로 된 값이 넘어오지 않았습니다.');

// 본인확인방법
switch($mb['mb_certify']) {
    case 'hp':
        $mb_certify_case = '휴대폰';
        $mb_certify_val = 'hp';
        break;
    case 'ipin':
        $mb_certify_case = '아이핀';
        $mb_certify_val = 'ipin';
        break;
    case 'admin':
        $mb_certify_case = '관리자 수정';
        $mb_certify_val = 'admin';
        break;
    default:
        $mb_certify_case = '';
        $mb_certify_val = 'admin';
        break;
}

// 본인확인
$mb_certify_yes  =  $mb['mb_certify'] ? 'checked="checked"' : '';
$mb_certify_no   = !$mb['mb_certify'] ? 'checked="checked"' : '';

// 성인인증
$mb_adult_yes       =  $mb['mb_adult']      ? 'checked="checked"' : '';
$mb_adult_no        = !$mb['mb_adult']      ? 'checked="checked"' : '';

//메일수신
$mb_mailling_yes    =  $mb['mb_mailling']   ? 'checked="checked"' : '';
$mb_mailling_no     = !$mb['mb_mailling']   ? 'checked="checked"' : '';

// SMS 수신
$mb_sms_yes         =  $mb['mb_sms']        ? 'checked="checked"' : '';
$mb_sms_no          = !$mb['mb_sms']        ? 'checked="checked"' : '';

// 정보 공개
$mb_open_yes        =  $mb['mb_open']       ? 'checked="checked"' : '';
$mb_open_no         = !$mb['mb_open']       ? 'checked="checked"' : '';

if (isset($mb['mb_certify'])) {
    // 날짜시간형이라면 drop 시킴
    if (preg_match("/-/", $mb['mb_certify'])) {
        sql_query(" ALTER TABLE `{$g5['member_table']}` DROP `mb_certify` ", false);
    }
} else {
    sql_query(" ALTER TABLE `{$g5['member_table']}` ADD `mb_certify` TINYINT(4) NOT NULL DEFAULT '0' AFTER `mb_hp` ", false);
}

if(isset($mb['mb_adult'])) {
    sql_query(" ALTER TABLE `{$g5['member_table']}` CHANGE `mb_adult` `mb_adult` TINYINT(4) NOT NULL DEFAULT '0' ", false);
} else {
    sql_query(" ALTER TABLE `{$g5['member_table']}` ADD `mb_adult` TINYINT NOT NULL DEFAULT '0' AFTER `mb_certify` ", false);
}

// 지번주소 필드추가
if(!isset($mb['mb_addr_jibeon'])) {
    sql_query(" ALTER TABLE {$g5['member_table']} ADD `mb_addr_jibeon` varchar(255) NOT NULL DEFAULT '' AFTER `mb_addr2` ", false);
}

// 건물명필드추가
if(!isset($mb['mb_addr3'])) {
    sql_query(" ALTER TABLE {$g5['member_table']} ADD `mb_addr3` varchar(255) NOT NULL DEFAULT '' AFTER `mb_addr2` ", false);
}

// 중복가입 확인필드 추가
if(!isset($mb['mb_dupinfo'])) {
    sql_query(" ALTER TABLE {$g5['member_table']} ADD `mb_dupinfo` varchar(255) NOT NULL DEFAULT '' AFTER `mb_adult` ", false);
}

// 이메일인증 체크 필드추가
if(!isset($mb['mb_email_certify2'])) {
    sql_query(" ALTER TABLE {$g5['member_table']} ADD `mb_email_certify2` varchar(255) NOT NULL DEFAULT '' AFTER `mb_email_certify` ", false);
}

if ($mb['mb_intercept_date']) $g5['title'] = "차단된 ";
else $g5['title'] .= "";
$g5['title'] .= '회원 '.$html_title;
include_once('./admin.head.php');

// add_javascript('js 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_javascript(G5_POSTCODE_JS, 0);    //다음 주소 js
?>
<style>
    ul.radio_list {
        list-style-type: none;
    }

    .radio_list li {
        float: left;
        margin-right: 10px;
    }
</style>
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

<form name="fmember" id="fmember" action="./member_form_update.php" onsubmit="return fmember_submit(this);" method="post" enctype="multipart/form-data">
<input type="hidden" name="w" value="<?php echo $w ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="token" value="">
    <input type="hidden" name="mb_nick" value="<?php echo $mb['mb_nick'] ?>">

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?></caption>
    <colgroup>
        <col class="grid_4">
        <col>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <tr>
        <th scope="row"><label for="mb_id">아이디<?php echo $sound_only ?></label></th>
        <td>
            <input type="text" name="mb_id" value="<?php echo $mb['mb_id'] ?>" id="mb_id" <?php echo $required_mb_id ?> class="frm_input <?php echo $required_mb_id_class ?>" size="15" minlength="3" maxlength="20">
        </td>
        <th scope="row"><label for="mb_password">비밀번호<?php echo $sound_only ?></label></th>
        <td><input type="password" name="mb_password" id="mb_password" <?php echo $required_mb_password ?> class="frm_input <?php echo $required_mb_password ?>" size="15" maxlength="20"></td>
    </tr>
    <tr>
        <th scope="row"><label for="mb_name">이름(실명)<strong class="sound_only">필수</strong></label></th>
        <td><input type="text" name="mb_name" value="<?php echo $mb['mb_name'] ?>" id="mb_name" required class="required frm_input" size="15" minlength="2" maxlength="20"></td>
        <th scope="row"><label for="mb_tel">전화번호</label></th>
        <td><input type="text" name="mb_tel" value="<?php echo $mb['mb_tel'] ?>" id="mb_tel" class="frm_input" size="15" maxlength="20"></td>
    </tr>
    <tr>
        <th scope="row"><label for="mb_email">E-mail<strong class="sound_only">필수</strong></label></th>
        <td><input type="text" name="mb_email" value="<?php echo $mb['mb_email'] ?>" id="mb_email" maxlength="100" required class="required frm_input email" size="30"></td>
        <th scope="row"><label for="mb_hp">휴대폰번호</label></th>
        <td><input type="text" name="mb_hp" value="<?php echo $mb['mb_hp'] ?>" id="mb_hp" class="frm_input" size="15" maxlength="20"></td>
    </tr>
    <tr>
        <th scope="row"><label for="mb_level">회원 권한</label></th>
        <td>
            <?php
            $level = array(2=>'일반회원', 3=>'컨설턴트', 9=>'관리자', 10=>'총관리자');
            if ($member['mb_level'] == $mb['mb_level']) {
                echo '<input type="hidden" name="mb_level" value="'.$mb['mb_level'].'">';
                echo $level[$mb['mb_level']];
            } else {
                echo get_member_level_select("mb_level", 2, 3, $mb['mb_level'], $level);
            }
            ?>
        </td>
        <th scope="row"><label for="reg_mb_3">생년월일 <strong class="sound_only">필수</strong></label></th>
        <td><input type="text" name="mb_3" value="<?php echo get_text($mb['mb_3']) ?>" id="reg_mb_3" required class="frm_input required" size="10" maxlength="20" readonly="readonly"></td>
    </tr>
    <tr>
        <th scope="row">주소</th>
        <td colspan="3" class="td_addr_line">
            <label for="mb_zip" class="sound_only">우편번호</label>
            <input type="text" name="mb_zip" value="<?php echo $mb['mb_zip1'].$mb['mb_zip2']; ?>" id="mb_zip" class="frm_input readonly" size="5" maxlength="6">
            <button type="button" class="btn_frmline" onclick="win_zip('fmember', 'mb_zip', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');">주소 검색</button><br>
            <input type="text" name="mb_addr1" value="<?php echo $mb['mb_addr1'] ?>" id="mb_addr1" class="frm_input readonly" size="60">
            <label for="mb_addr1">기본주소</label><br>
            <input type="text" name="mb_addr2" value="<?php echo $mb['mb_addr2'] ?>" id="mb_addr2" class="frm_input" size="60">
            <label for="mb_addr2">상세주소</label>
            <br>
            <input type="text" name="mb_addr3" value="<?php echo $mb['mb_addr3'] ?>" id="mb_addr3" class="frm_input" size="60">
            <label for="mb_addr3">참고항목</label>
            <input type="hidden" name="mb_addr_jibeon" value="<?php echo $mb['mb_addr_jibeon']; ?>"><br>
        </td>
    </tr>

    <?php if ($mb['mb_level'] == 3) { ?>
        <tr>
            <th scope="row"><label for="reg_mb_4">팩스번호</label></th>
            <td colspan="3"><input type="text" name="mb_4" value="<?php echo get_text($mb['mb_4']) ?>" id="reg_mb_4" class="frm_input" maxlength="20"></td>
        </tr>
    <?php }  ?>
    <tr>
        <th scope="row">국가</th>
        <td colspan="3">
            <ul class="radio_list">
                <li><input type="radio" name="mb_1" value="호주" <?php echo get_checked($mb['mb_1'], '호주'); ?>><label>호주</label></li>
                <li><input type="radio" name="mb_1" value="영국" <?php echo get_checked($mb['mb_1'], '영국'); ?>><label>영국</label></li>
                <li><input type="radio" name="mb_1" value="미국" <?php echo get_checked($mb['mb_1'], '미국'); ?>><label>미국</label></li>
                <li><input type="radio" name="mb_1" value="캐나다" <?php echo get_checked($mb['mb_1'], '캐나다'); ?>><label>캐나다</label></li>
                <li><input type="radio" name="mb_1" value="뉴질랜드" <?php echo get_checked($mb['mb_1'], '뉴질랜드'); ?>><label>뉴질랜드</label></li>
            </ul>
        </td>
    </tr>
    <tr>
        <th scope="row">유학종류</th>
        <td colspan="3">
            <ul class="radio_list">
                <li><input type="radio" name="mb_2" value="전문대 과정" <?php echo get_checked($mb['mb_2'], '전문대 과정'); ?>><label>전문대 과정</label></li>
                <li><input type="radio" name="mb_2" value="대학교 입학" <?php echo get_checked($mb['mb_2'], '대학교 입학'); ?>><label>대학교 입학</label></li>
                <li><input type="radio" name="mb_2" value="대학교 편입" <?php echo get_checked($mb['mb_2'], '대학교 편입'); ?>><label>대학교 편입</label></li>
                <li><input type="radio" name="mb_2" value="석사과정" <?php echo get_checked($mb['mb_2'], '석사과정'); ?>><label>석사과정</label></li>
                <li><input type="radio" name="mb_2" value="박사과정" <?php echo get_checked($mb['mb_2'], '박사과정'); ?>><label>박사과정</label></li>
                <li><input type="radio" name="mb_2" value="기타" <?php echo get_checked($mb['mb_2'], '기타'); ?>><label>기타</label></li>
            </ul>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="mb_memo">메모</label></th>
        <td colspan="3"><textarea name="mb_memo" id="mb_memo"><?php echo $mb['mb_memo'] ?></textarea></td>
    </tr>

    <?php if ($w == 'u') { ?>
    <tr>
        <th scope="row">회원가입일</th>
        <td><?php echo $mb['mb_datetime'] ?></td>
        <th scope="row">최근접속일</th>
        <td><?php echo $mb['mb_today_login'] ?></td>
    </tr>
    <tr>
        <th scope="row">IP</th>
        <td><?php echo $mb['mb_ip'] ?></td>
        <th scope="row">유학정보 수신</th>
        <td>
            <input type="radio" name="mb_mailling" value="1" id="mb_mailling_yes" <?php echo $mb_mailling_yes; ?>>
            <label for="mb_mailling_yes">예</label>
            <input type="radio" name="mb_mailling" value="0" id="mb_mailling_no" <?php echo $mb_mailling_no; ?>>
            <label for="mb_mailling_no">아니오</label>
        </td>
    </tr>
    <?php if ($config['cf_use_email_certify']) { ?>
    <tr>
        <th scope="row">인증일시</th>
        <td colspan="3">
            <?php if ($mb['mb_email_certify'] == '0000-00-00 00:00:00') { ?>
            <?php echo help('회원님이 메일을 수신할 수 없는 경우 등에 직접 인증처리를 하실 수 있습니다.') ?>
            <input type="checkbox" name="passive_certify" id="passive_certify">
            <label for="passive_certify">수동인증</label>
            <?php } else { ?>
            <?php echo $mb['mb_email_certify'] ?>
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
    <?php } ?>

    <?php if ($config['cf_use_recommend']) { // 추천인 사용 ?>
    <tr>
        <th scope="row">추천인</th>
        <td colspan="3"><?php echo ($mb['mb_recommend'] ? get_text($mb['mb_recommend']) : '없음'); // 081022 : CSRF 보안 결함으로 인한 코드 수정 ?></td>
    </tr>
    <?php } ?>

    <tr>
        <th scope="row"><label for="mb_leave_date">탈퇴일자</label></th>
        <td>
            <input type="text" name="mb_leave_date" value="<?php echo $mb['mb_leave_date'] ?>" id="mb_leave_date" class="frm_input" maxlength="8">
            <input type="checkbox" value="<?php echo date("Ymd"); ?>" id="mb_leave_date_set_today" onclick="if (this.form.mb_leave_date.value==this.form.mb_leave_date.defaultValue) {
this.form.mb_leave_date.value=this.value; } else { this.form.mb_leave_date.value=this.form.mb_leave_date.defaultValue; }">
            <label for="mb_leave_date_set_today">탈퇴일을 오늘로 지정</label>
        </td>
        <th scope="row">접근차단일자</th>
        <td>
            <input type="text" name="mb_intercept_date" value="<?php echo $mb['mb_intercept_date'] ?>" id="mb_intercept_date" class="frm_input" maxlength="8">
            <input type="checkbox" value="<?php echo date("Ymd"); ?>" id="mb_intercept_date_set_today" onclick="if
(this.form.mb_intercept_date.value==this.form.mb_intercept_date.defaultValue) { this.form.mb_intercept_date.value=this.value; } else {
this.form.mb_intercept_date.value=this.form.mb_intercept_date.defaultValue; }">
            <label for="mb_intercept_date_set_today">접근차단일을 오늘로 지정</label>
        </td>
    </tr>

    <?php for ($i=1; $i<=0; $i++) { ?>
    <tr>
        <th scope="row"><label for="mb_<?php echo $i ?>">여분 필드 <?php echo $i ?></label></th>
        <td colspan="3"><input type="text" name="mb_<?php echo $i ?>" value="<?php echo $mb['mb_'.$i] ?>" id="mb_<?php echo $i ?>" class="frm_input" size="30" maxlength="255"></td>
    </tr>
    <?php } ?>

    </tbody>
    </table>
</div>

<div class="btn_confirm01 btn_confirm">
    <input type="submit" value="확인" class="btn_submit" accesskey='s'>
    <a href="./member_list.php?<?php echo $qstr ?>">목록</a>
</div>
</form>

<script>
function fmember_submit(f)
{
    if (!f.mb_icon.value.match(/\.gif$/i) && f.mb_icon.value) {
        alert('아이콘은 gif 파일만 가능합니다.');
        return false;
    }

    return true;
}
</script>

<?php
include_once('./admin.tail.php');
?>
