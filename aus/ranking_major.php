<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
		<div id="sub_container" class="clfl">
			<div class="lnb_wrap">
				<div id="lnb">
					<p><img src="/front/image/common/lnb/top_aus.gif"/></p>
					<ul>
						<li class="m1">
							<p class="dep1">학위과정</p>
							<ul class="dep2">
								<li><a href="university.php">호주 대학 소개</a></li>
								<li><a href="prep.php">대학 예비 과정</a></li>
								<li><a href="bachelor.php">학사 과정</a></li>
								<li><a href="doctor.php">석박사 과정</a></li>
								<li><a href="college.php">전문대 과정</a></li>
								<li><a href="ranking_univ.php">호주 대학 랭킹</a></li>
								<li><a href="recommend.php">IDP 추천학교</a></li>
							</ul>
						</li>

						<li class="m2">
							<p class="dep1">어학연수</p>
							<ul class="dep2">
								<li><a href="affiliated.php">대학부설 영어연수</a></li>
								<li><a href="academy.php">사설기관 영어연수</a></li>
							</ul>
						</li>
						<li class="m3">
							<p class="dep1">조기유학</p>
							<ul class="dep2">
								<li><a href="public.php">공립학교</a></li>
								<li><a href="private.php">명문사립학교</a></li>
							</ul>
						</li>
						<li class="m4">
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
					</ul>
				</div>
			</div>
			<div class="subcontents_wrap">
				<ul class="title_wrap clfl">
					<li class="title fl"><img src="/front/image/aus/ranking/title.gif"/></li>
					<li class="location fr">
						<ul>
							<li>HOME</li>
							<li>></li>
							<li>호주</li>
							<li>></li>
							<li>학위과정</li>
							<li>></li>
							<li>호주 대학 랭킹</li>
						</ul>
					</li>
				</ul>
				<ul class="ranktab clfl">
					<li><a href="ranking_univ.php"><img src="/front/image/aus/ranking/btn1_off.gif" alt=""/></a></li>
					<li><img src="/front/image/aus/ranking/btn2_on.gif" alt=""/></li>
				</ul>
				<img class="mt20" src="/front/image/aus/ranking/tit1.gif"/>
				<ul class="rankbtns_wrap clfl">
					<li><a class="scroll" href="#rank_cont1"><img src="/front/image/aus/ranking/m_btn1.gif"/></a></li>
					<li><a class="scroll" href="#rank_cont2"><img src="/front/image/aus/ranking/m_btn2.gif"/></a></li>
					<li><a class="scroll" href="#rank_cont3"><img src="/front/image/aus/ranking/m_btn3.gif"/></a></li>
					<li><a class="scroll" href="#rank_cont4"><img src="/front/image/aus/ranking/m_btn4.gif"/></a></li>
					<li><a class="scroll" href="#rank_cont5"><img src="/front/image/aus/ranking/m_btn5.gif"/></a></li>
					<li><a class="scroll" href="#rank_cont6"><img src="/front/image/aus/ranking/m_btn6.gif"/></a></li>
					<li><a class="scroll" href="#rank_cont7"><img src="/front/image/aus/ranking/m_btn7.gif"/></a></li>
					<li><a class="scroll" href="#rank_cont8"><img src="/front/image/aus/ranking/m_btn8.gif"/></a></li>
				</ul>
				<img id="rank_cont1" class="mt80" src="/front/image/aus/ranking/cont2_1.gif"/>
				<img id="rank_cont2" class="mt80" src="/front/image/aus/ranking/cont2_2.gif"/>
				<img id="rank_cont3" class="mt80" src="/front/image/aus/ranking/cont2_3.gif"/>
				<img id="rank_cont4" class="mt80" src="/front/image/aus/ranking/cont2_4.gif"/>
				<img id="rank_cont5" class="mt80" src="/front/image/aus/ranking/cont2_5.gif"/>
				<img id="rank_cont6" class="mt80" src="/front/image/aus/ranking/cont2_6.gif"/>
				<img id="rank_cont7" class="mt80" src="/front/image/aus/ranking/cont2_7.gif"/>
				<img id="rank_cont8" class="mt80" src="/front/image/aus/ranking/cont2_8.gif"/>
			</div>
		</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>