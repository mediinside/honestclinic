

function init() {
	console.log('success')
	new SmoothScroll(document, 200, 20)
}

function SmoothScroll(target, speed, smooth) {
	if (target === document)
		target = (document.scrollingElement ||
			document.documentElement ||
			document.body.parentNode ||
			document.body)

	var moving = false
	var pos = target.scrollTop
	var frame = target === document.body &&
		document.documentElement ?
		document.documentElement :
		target

	target.addEventListener('mousewheel', scrolled, {
		passive: false
	})
	target.addEventListener('DOMMouseScroll', scrolled, {
		passive: false
	})

	function scrolled(e) {
		e.preventDefault();

		var delta = normalizeWheelDelta(e)

		pos += -delta * speed
		pos = Math.max(0, Math.min(pos, target.scrollHeight - frame.clientHeight)) // limit scrolling

		if (!moving) update()
	}

	function normalizeWheelDelta(e) {
		if (e.detail) {
			if (e.wheelDelta)
				return e.wheelDelta / e.detail / 40 * (e.detail > 0 ? 1 : -1) // Opera
			else
				return -e.detail / 3 // Firefox
		} else
			return e.wheelDelta / 120 // IE,Safari,Chrome
	}

	function update() {
		moving = true

		var delta = (pos - target.scrollTop) / smooth

		target.scrollTop += delta

		if (Math.abs(delta) > 0.5)
			requestFrame(update)
		else
			moving = false
	}

	var requestFrame = function () {
		return (
			window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.oRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			function (func) {
				window.setTimeout(func, 1000 / 50);
			}
		);
	}()
}

function tabContent(scope, obj) {
	var target = $(obj),
		depName = scope,
		iNum = target.index(),
		scope = target.parent().siblings('.' + depName + '_wrap'),
		child = scope.find('.' + depName + '_content');

	if (target.hasClass('select') != 1) {
		target.parent().find('.btn').removeClass('select');
		target.addClass('select');
	} else {
		return false;
	}
	child.hide();
	child.eq(iNum).fadeIn();
}

function slideToggle(obj) {
	var target = $(obj),
		slideEl = target.siblings('.toggle-con');
	if (target.hasClass('active') != 1) {
		$('.toggle-btn').removeClass('active');
		$('.toggle-con').removeClass('show').stop().slideUp();
		target.addClass('active');
		slideEl.slideToggle();
	} else {
		$('.toggle-btn').removeClass('active');
		$('.toggle-con').removeClass('show').stop().slideUp();
	}
}

function headerFix(state) {
	if (state === true) {
		var e = $('#header, #header_sub'),
			h = e.outerHeight(),
			t = e.offset().top;
		$(window).scroll(function () {
			var s = $(window).scrollTop();
			h = e.outerHeight();
			console.log();
			if (s > t + 100) {
				if ($('#main').length === 0) {
					$('.header-thumb').css('height', h + 'px');
				}
				e.addClass('fixed');
			} else if (s < t + 20) {
				if ($('#main').length === 0) {
					$('.header-thumb').attr('style', '');
				}
				e.removeClass('fixed');
			}
		})
	}
}

function animate(state) {
	if (state === true) {
		$(window).on('scroll', function () {
			var winScroll = $(window).scrollTop() + 100;

			if ($('.ani-fade').length) {
				$('.ani-fade').each(function () {
					var fadeIn = $(this);
					if (winScroll > fadeIn.offset().top - $(window).height() * 0.6 && winScroll < fadeIn.offset().top + fadeIn.outerHeight() / 2) {
						fadeIn.addClass('fade-in');
					} else {
						//fadeIn.removeClass('fade-in');
					}
				});
			}

			if ($('.ani-down-slide').length) {
				$('.ani-down-slide').each(function () {
					var downSlide = $(this);
					if (winScroll > downSlide.offset().top - $(window).height() * 0.6 && winScroll < downSlide.offset().top + downSlide.outerHeight() / 2) {
						console.log('뭐여');
						downSlide.addClass('slide-down');
					} else {
						downSlide.removeClass('slide-down');
					}
				});
			}

			if ($('.ani-up-slide').length) {
				$('.ani-up-slide').each(function () {
					var upSlide = $(this);
					if (winScroll > upSlide.offset().top - $(window).height() * 0.6 && winScroll < upSlide.offset().top + upSlide.outerHeight() / 2) {
						upSlide.addClass('slide-up');
					} else {
						upSlide.removeClass('slide-up');
					}
				});
			}

			if ($('.ani-left-slide').length) {
				$('.ani-left-slide').each(function () {
					var leftSlide = $(this);
					if (winScroll > leftSlide.offset().top - $(window).height() * 0.6 && winScroll < leftSlide.offset().top + leftSlide.outerHeight() / 2) {
						leftSlide.addClass('slide-left');
					} else {
						leftSlide.removeClass('slide-left');
					}
				});
			}

			if ($('.ani-right-slide').length) {
				$('.ani-right-slide').each(function () {
					var rightSlide = $(this);
					if (winScroll > rightSlide.offset().top - $(window).height() * 0.6 && winScroll < rightSlide.offset().top + rightSlide.outerHeight() / 2) {
						rightSlide.addClass('slide-right');
					} else {
						rightSlide.removeClass('slide-right');
					}
				});
			}
		});
	}
}

$(function(){
	animate(true);
});

