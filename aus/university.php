<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 2;
    var dep2 = 1;
</script>
		<div id="sub_container" class="clfl">
			<div class="lnb_wrap">
				<div id="lnb">
					<p><img src="/front/image/common/lnb/top_aus.gif"/></p>
					<ul>
					    <li class="m1">
                            <p class="dep1">호주 유학 개요</p>
                            <ul class="dep2">
                                <li><a href="why.php">왜 호주인가</a></li>
                                <li><a href="institution.php">호주 교육 제도</a></li>
                                <li><a href="life.php">주요 도시 안내</a></li>
                                <li><a href="visa.php">비자 신청</a></li>
                                <li><a href="scholarship.php">장학금 정보</a></li>
                                <li><a href="procedure.php">출국 준비 안내</a></li>
                                <li><a href="review.php">명문대 합격 후기</a></li>
                            </ul>
                        </li>
						<li class="m2">
							<p class="dep1">학위과정</p>
							<ul class="dep2">
								<li><a href="university.php">호주 대학 소개</a></li>
								<li><a href="prep.php">대학 예비 과정</a></li>
								<li><a href="bachelor.php">학사 과정</a></li>
								<li><a href="doctor.php">석박사 과정</a></li>
								<li><a href="college.php">전문대 과정</a></li>
								<li><a href="ranking_univ.php">호주 대학 랭킹</a></li>
							</ul>
						</li>

						<li class="m3">
							<p class="dep1">어학연수</p>
							<ul class="dep2">
								<li><a href="affiliated.php">대학부설 영어연수</a></li>
								<li><a href="academy.php">사설기관 영어연수</a></li>
							</ul>
						</li>
						<li class="m4">
							<p class="dep1">조기유학</p>
							<ul class="dep2">
								<li><a href="public.php">공립학교</a></li>
								<li><a href="private.php">명문사립학교</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="subcontents_wrap">
				<ul class="title_wrap clfl">
					<li class="title fl"><img src="/front/image/aus/university/title.gif"/></li>
					<li class="location fr">
						<ul>
							<li>HOME</li>
							<li>></li>
							<li>호주</li>
							<li>></li>
							<li>학위과정</li>
							<li>></li>
							<li>호주 대학 소개</li>
						</ul>
					</li>
				</ul>
				<img src="/front/image/aus/university/cont1.jpg"/>
				<img style="margin-top: 30px;" src="/front/image/aus/university/cont2.jpg" usemap="#001"/>
				<map name="001">
					<area class="btn1" shape="rect" coords="0,0,195,85">
					<area class="btn2" shape="rect" coords="199,0,393,85">
					<area class="btn3" shape="rect" coords="398,0,593,85">
					<area class="btn4" shape="rect" coords="597,0,791,85">
					<area class="btn5" shape="rect" coords="0,90,194,175">
					<area class="btn6" shape="rect" coords="199,90,393,175">
					<area class="btn7" shape="rect" coords="398,90,593,175">
					<area class="btn8" shape="rect" coords="597,90,791,175">
				</map>
				<div class="popcontent_wrap">
					<div class="content"></div>
				</div>
				<script type="text/javascript" src="/front/js/jquery.bpopup.min.js"></script>
				<script type="text/javascript">
					$('.btn1').click(function(){
						$('.popcontent_wrap').bPopup({
							content: "iframe",
							contentContainer:'.content',
							loadUrl:'./popup/university_pop1.php',
							zIndex: '99999',
							iframeAttr: 'width="652" height="831" scrolling="no" frameborder="0"'
						});
					})
				</script>
				<img style="margin-top: 80px;" src="/front/image/aus/university/cont3.jpg" />
				<img style="margin-top: 80px;" src="/front/image/aus/university/c_tit1.gif" />
				<table cellpadding="0" cellspacing="0" class="tb_type2 mt20">
					<colgroup>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
					</colgroup>
					<tr class="title">
						<td colspan="5"><img src="/front/image/aus/university/c_tit2.gif"/></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l1_1.gif"/></td>
						<td><img src="/front/image/aus/university/l1_2.gif"/></td>
						<td><img src="/front/image/aus/university/l1_3.gif"/></td>
						<td><img src="/front/image/aus/university/l1_4.gif"/></td>
						<td><img src="/front/image/aus/university/l1_5.gif"/></td>
					</tr>
					<tr class="name">
						<td>The Australian National University (ANU)</td>
						<td>University of Canberra (UC)</td>
						<td>Australian Catholic University (ACU)</td>
						<td>Charles Sturt University (CSU)</td>
						<td>Macquarie University</td>
					</tr>
					<tr class="link">
						<td><a href="http://www.anu.edu.au" target="_blank">www.anu.edu.au</a></td>
						<td><a href="http://www.canberra.edu.au" target="_blank">www.canberra.edu.au</a></td>
						<td><a href="http://www.acu.edu.au" target="_blank">www.acu.edu.au</a></td>
						<td><a href="http://www.csu.edu.au" target="_blank">www.csu.edu.au</a></td>
						<td><a href="http://www.mq.edu.au" target="_blank">www.mq.edu.au</a></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l1_6.gif"/></td>
						<td><img src="/front/image/aus/university/l1_7.gif"/></td>
						<td><img src="/front/image/aus/university/l1_8.gif"/></td>
						<td><img src="/front/image/aus/university/l1_9.gif"/></td>
						<td><img src="/front/image/aus/university/l1_10.gif"/></td>
					</tr>
					<tr class="name">
						<td>Southern Cross University (SCU)</td>
						<td>The University of Newcastle (UON)</td>
						<td>The University of New South Wales (UNSW)</td>
						<td>The University of Sydney</td>
						<td>University of New England (UNE)</td>
					</tr>
					<tr class="link">
						<td><a href="http://www.scu.edu.au" target="_blank">www.scu.edu.au</a></td>
						<td><a href="http://www.newcastle.edu.au" target="_blank">www.newcastle.edu.au</a></td>
						<td><a href="http://www.unsw.edu.au" target="_blank">www.unsw.edu.au</a></td>
						<td><a href="http://www.usyd.edu.au" target="_blank">www.usyd.edu.au</a></td>
						<td><a href="http://www.une.edu.au" target="_blank">www.une.edu.au</a></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l1_11.gif"/></td>
						<td><img src="/front/image/aus/university/l1_12.gif"/></td>
						<td><img src="/front/image/aus/university/l1_13.gif"/></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="name">
						<td>University of Technology Sydney (UTS)</td>
						<td>Western Sydney University (WSU)</td>
						<td>University of Wollongong (UOW)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="link">
						<td><a href="http://www.uts.edu.au" target="_blank">www.uts.edu.au</a></td>
						<td><a href="http://www.westernsydney.edu.au" target="_blank">www.westernsydney.edu.au</a></td>
						<td><a href="http://www.uow.edu.au" target="_blank">www.uow.edu.au</a></td>
						<td></td>
						<td></td>
					</tr>
				</table>

				<table cellpadding="0" cellspacing="0" class="tb_type2 mt60">
					<colgroup>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
					</colgroup>
					<tr class="title">
						<td colspan="5"><img src="/front/image/aus/university/c_tit3.gif"/></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l2_1.gif"/></td>
						<td><img src="/front/image/aus/university/l2_2.gif"/></td>
						<td><img src="/front/image/aus/university/l2_3.gif"/></td>
						<td><img src="/front/image/aus/university/l2_4.gif"/></td>
						<td><img src="/front/image/aus/university/l2_5.gif"/></td>
					</tr>
					<tr class="name">
						<td>Deakin University</td>
						<td>La Trobe University</td>
						<td>Monash University</td>
						<td>Royal Melbourne Institute of Technology(RMIT)</td>
						<td>Swinburne University of Technology</td>
					</tr>
					<tr class="link">
						<td><a href="http://www.deakin.edu.au" target="_blank">www.deakin.edu.au</a></td>
						<td><a href="http://www.latrobe.edu.au" target="_blank">www.latrobe.edu.au</a></td>
						<td><a href="http://www.monash.edu.au" target="_blank">www.monash.edu.au</a></td>
						<td><a href="http://www.rmit.edu.au" target="_blank">www.rmit.edu.au</a></td>
						<td><a href="http://www.swinburne.edu.au" target="_blank">www.swinburne.edu.au</a></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l2_6.gif"/></td>
						<td><img src="/front/image/aus/university/l2_7.gif"/></td>
						<td><img src="/front/image/aus/university/l2_8.gif"/></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="name">
						<td>The University of Melbourn</td>
						<td>Federation University</td>
						<td>Victoria University</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="link">
						<td><a href="http://www.unimelb.edu.au" target="_blank">www.unimelb.edu.au</a></td>
						<td><a href="http://www.federation.edu.au" target="_blank">www.federation.edu.au</a></td>
						<td><a href="http://www.vu.edu.au" target="_blank">www.vu.edu.au</a></td>
						<td></td>
						<td></td>
					</tr>
				</table>

				<table cellpadding="0" cellspacing="0" class="tb_type2 mt60">
					<colgroup>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
					</colgroup>
					<tr class="title">
						<td colspan="5"><img src="/front/image/aus/university/c_tit4.gif"/></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l3_1.gif"/></td>
						<td><img src="/front/image/aus/university/l3_2.gif"/></td>
						<td><img src="/front/image/aus/university/l3_3.gif"/></td>
						<td><img src="/front/image/aus/university/l3_4.gif"/></td>
						<td><img src="/front/image/aus/university/l3_5.gif"/></td>
					</tr>
					<tr class="name">
						<td>Bond University</td>
						<td>Central Queensland University (CQU)</td>
						<td>Griffith University (GU)</td>
						<td>James Cook University (JCU)</td>
						<td>Queensland University of Technology (QUT)</td>
					</tr>
					<tr class="link">
						<td><a href="http://www.bond.edu.au" target="_blank">www.bond.edu.au</a></td>
						<td><a href="http://www.cqu.edu.au" target="_blank">www.cqu.edu.au</a></td>
						<td><a href="http://www.griffith.edu.au" target="_blank">www.griffith.edu.au</a></td>
						<td><a href="http://www.jcu.edu.au" target="_blank">www.jcu.edu.au</a></td>
						<td><a href="http://www.qut.edu.au" target="_blank">www.qut.edu.au</a></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l3_6.gif"/></td>
						<td><img src="/front/image/aus/university/l3_7.gif"/></td>
						<td><img src="/front/image/aus/university/l3_8.gif"/></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="name">
						<td>The University of Queensland (UQ)</td>
						<td>University of Southern Queensland (USQ)</td>
						<td>University of Sunshine Coast (USC)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="link">
						<td><a href="http://www.uq.edu.au" target="_blank">www.uq.edu.au</a></td>
						<td><a href="http://www.usq.edu.au" target="_blank">www.usq.edu.au</a></td>
						<td><a href="http://www.usc.edu.au" target="_blank">www.usc.edu.au</a></td>
						<td></td>
						<td></td>
					</tr>
				</table>

				<table cellpadding="0" cellspacing="0" class="tb_type2 mt60">
					<colgroup>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
						<col width="20%"/>
					</colgroup>
					<tr class="title">
						<td colspan="5"><img src="/front/image/aus/university/c_tit5.gif"/></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l4_1.gif"/></td>
						<td><img src="/front/image/aus/university/l4_2.gif"/></td>
						<td><img src="/front/image/aus/university/l4_3.gif"/></td>
						<td><img src="/front/image/aus/university/l4_4.gif"/></td>
						<td><img src="/front/image/aus/university/l4_5.gif"/></td>
					</tr>
					<tr class="name">
						<td>Flinders University</td>
						<td>The University of Adelaide</td>
						<td>University of South Australia (UNISA)</td>
						<td>Curtin University of Technology</td>
						<td>Edith Cowan University (ECU)</td>
					</tr>
					<tr class="link">
						<td><a href="http://www.flinders.edu.au" target="_blank">www.flinders.edu.au</a></td>
						<td><a href="http://www.adelaide.edu.au" target="_blank">www.adelaide.edu.au</a></td>
						<td><a href="http://www.unisa.edu.au" target="_blank">www.unisa.edu.au</a></td>
						<td><a href="http://www.curtin.edu.au" target="_blank">www.curtin.edu.au</a></td>
						<td><a href="http://www.ecu.edu.au" target="_blank">www.ecu.edu.au</a></td>
					</tr>
					<tr class="logo">
						<td><img src="/front/image/aus/university/l4_6.gif"/></td>
						<td><img src="/front/image/aus/university/l4_7.gif"/></td>
						<td><img src="/front/image/aus/university/l4_8.gif"/></td>
						<td><img src="/front/image/aus/university/l4_9.gif"/></td>
						<td><img src="/front/image/aus/university/l4_10.gif"/></td>
					</tr>
					<tr class="name">
						<td>Murdoch University</td>
						<td>The University of Western Australia (UWA)</td>
						<td>University of Notre Dame</td>
						<td>University of Tasmania (UTAS)</td>
						<td>Charles Darwin University (CDU)</td>
					</tr>
					<tr class="link">
						<td><a href="http://www.murdoch.edu.au" target="_blank">www.murdoch.edu.au</a></td>
						<td><a href="http://www.uwa.edu.au" target="_blank">www.uwa.edu.au</a></td>
						<td><a href="http://www.notredame.edu.au" target="_blank">www.notredame.edu.au</a></td>
						<td><a href="http://www.utas.edu.au" target="_blank">www.utas.edu.au</a></td>
						<td><a href="http://www.cdu.edu.au" target="_blank">www.cdu.edu.au</a></td>
					</tr>
				</table>
			</div>
		</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>