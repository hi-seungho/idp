<?php include_once('./_common.php');  if (G5_IS_MOBILE) {     include_once(G5_THEME_MOBILE_PATH.'/index.php');     return; }  include_once(G5_THEME_PATH.'/head.php'); ?>
<script type="text/javascript">
    var dep1 = 2;
    var dep2 = 3;
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
					<li class="title fl"><img src="/front/image/aus/bachelor/title.gif"/></li>
					<li class="location fr">
						<ul>
							<li>HOME</li>
							<li>></li>
							<li>호주</li>
							<li>></li>
							<li>학위과정</li>
							<li>></li>
							<li>학사 과정</li>
						</ul>
					</li>
				</ul>
				<img src="/front/image/aus/bachelor/cont1.jpg"/>
				<img style="margin-top: 30px;" src="/front/image/aus/bachelor/cont2.jpg" usemap="#001"/>
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
			</div>
		</div>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/tail.php'); ?>