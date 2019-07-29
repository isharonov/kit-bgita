
//initialize
$('div.tabs:first').show().siblings('div.tabs').hide();
$('ul#avatars li:first').addClass('current').siblings('li').addClass('others');

//click
$('ul#avatars').on('click', 'li', function(){
	$(this).removeClass('others').addClass('current').siblings('li').addClass('others');
	var item = $(this).find('a').attr('href').slice(1),
		tabs = $('div.tabs');

	$.each(tabs, function(){
		if ( $(this).attr('id') === item ){
			$(this).show().siblings('div.tabs').hide();
		}
	});

});