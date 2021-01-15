
$(document).ready(function(){
	var swiper = new Swiper('#banner .swiper-container', {
		centeredSlides: true,
		slidesPerView: 'auto',
		initialSlide: 0,
		loop: true,
		grabCursor: false,
		observer: true,
		pagination: {
			clickable: true,
			el: '#banner .swiper-pagination',
			type: 'bullets'
		},
		speed: 800,
		navigation: {
			nextEl: '#banner .swiper-button-next',
			prevEl: '#banner .swiper-button-prev'
		},
		autoplay: {
			delay: 2500,
			reverseDirection: false,
			disableOnInteraction: false
		}
	});
	var swiper = new Swiper('#main-banner .swiper-container', {
		slidesPerView: 'auto',
		initialSlide: 0,
		loop: true,
		grabCursor: false,
		speed: 800,
		autoplay: {
			delay: 2500,
			reverseDirection: false,
			disableOnInteraction: false
		},
		pagination: {
			el: '#main-banner .swiper-pagination',
			type: 'fraction',
		},
		navigation: {
			nextEl: '#main-banner .swiper-button-next',
			prevEl: '#main-banner .swiper-button-prev',
		},
	});

	var swiper = new Swiper('#mainTv .swiper-container', {
		slidesPerView: 6,
		slidesPerColumn: 2,
		slidesPerColumnFill: 'row',
		spaceBetween: 27,
		pagination: {
			el: '#mainTv .swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '#mainTv .swiper-button-next',
			prevEl: '#mainTv .swiper-button-prev',
		},
		breakpoints: {
			320: {
				slidesPerView: 2,
				slidesPerColumn: 3,
			},
			768: {
				slidesPerView: 3,
				slidesPerColumn: 2,
			},
			1024: {
				slidesPerView: 4,
				slidesPerColumn: 2,
			},
			1200: {
				slidesPerView: 5,
				slidesPerColumn: 2,
			},
			1400: {
				slidesPerView: 6,
				slidesPerColumn: 2,
			}
		}
	});

	var swiper = new Swiper('#viveve .swiper-container', {
		slidesPerView: 3.5,
		spaceBetween: 60,
		loop: true,
		speed: 800,
		// autoplay: {
		// 	delay: 2500,
		// 	reverseDirection: false,
		// 	disableOnInteraction: false
		// },
		breakpoints: {
			320: {
				slidesPerView: 2,
				spaceBetween: 60,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
			1024: {
				slidesPerView: 4,
				spaceBetween: 40,
			},
			1430: {
				slidesPerView: 3.5,
				spaceBetween: 60,
			}
		}
	});
	//햄버거 버튼
	$(".menu-button").on("click",function(e){
		// e.preventdefault();
		// $("#gnb-sub dl").removeAttr("class");
        $(this).toggleClass("cross");
        // $("#wrap").toggleClass("on");
		$("nav, #quick").toggleClass('on');
		$("header").toggleClass('active');
	});
	
	//이벤트 배너
	$(".banner_open_button").on("click", function () {
		$('body').toggleClass('is-banner-active');
	});
	$(".banner_close_button").on("click", function () {
		$('body').removeClass('is-banner-active');
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
});
$(window).on('load resize', function () {
	setTimeout(function () {
		$("#viveve .swiper-container .bg").css({
			width: $("#viveve .swiper-container .swiper-slide-active").outerWidth(),
			height: $("#viveve .swiper-container .swiper-slide-active").outerHeight()
		});
	}, 1000);
});