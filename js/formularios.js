$(function(){
	$('body').on('submit', 'form', function(event) {
		event.preventDefault();
		var form = $(this);
		var include_path = 'http://localhost/CarolME_Local/';
		$.ajax({
			beforeSend: function(){
				$('.overlay-loading').fadeIn();
			},
			url: include_path+'ajax/formularios.php',
			method: 'post',
			dataType: 'json',
			data: form.serialize()
		}).done(function(data){
			if(data.sucesso){
				//console.log("E-mail enviado com sucesso");
				$('.overlay-loading').fadeOut();
				$('.sucesso').fadeIn();
				setTimeout(function(){
					$('.sucesso').fadeOut();
				},3000)
			}else{
				//console.log("Ocorreu algum erro");
				$('.overlay-loading').fadeOut();
				$('.erro').fadeIn();
				setTimeout(function(){
					$('.erro').fadeOut();
				},3000)
			}
		});
		return false;
	})
});