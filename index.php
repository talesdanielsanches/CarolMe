<?php include('config.php'); ?>



<!DOCTYPE html>

<html>

<head>

	<title>Carol ME</title>

	<link href="<?php echo INCLUDE_PATH; ?>Estilo/all.css" rel="stylesheet"/>

	<link href="<?php echo INCLUDE_PATH; ?>Estilo/style.css" rel="stylesheet"/>

	<link rel="preconnect" href="https://fonts.gstatic.com"/>

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta name="keywords" content="consultoria,investimentos,consultoria financeira,fluxo de caixa,financa empresarial,financas empresarial,contas a pagar,contas a receber,patrimonio,dinheiro,consultoria empresarial,consultoria pessoal,departamento financeiro,treinamento financeiro,implantacao do departamento financeiro,desenvolvimento,desenvolvimento pessoal,desenvolvimento empresarial,controle financeiro,controladoria,como organizar meu financeiro,organizacao do financeiro,como investir,como viver de renda,como guardar dinheiro,bpo financeiro, terceirizacao do financeiro,consultoria financeira empresarial,consultoria financeira pessoal,treinamento e desenvolvimento de pessoas,planejamento patrimonial,carolini parra sanches,carol parra,carol sanches,carol p. sanches,carolini,artigos sobre departamento financeiro,artigos,artigo,artigo financeiro,artigo sobre departamento financeiro,artigos financeiro,consultoria financeira em rio preto,consultoria em rio preto,carolini me"/>	

	<meta name="description" content="Consultoria financeira realizada para empresas e pessoas que precisam de ajuda para criar ou melhorar o departamento financeiro, além de propagar o desenvolvimento pessoal no âmbito monotário. Dentre os servicos disponibilizados por Carol estão BPO Financeiro (Terceirizacao do financeiro), Consultoria Financeira Empresarial, Consultoria Financeira Pessoal, Treinamento e Desenvolvimento de Pessoas, Implantacao do Departamento Financeiro e Planejamento Patrimonial."/>

	<meta charset="utf-8"/>

	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />

</head>



<body>

	<?php 

		$url = isset($_GET['url']) ? $_GET['url'] : 'Home';

		switch ($url) {

			case 'Servicos':

				echo '<target target="servicos" />';

				break;


			case 'Depoimentos':

				echo '<target target="depoimentos" />';

				break;
		}

	?>

		<div class="sucesso"><i class="fas fa-check"></i> Dados enviados com sucesso!</div><!--Sucesso-->

		<div class="erro"><i class="fas fa-times"></i> Erro ao enviar dados!</div><!--Erro-->

		<div class="overlay-loading">

			<img src="<?php echo INCLUDE_PATH; ?>Imagens/ajax-loader.gif" />

		</div><!--OVERLAY-LOADING-->



		<header>

			<div class="center">

				<div class="logo left">

					<a href="<?php echo INCLUDE_PATH; ?>Home" ><img src="<?php echo INCLUDE_PATH; ?>Imagens/Logo.png"/></a>

				</div><!--LOGO-->

				<nav class="desktop right">

					<ul>

						<li><a href="<?php echo INCLUDE_PATH; ?>Servicos">Serviços</a></li>

						<li><a href="https://www.linkedin.com/in/carolparraconsultoria/detail/recent-activity/posts/" target="_blank">Artigos</a></li>

						<li><a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>

						<li><a href="https://www.instagram.com/carolparrasanches/" target="_blank"><i id="icon"class="fab fa-instagram"></i></a></li>

						<li><a href="https://www.facebook.com/carolparrasanches" target="_blank"><i id="icon" class="fab fa-facebook-square"></i></a></li>

						<li><a href="https://www.linkedin.com/in/carolparraconsultoria/" target="_blank"><i id="icon" class="fab fa-linkedin"></i></a></li>

						<li><a href="https://www.youtube.com/channel/UC06iGnZ0FSzfg0REKGOkOaw/featured" target="_blank"><i id="icon" class="fab fa-youtube"></i></a></li>

					</ul>

				</nav>

				<nav class="mobile right">

					<div class="botao-menu-mobile">

						<i class="fas fa-bars"></i>

					</div>

					<ul>

						<li><a href="<?php echo INCLUDE_PATH; ?>Servicos">Serviços</a></li>

						<li><a href="https://www.linkedin.com/in/carolparraconsultoria/detail/recent-activity/posts/" target="_blank">Artigos</a></li>

						<li><a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>

					</ul>

				</nav>

				<div class="clear"></div><!--Clear-->

			</div><!--Center-->

		</header>



		<?php



		if (file_exists('Pages/'.$url.'.php')) {

			include('Pages/'.$url.'.php');

		}else{

			if($url != 'Servicos' && $url != 'Depoimentos' && $url != 'Contato' && $url != 'BPO' && $url != 'ConsultoriaFinanceiraEmpresarial' && $url != 'ConsultoriaFinanceiraPessoal' && $url != 'Implantacao' && $url != 'Treinamento' && $url != 'Investimentos'){

			$paginaErro = true;

			include('Pages/Erro-404.php');

		}else{

			include('Pages/Home.php');

			}

		}

		?>



		<footer <?php if(isset($paginaErro) && $paginaErro == true || $url == 'Contato') echo 'class="fixed"'; ?> >

			<div class="center">

				<p><img src="<?php echo INCLUDE_PATH; ?>Imagens/Logo-CarolME.png"/><br>Desenvolvido com <i class="fas fa-heart"></i> Todos os diretos reservados.</br></p>

				<ul>

					<a href="https://www.instagram.com/carolparrasanches/" target="_blank"><i class="fab fa-instagram"></i></a>

					<a href="https://www.facebook.com/carolparrasanches" target="_blank"><i class="fab fa-facebook-square"></i></a>

					<a href="https://www.linkedin.com/in/carolparraconsultoria/" target="_blank"><i class="fab fa-linkedin"></i></a>

					<a href="https://www.youtube.com/channel/UC06iGnZ0FSzfg0REKGOkOaw/featured" target="_blank"><i class="fab fa-youtube"></i></a>

				</ul>

			</div><!--Center-->

		</footer>

		<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>

		<script src="<?php echo INCLUDE_PATH; ?>js/scripts-menu-mobile.js"></script>

		<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

		<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>

</body>

</html>