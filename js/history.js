	//Выпускники
	
	$.fn.fadeSlideToggle = function(speed, fn) {
		
		return $(this).animate({
			'opacity': 'toggle',
			'height': 'toggle'
		}, speed || 400, function() {
			$.isFunction(fn) && fn.call(this);
		})
	};
	$('.graduate').hide();
	$('.trigger').on('click', function(e){
		e.preventDefault();
		$(this).next('table').fadeSlideToggle(500);
	});

	//timeMachine
	var timeMachine = $('#timeMachine');
	timeMachine.on('click', 'a', function(e){
		e.preventDefault();
		timeMachine.find('a').removeClass('active');
		var anch = $(this).attr('href'),
			self = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anch).offset().top
		}, 1000, function() {
			self.addClass('active');
		});
	});