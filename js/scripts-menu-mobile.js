$(function(){
	//Aqui vai todo nosso código de javascript.
	$('nav.mobile').click(function(){
		//Aqui é o que vai acontecer quando clicarmos na nav.mobile!
		var listaMenu = $('nav.mobile ul');

		/*
		//Abrir menu através do fadeIn:
		if(listaMenu.is(':hidden') == true)
			listaMenu.fadeIn();
		else
			listaMenu.fadeOut();
		*/

		/*
		//Abrir ou fechar o menu sem efeitos:
		if(listaMenu.is(':hidden') == true)
			listaMenu.show();
		else
			listaMenu.hide();
		*/

		/*
		//Abrir menu com slideToggle:
		listaMenu.slideToggle();
		*/


		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile i');
			//var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fas fa-bars');
			icone.addClass('fas fa-times');
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile i');
			icone.removeClass('fas fa-times');
			icone.addClass('fas fa-bars');
			listaMenu.slideToggle();
		}
		
	})
})