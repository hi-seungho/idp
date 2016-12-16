$(function() {
	// 퀵메뉴
	$(window).scroll(function(){
		if(topPos=$(window).scrollTop() > 390){
			var topPos=$(window).scrollTop()+50;
			$('#quickmenu').stop().animate({top:topPos+"px"},800);
		} else {
			$('#quickmenu').stop().animate({top: '390px'},800);
		}
	});

	//상단 배너 닫기 버튼
	$(document).on('click', '#banner_btn_on',function() {
		$('#header .top_banner').animate({
			marginTop : '-130'
		})
		// $(this).css('display', 'none');
		$(this).find('img').attr("src", "/front/image/common/main/btn_top_banner_on.png");
		$(this).attr('id', 'banner_btn_off');
	});

	$(document).on('click', '#banner_btn_off',function() {
		$('#header .top_banner').animate({
			marginTop : '0'
		})
		// $(this).css('display', 'none');
		$(this).find('img').attr("src", "/front/image/common/main/btn_top_banner_close.png");
		$(this).attr('id', 'banner_btn_on');
	});

	/*$('.inner1_wrap .area1_wrap ul.tab1 li').click(function() {
	 imgReplace($('.inner1_wrap .area1_wrap ul.tab1 li').find('img'), 'on');
	 imgReplace($(this).find('img'), 'off');
	 })*/

	$('.inner1_wrap .area1_wrap ul.tab1 li').mouseover(function() {
		for (var i = 0; i < 6; i++) {
			$('.inner1_wrap .area1_wrap ul.tab1 li:eq(' + i + ')>img').attr("src", "/front/image/main/area1_tab" + (i + 1) + "_off.gif");
		}
		$('.inner1_wrap .area1_wrap ul.tab1 li:eq(' + $(this).index() + ')>img').attr("src", "/front/image/main/area1_tab" + ($(this).index() + 1) + "_on.gif");
		$('.inner1_wrap .area1_wrap ul.cont1 li a>img').attr("src", "/front/image/main/area1_img" + ($(this).index() + 1) + ".jpg");
		$('.inner1_wrap .area1_wrap ul.cont1 li').css('z-index','1');
		$('.inner1_wrap .area1_wrap ul.cont1 li:nth-child(' + ($(this).index() + 1) +')').css('z-index','2');
	});

	$('.inner2_wrap .area1_wrap ul.tab1 li').mouseover(function() {
		for (var i = 0; i < 6; i++) {
			$('.inner2_wrap .area1_wrap ul.tab1 li:eq(' + i + ')>img').attr("src", "/front/image/main/inner2_area1_tab" + (i + 1) + "_off.gif");
		}
		$('.inner2_wrap .area1_wrap ul.tab1 li:eq(' + $(this).index() + ')>img').attr("src", "/front/image/main/inner2_area1_tab" + ($(this).index() + 1) + "_on.gif");
		$('.inner2_wrap .area1_wrap ul.cont1>li').css('display','none');
		$('.inner2_wrap .area1_wrap ul.cont1>li:nth-child(' + ($(this).index() + 1) + ')').css('display','block');
	});

	$('.inner3_wrap .area1_wrap ul li img').mouseover(function(){
		imgReplace($(this), 'off');
	});
	$('.inner3_wrap .area1_wrap ul li img').mouseout(function(){
		imgReplace($(this), 'on');
	});

	$('.inner5_wrap .area1_wrap ul.tab1 li').mouseover(function() {
		for (var i = 0; i < 6; i++) {
			$('.inner5_wrap .area1_wrap ul.tab1 li:eq(' + i + ')>img').attr("src", "/front/image/main/inner2_area1_tab" + (i + 1) + "_off.gif");
		}
		$('.inner5_wrap .area1_wrap ul.tab1 li:eq(' + $(this).index() + ')>img').attr("src", "/front/image/main/inner2_area1_tab" + ($(this).index() + 1) + "_on.gif");
		$('.inner5_wrap .area1_wrap ul.cont1>li').css('display','none');
		$('.inner5_wrap .area1_wrap ul.cont1>li:nth-child(' + ($(this).index() + 1) + ')').css('display','block');
	});

	/* lnb */
	/* 각페이지에 변수 설정 */
	//var dep1 = 1;
	//var dep2 = 2;

	$('#lnb>ul>li>p.dep1').click(function(){
		$('#lnb>ul>li>p.dep1').parent().find('ul.dep2').slideUp();
		$(this).parent().find('ul.dep2').stop().slideDown();
	});
	$('#lnb>ul>li.m'+ dep1 + '>p.dep1').addClass('focus');
	$('#lnb>ul>li.m'+ dep1 + '>p.dep1').parent().find('ul.dep2').slideDown();
	$('#lnb>ul>li.m'+ dep1 + '>p.dep1').parent().find('ul.dep2>li:nth-child('+ dep2 +')').addClass('focus');

	/* 스크롤 */
	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});

	/* public 페이지 게시판 */
	$('.public_board_wrap .tab_wrap li').click(function(){
		$('.tb_type4').css('display','none');
		for(var i = 0; i < 4; i++){
			$('.public_board_wrap .tab_wrap li:eq(' + i + ')>img').attr("src", "/front/image/aus/public/btn" + (i + 1) + "_off.gif");
			$('.public_board_wrap .tab_wrap li:eq(' + $(this).index() + ')>img').attr("src", "/front/image/aus/public/btn" + ($(this).index() + 1) + "_on.gif");
			$('#tb' + ($(this).index()+1)).css('display','table');
		}
	});
});

/*  image file name change */
function imgReplace(obj, current) {
	switch (current) {
	case 'on' :
		obj.attr('src', obj.attr('src').replace('_on.', '_off.'));
		break;
	case 'off' :
		obj.attr('src', obj.attr('src').replace('_off.', '_on.'));
		break;
	}
};

/* 개인정보 취급방침 */
function policy() {
	$(".policy").load("/include/policy.html");
}

function terms() {
	$(".terms").load("/include/terms.html");
}
