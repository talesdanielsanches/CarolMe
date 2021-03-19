	if ($('target').length > 0){
		//O elemento existe, portanto precisamos dar scroll em algum elemento.
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll});
	}
