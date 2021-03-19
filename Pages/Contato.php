<div class="contato-container">
	<div class="center">
		<h1>Entre em contato:</h1>
		<form method="post" action="<?php echo INCLUDE_PATH; ?>ajax/formularios.php">
			<input required type="text" name="nome" placeholder="Nome...">
			<div></div>
			<input required type="email" name="email" placeholder="E-mail...">
			<div></div>
			<input required type="text" name="telefone" placeholder="Telefone...">
			<div></div>
			<textarea required name="mensagem" placeholder="Sua mensagem..."></textarea>
			<div></div>
			<input type="hidden" name="identificador" value="form_contato">
			<div></div>
			<input type="submit" name="acao" value="Enviar!">
		</form>

	</div><!--Center-->
</div><!--Contato-Container-->