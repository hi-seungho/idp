<?php include_once('./_common.php');  if (G5_IS_MOBILE) {     include_once(G5_THEME_MOBILE_PATH.'/index.php');     return; }  include_once(G5_THEME_PATH.'/head.php'); ?>
<script type="text/javascript">
    var dep1 = 0;
    var dep2 = 0;
</script>
		<div id="container">
			<div class="mainvisual_slider">
				<script type="text/javascript" src="/front/js/flexslider/jquery.flexslider.js"></script>
				<link type="text/css" rel="stylesheet" href="/front/js/flexslider/flexslider.css" />
				<div style="position: relative; z-index: 0;">
					<div id="mainslider" class="flexslider">
						<ul class="slides">
							<li style="background-image: url(/front/image/main/main_visual_1.jpg)"><a href="/campaign/campaign_world.php" style="display: block; width: 1378px; height: 496px; position: relative; margin: 0 auto;" target="_self"></a></li>
							<li style="background-image: url(/front/image/main/main_visual_2.jpg)"></li>
							<li style="background-image: url(/front/image/main/main_visual_3.jpg)"><a href="/campaign/campaign_scholarship.php" style="display: block; width: 1378px; height: 496px; position: relative; margin: 0 auto;" target="_self"></a></li>
							<li style="background-image: url(/front/image/main/main_visual_4.jpg)"></li>
							<li style="background-image: url(/front/image/main/main_visual_5.jpg)"></li>
							<!-- items mirrored twice, total of 12 -->
						</ul>
					</div>
				</div>
				<div id="maincarousel" class="flexslider">
					<ul class="slides">
						<li>
							<span>2016<br/>세계유학박람회</span>
						</li>
						<li>
							<span>아메리칸투어리스트 캐리어<br/>이벤트</span>
						</li>
						<li>
							<span>호주 대학부설 어학연수<br/>장학금</span>
						</li>
						<li>
							<span>IDP 셀프유학<br/>수속시스템 오픈</span>
						</li>
						<li>
							<span>IDP IELTS<br/>강남시험장 소개</span>
						</li>
						<!-- items mirrored twice, total of 12 -->
					</ul>
				</div>
				<script type="text/javascript">
					$(window).load(function() {
						$('#maincarousel').flexslider({
							animation: "slide",
							controlNav: false,
							animationLoop: false,
							slideshow: false,
							itemWidth: 200,
							itemMargin: 0,
							asNavFor: '#mainslider'
						});

						$('#mainslider').flexslider({
							animation: "fade",
                            slideshow: true,
                            slideshowSpeed: 5000,
                            animationSpeed: 600,
							directionNav: false,
							itemWidth: 'auto',
							controlNav: false,
							animationLoop: false,
							sync: "#maincarousel"
						});
					});
				</script>
			</div>
			<div id="main_cont_container">
				<div class="inner1_wrap clfl">
					<div class="area1_wrap clfl">
						<div class="fl" style="margin-right: 13px;">
							<p style="margin-bottom: 20px;"><img src="/front/image/main/area1_tit1.gif" alt=""/></p>
							<ul class="tab1">
								<li><img src="/front/image/main/area1_tab1_on.gif" alt=""/></li>
								<li><img src="/front/image/main/area1_tab2_off.gif" alt=""/></li>
								<li><img src="/front/image/main/area1_tab3_off.gif" alt=""/></li>
								<li><img src="/front/image/main/area1_tab4_off.gif" alt=""/></li>
							</ul>
						</div>
						<div class="fl">
							<ul class="cont1">
								<li><a href="/recommend/usa.php"><img src="/front/image/main/area1_img1.jpg"/></a></li>
								<li><a href="/recommend/aus.php"><img src="/front/image/main/area1_img1.jpg"/></a></li>
								<li><a href="/recommend/uk_art.php"><img src="/front/image/main/area1_img1.jpg"/></a></li>
								<li><a href="/recommend/uk_rusell.php"><img src="/front/image/main/area1_img1.jpg"/></a></li>
							</ul>
						</div>
					</div>
					<div class="area2_wrap">
						<a class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='https://www.youtube.com/embed/xajnJJ76S94' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/area2_img1.gif" alt=""/></a>
					</div>
					<div class="area3_wrap">
						<p style="margin-bottom: 18px;"><img src="/front/image/main/area3_img1.gif" alt=""/></p>
						<a href="/company/info.php"><img src="/front/image/main/area3_btn1.gif" alt=""/></a>
					</div>
				</div>
				<div class="inner2_wrap clfl">
					<div class="area1_wrap clfl">
						<p class="tit1"><img src="/front/image/main/inner2_area1_tit1.gif" alt=""/></p>
						<ul class="tab1">
							<li><img src="/front/image/main/inner2_area1_tab1_on.gif" alt=""/></li>
							<li><img src="/front/image/main/inner2_area1_tab2_off.gif" alt=""/></li>
							<li><img src="/front/image/main/inner2_area1_tab3_off.gif" alt=""/></li>
							<li><img src="/front/image/main/inner2_area1_tab4_off.gif" alt=""/></li>
							<li><img src="/front/image/main/inner2_area1_tab5_off.gif" alt=""/></li>
						</ul>
						<ul class="cont1">
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="http://www.unimelb.edu.au/" target="_blank"><img src="/front/image/main/m2/1_1.jpg" alt=""/></a>
										<p>멜번대학교</p>
									</li>
									<li class="item">
										<a href="http://www.anu.edu.au/" target="_blank"><img src="/front/image/main/m2/1_2.jpg" alt=""/></a>
										<p>호주국립대학교</p>
									</li>
									<li class="item">
										<a href="http://sydney.edu.au/" target="_blank"><img src="/front/image/main/m2/1_3.jpg" alt=""/></a>
										<p>시드니대학교</p>
									</li>
									<li class="item">
										<a href="http://www.uq.edu.au/" target="_blank"><img src="/front/image/main/m2/1_4.jpg" alt=""/></a>
										<p>퀸즈랜드대학교</p>
									</li>
								</ul>
							</li>
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="http://www.bristol.ac.uk/" target="_blank"><img src="/front/image/main/m2/2_1.jpg" alt=""/></a>
										<p>브리스톨대학교</p>
									</li>
									<li class="item">
										<a href="http://www.gla.ac.uk/" target="_blank"><img src="/front/image/main/m2/2_2.jpg" alt=""/></a>
										<p>글래스고대학교</p>
									</li>
									<li class="item">
										<a href="http://www.st-andrews.ac.uk/" target="_blank"><img src="/front/image/main/m2/2_3.jpg" alt=""/></a>
										<p>세인트앤드루스대학교</p>
									</li>
									<li class="item">
										<a href="http://www.southampton.ac.uk/" target="_blank"><img src="/front/image/main/m2/2_4.jpg" alt=""/></a>
										<p>사우스햄튼대학교</p>
									</li>
								</ul>
							</li>
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="http://www.caltech.edu/" target="_blank"><img src="/front/image/main/m2/3_1.jpg" alt=""/></a>
										<p>캘리포니아 공과대학교</p>
									</li>
									<li class="item">
										<a href="http://www.stanford.edu/" target="_blank"<img src="/front/image/main/m2/3_2.jpg" alt=""/></a>
										<p>스탠포드대학교</p>
									</li>
									<li class="item">
										<a href="http://web.mit.edu/" target="_blank"><img src="/front/image/main/m2/3_3.jpg" alt=""/></a>
										<p>MIT</p>
									</li>
									<li class="item">
										<a href="http://www.harvard.edu/" target="_blank"><img src="/front/image/main/m2/3_4.jpg" alt=""/></a>
										<p>하버드대학교</p>
									</li>
								</ul>
							</li>
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="https://www.utoronto.ca/" target="_blank"><img src="/front/image/main/m2/4_1.jpg" alt=""/></a>
										<p>토론토대학교</p>
									</li>
									<li class="item">
										<a href="http://www.ubc.ca/" target="_blank"><img src="/front/image/main/m2/4_2.jpg" alt=""/></a>
										<p>브리티시콜롬비아대학교</p>
									</li>
									<li class="item">
										<a href="http://www.mcgill.ca/" target="_blank"><img src="/front/image/main/m2/4_3.jpg" alt=""/></a>
										<p>맥길대학교</p>
									</li>
									<li class="item">
										<a href="http://www.mcmaster.ca/" target="_blank"><img src="/front/image/main/m2/4_4.jpg" alt=""/></a>
										<p>맥마스터대학교</p>
									</li>
								</ul>
							</li>
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="https://www.auckland.ac.nz/en.html" target="_blank"><img src="/front/image/main/m2/5_1.jpg" alt=""/></a>
										<p>오클랜드대학교</p>
									</li>
									<li class="item">
										<a href="http://www.canterbury.ac.nz/" target="_blank"><img src="/front/image/main/m2/5_2.jpg" alt=""/></a>
										<p>켄터베리대학교</p>
									</li>
									<li class="item">
										<a href="http://www.aut.ac.nz/" target="_blank"><img src="/front/image/main/m2/5_3.jpg" alt=""/></a>
										<p>오클랜드 공과대학교</p>
									</li>
									<li class="item">
										<a href="http://www.massey.ac.nz/" target="_blank"><img src="/front/image/main/m2/5_4.jpg" alt=""/></a>
										<p>매시대학교</p>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="area2_wrap clfl">
						<div class="title">
							<p><img src="/front/image/main/inner2_area2_tit1.gif" alt=""/></p>
							<a href=""><img src="/front/image/main/inner2_area2_ico1.gif" alt=""/></a>
						</div>
						<ul class="list_wrap">
							<li><a href=""><span>[호주] IDP 에서 소개하는...</span></a><img src="/front/image/main/inner2_area2_ico2.gif" alt=""/></li>
							<li><a href=""><span>[호주] IDP 에서 소개하는...</span></a></li>
							<li><a href=""><span>[호주] IDP 에서 소개하는...</span></a></li>
							<li><a href=""><span>[호주] IDP 에서 소개하는...</span></a></li>
							<li><a href=""><span>[호주] IDP 에서 소개하는...</span></a></li>
							<li><a href=""><span>[호주] IDP 에서 소개하는...</span></a></li>
						</ul>
					</div>
				</div>
				<div class="inner3_wrap clfl">
					<div class="area1_wrap">
						<div class="more"><a href=""><span>More></span></a></div>
						<ul class="clfl">
							<li><a href="/theme1/food_aus.php"><img src="/front/image/main/inner3_area1_btn1_off.png" alt=""/></a></li>
							<li><a href="theme/aviation_aus.php"><img src="/front/image/main/inner3_area1_btn2_off.png" alt=""/></a></li>
							<li><a href="/theme1/art_aus.php"><img src="/front/image/main/inner3_area1_btn3_off.png" alt=""/></a></li>
							<li><a href="/theme1/health_aus.php"><img src="/front/image/main/inner3_area1_btn4_off.png" alt=""/></a></li>
							<li><a href="/theme1/hotel_aus.php"><img src="/front/image/main/inner3_area1_btn5_off.png" alt=""/></a></li>
							<li><a href="/theme1/it_aus.php"><img src="/front/image/main/inner3_area1_btn6_off.png" alt=""/></a></li>
						</ul>
					</div>
					<div class="area2_wrap">
						<a href="/company/info.php"><img src="/front/image/main/inner3_area2_bg.png" alt=""/></a>
					</div>
				</div>
				<div class="inner4_wrap clfl">
					<div class="fl" style="width: 767px;">
						<div class="area1_wrap">
							<div class="title clfl">
								<p><img src="/front/image/main/inner4_area1_tit1.gif" alt=""/></p>
								<ul class="btns ar">
									<li><a href=""><img src="/front/image/main/inner4_area1_btn1.gif"/></a></li>
									<li><a href=""><img src="/front/image/main/inner4_area1_btn2.gif"/></a></li>
								</ul>
							</div>
							<table cellpadding="0" cellspacing="0" class="tb_type1 mt15">
								<colgroup>
									<col width="40%"/>
									<col width="60%"/>
								</colgroup>
								<tr>
									<td class="thumbimage"><img src="http://placehold.it/107x67"/></td>
									<td class="cont">
										<a href="">
											<p class="txt1">IDP 에듀케이션 홈페이지가<br/>새로 오픈하였습니다.</p>
											<p class="txt2">2015-10-10</p>
										</a>
									</td>
								</tr>
								<tr>
									<td class="thumbimage"><img src="http://placehold.it/107x67"/></td>
									<td class="cont">
										<a href="">
											<p class="txt1">IDP 에듀케이션 홈페이지가<br/>새로 오픈하였습니다.</p>
											<p class="txt2">2015-10-10</p>
										</a>
									</td>
								</tr>
							</table>
						</div>
						<div class="area2_wrap">
							<script type="text/javascript" src="/front/js/jquery_ui/jquery-ui.js"></script>
							<link type="text/css" rel="stylesheet" href="/front/js/jquery_ui/jquery-ui.css" />
							<link type="text/css" rel="stylesheet" href="/front/js/jquery_ui/jquery-ui.structure.css" />
							<link type="text/css" rel="stylesheet" href="/front/js/jquery_ui/jquery-ui.theme.css" />
							<div id="datepicker"></div>
							<script>
                                $(function() {
                                    $( "#datepicker" ).datepicker();
                                });
                        	</script>
						</div>
						<div class="area3_wrap">
							<div class="title">
								<p><img src="/front/image/main/inner5_area1_tit1.gif" alt=""/></p>
								<a href=""><img src="/front/image/main/inner2_area2_ico1.gif" alt=""/></a>
							</div>
							<ul class="list_wrap">
								<li><a href=""><span>[호주] 안녕하세요. IDP에서 상담을...</span></a><img src="/front/image/main/inner2_area2_ico2.gif" alt=""/></li>
								<li><a href=""><span>[호주] 안녕하세요. IDP에서 상담을...</span></a></li>
								<li><a href=""><span>[호주] 안녕하세요. IDP에서 상담을...</span></a></li>
							</ul>
						</div>
						<div class="area4_wrap">
							<div class="title">
								<p><img src="/front/image/main/inner5_area2_tit1.gif" alt=""/></p>
								<a href=""><img src="/front/image/main/inner2_area2_ico1.gif" alt=""/></a>
							</div>
							<ul class="list_wrap">
								<li><a href=""><span>[호주] 안녕하세요. IDP에서 상담을 진행하고 유학을 다녀...</span></a><img src="/front/image/main/inner2_area2_ico2.gif" alt=""/></li>
								<li><a href=""><span>[호주] 안녕하세요. IDP에서 상담을 진행하고 유학을 다녀...</span></a></li>
								<li><a href=""><span>[호주] 안녕하세요. IDP에서 상담을 진행하고 유학을 다녀...</span></a></li>
							</ul>
						</div>
					</div>
					<div class="area5_wrap">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.7";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-page" data-href="https://www.facebook.com/idpkorea/?fref=ts" data-tabs="timeline" data-width="222" data-height="449" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/idpkorea/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/idpkorea/?fref=ts">IDP Korea</a></blockquote></div>
					</div>
				</div>
				<div class="inner5_wrap">
					<div class="area1_wrap clfl">
						<p class="tit1"><img src="/front/image/main/inner6_area1_tit1.gif" alt=""/></p>
						<ul class="tab1">
							<li><img src="/front/image/main/inner2_area1_tab1_on.gif" alt=""/></li>
							<li><img src="/front/image/main/inner2_area1_tab2_off.gif" alt=""/></li>
							<li><img src="/front/image/main/inner2_area1_tab3_off.gif" alt=""/></li>
							<li><img src="/front/image/main/inner2_area1_tab4_off.gif" alt=""/></li>
							<li><img src="/front/image/main/inner2_area1_tab5_off.gif" alt=""/></li>
						</ul>
						<div id="popup" style="display: none;">
                            <div class="content" style="width:640px; height: 360px; position: relative; border: 20px solid #fff; "></div>
                        </div>
						<script type="text/javascript" src="/front/js/jquery.bpopup.min.js"></script>
                                    <script type="text/javascript">
                                        $(function  () {
                                          $('.pop_youtube').on('click', function(e) {
                                              e.preventDefault();
                                              var self = $(this) //button
                            , content = $('.content');

                            $('#popup').bPopup({
                                onOpen: function() {
                                    content.html(self.data('bpopup') || '');
                                },
                                onClose: function() {
                                    content.empty();
                                }
                            });
                                          })
                                        });
                        </script>
						<ul class="cont1">
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/1mzbDcoH_Ug?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/1_1.png"/></a>
										<p>The Australian National University</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/ngG3raoqSxY?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/1_2.png"/></a>
										<p>The University of Melbourne</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/QkpvNx5UnPE?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/1_3.png"/></a>
										<p>The University of Sydney</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/XCgV-JSGO6U?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/1_4.png"/></a>
										<p>University of Queensland</p>
									</li>
								</ul>
							</li>
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/iJkyjO_QubE?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/2_1.png"/></a>
										<p>University of Oxford</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/AxQouD_mnuo?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/2_2.png"/></a>
										<p>University of Cambridge</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/mMVeZJtWDMM?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/2_3.png"/></a>
										<p>Imperial College London</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/NvWwpYaEcdg?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/2_4.png"/></a>
										<p>Durham University</p>
									</li>
								</ul>
							</li>
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/4PYLCvaMEWc?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/3_1.png"/></a>
										<p>California Institute of Technology</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/0qHWub21h5c?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/3_2.png"/></a>
										<p>Stanford University</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/7cwUcdpUayQ?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/3_3.png"/></a>
										<p>Columbia University</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/uCJCiuqAjdI?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/3_4.png"/></a>
										<p>New York University (NYU)</p>
									</li>
								</ul>
							</li>
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/i7ejZ8Xr3PM?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/4_1.png"/></a>
										<p>University of Toronto</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/PCgUM1jKtdg?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/4_2.png"/></a>
										<p>University of British Columbia</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/a22aLhJj4j0?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/4_3.png"/></a>
										<p>Centennial College</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/yKN5WvgO5TE?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/4_3.png"/></a>
										<p>EmilyCarr University</p>
									</li>
								</ul>
							</li>
							<li>
								<ul class="item_wrap clfl">
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/zEsDPK-aX9Y?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/5_1.png"/></a>
										<p>University of Otago</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/GIoZGsdgrPo?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/5_2.png"/></a>
										<p>University of Canterbury</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/68WAQx6vSM4?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/5_3.png"/></a>
										<p>University of Auckland</p>
									</li>
									<li class="item">
										<a href="#" class="pop_youtube" data-bpopup="<iframe width='640' height='360' src='http://www.youtube.com/embed/joDZX7ocasc?rel=0' frameborder='0' allowfullscreen></iframe>"><img src="/front/image/main/m1/5_4.png"/></a>
										<p>Victoria University of Wellington</p>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="inner6_wrap">
					<div id="bncarousel" class="flexslider">
						<ul class="slides">
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>
							<li>
								<a href=""><img src="http://placehold.it/183x60"/></a>
							</li>z
						</ul>
					</div>
					<script type="text/javascript">
						$(window).load(function() {
							$('#bncarousel').flexslider({
								animation: "slide",
								directionNav: true,
								controlNav: false,
								animationLoop: true,
								slideshow: false,
								itemWidth: 183,
								itemMargin: 22
							});
						});
					</script>
				</div>
			</div>
		</div>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/tail.php'); ?>
