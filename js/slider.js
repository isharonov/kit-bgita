$(document).ready(function(){
	
	function Slider(container, pager) {
		this.container = container;
		this.pager = pager.show();
		this.imgWidth = 1000; 
		this.imgsLen = 4;
		this.current = this.imgsLen - 1;
	}

	Slider.prototype.position = function() {
		var indicator = this.pager.find('a').removeClass('selected'),
			cur = this.current;
		$.each( indicator, function(){
			if ( (parseInt($(this).attr('href'))-1) === cur ) {
				$(this).addClass('selected');
			};
		});
	};

	Slider.prototype.transition = function() {
		this.container.animate({
			'margin-left': -( this.current * this.imgWidth )
		});
	};

	Slider.prototype.setCurrent = function( dir ) {
		var pos = this.current;
		pos += ( ~~( dir === 'next' ) || -1 );
		this.current = ( pos < 0 ) ? this.imgsLen - 1 : pos % this.imgsLen;
	};

	//Инициализация
	var slider = new Slider($('div.slider ul'), $('.pagination') );
	slider.transition();
	slider.position();
	
	//автопереход
	var autorun = setInterval(function(){
		slider.setCurrent('next');
		slider.transition();
		slider.position();
	},7000);

	//щелчок по кружку
	slider.pager.find('a').bind('click', function(e){
		e.preventDefault();
		clearInterval(autorun);
		slider.current = parseInt($(this).attr('href'))-1;
		slider.transition();
		slider.position();
	});
});