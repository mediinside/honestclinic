
$(document).ready(function(){
	//햄버거 버튼
	$(".menu-button").on("click",function(e){
		// e.preventdefault();
		// $("#gnb-sub dl").removeAttr("class");
        $(this).toggleClass("cross");
        // $("#wrap").toggleClass("on");
		$("nav, #quick").toggleClass('on');
		$("header").toggleClass('active');
    });
});


$(window).on("scroll resize",function(){
	var window_w = $(window).width();
	var window_h = $(window).scrollTop();
	console.log(window_h);

	//모바일 붙박이 헤더
	if(window_h > 65 && window_w < 769){
		$("header").addClass('on').stop().animate({
			top:0
		},1);
	}else {
		$("header").removeClass('on').removeAttr('style')
	};
	// if(window_h > 122){
	// 	$("#quick").css('top',0);
	// }else{
	// 	$("#quick").css('top',122);
	// }
});