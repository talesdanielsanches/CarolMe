/*$(function(){

	var curSlide = 0;

	var maxSlide = $('.depoimentos-single').length - 1;

	var delay = 3;

	initSlider();
	changeSlide();

	function initSlider(){
		$('.depoimentos-single').hide();
		$('.depoimentos-single').eq(0).show();
		for(var i = 0; i < maxSlide; i++){
			var content = $('.bullets').html();
			if (i == 0) 
				content+='<span class="active-slider"></span>';
			else
				content+='<span></span>';
			$('.bullets').html(content);
		}
	}

	function changeSlide(){
		setInterval(function(){
			$('.depoimentos-single').eq(curSlide).stop().fadeOut(1000);
			curSlide++;
			if (curSlide > maxSlide)
				curSlide = 0;
			$('.depoimentos-single').eq(curSlide).stop().fadeIn(1000);
			//Trocar bullets da navegação do slider
			$('.bullets span').removeClass('active-slider');
			$('.bullets span').eq(curSlide).addClass('active-slider');
		},delay * 1000);
	}

	$('body').on('click','.bullets span',function(){
		var currentBullet = $(this);
		$('.depoimentos-single').eq(curSlide).stop().fadeOut(1000);
		curSlide = currentBullet.index();
		$('.depoimentos-single').eq(curSlide).stop().fadeIn(1000);
		$('.bullets span').removeClass('active-slider');
		currentBullet.addClass('active-slider');
	});
})*/