<section id="apresentacao" class="apresentacao">
	<div class="center">
		<img src="<?php echo INCLUDE_PATH; ?>Imagens/Carol1.png" />
		<h2>Carolini P. Sanches</h2>
		<p>Sou filha de pais empreendedores e a minha jornada foi recheada de altos e baixos, vivenciei as consequências da ignorância financeira. E de forma natural me envolvi com o tema, busquei entender mais sobre a gestão do dinheiro e no primeiro momento eu me dediquei ao estudo da contabilidade, o curso foi essencial para que eu (aos 15 anos) conectasse causa e efeito no mapa do dinheiro. Nessa idade o empreendedorismo por necessidade também aflorou em mim, mas o sucesso financeiro foi passageiro! Me faltava trato com as pessoas, e em busca de uma solução embarquei no curso de recursos humanos, o que me fez enxergar o ser humano que existe no outro. Também atestei meu interesse genuíno em trabalhar com o dinheiro, e muitos profissionais da área financeira me orientaram a fazer administração de empresas e estudar investimentos de forma complementar, e foi exatamente o que eu fiz, fui certificada ANCORD e me formei em administração. Chegando aqui eu entendi que educação financeira, apesar de estar em alta nas redes sociais, vai além de explicar o que é a Selic, é preciso despertar no outro o senso de Senhor do Dinheiro.</p>
		<div class="clear"></div>
	</div><!--Center-->
</section><!--Apresentacao-->

<section id="servicos" class="servicos">
	<div class="center">
		<h2 class="title">Serviços</h2>
			<div class="w33 left box-servico">
				<h3><i class="fas fa-hand-holding-usd"></i></h3>
				<h4>BPO Financeiro<br>(Terceirização do financeiro)</br></h4>
				<p>Estamos falando em delegar a um agente externo os processos ou alguns processos das atividades financeiras da empresa que antes eram realizados internamente.</p>
				<h5><a href="<?php echo INCLUDE_PATH; ?>BPO">SAIBA MAIS</a></h5>
			</div><!--Box-Servico-->
			<div class="w33 left box-servico">
				<h3><i class="fas fa-chart-line"></i></h3>
				<h4>Consultoria Financeira<br>Empresarial</br></h4>
				<p>Um consultor irá avaliar os números da empresa, de forma imparcial, e mapear os pontos forte e fracos, buscando oportunidades de melhoria para então elaborar um plano estratégico e partir para a ação.</p>
				<h5><a href="<?php echo INCLUDE_PATH; ?>ConsultoriaFinanceiraEmpresarial">SAIBA MAIS</a></h5>
			</div><!--Box-Servico-->
			<div class="w33 left box-servico">
				<h3><i class="far fa-credit-card"></i></h3>
				<h4>Consultoria Financeira<br>Pessoal</br></h4>
				<p>O objetivo é te ensinar a cuidar melhor do seu dinheiro, vamos descobrir para onde vai o seu dinheiro e encontrar uma solução para que sobre salário no fim do mês e não o contrário.</p>
				<h5><a href="<?php echo INCLUDE_PATH; ?>ConsultoriaFinanceiraPessoal">SAIBA MAIS</a></h5>
			</div><!--Box-Servico-->
			<div class="w33 left box-servico">
				<h3><i class="fas fa-user-graduate"></i></h3>
				<h4>Treinamento e Desenvolvimento de Pessoas</h4>
				<p>Para novos funcionários do departamento financeiro, o treinamento é online e ao vivo, utilizando o sistema da empresa contratante. O objetivo é desenvolver a visão estratégica nos trabalhadores.</p>
				<h5><a href="<?php echo INCLUDE_PATH; ?>Treinamento">SAIBA MAIS</a></h5>
			</div><!--Box-Servico-->
			<div class="w33 left box-servico">
				<h3><i class="fas fa-project-diagram"></i></h3>
				<h4>Implantação do Departamento Financeiro</h4>
				<p>Vamos construir o departamento dentro da sua empresa, desenhar o mapa do dinheiro e os processos para identificar como ele se relaciona com as outras áreas da empresa e criar tudo sob medida.</p>
				<h5><a href="<?php echo INCLUDE_PATH; ?>Implantacao">SAIBA MAIS</a></h5>
			</div><!--Box-Servico-->
			<div class="w33 left box-servico">
				<h3><i class="fas fa-user-tie"></i></h3>
				<h4>Planejamento Patrimonial<br>(Investimentos)</br></h4>
				<p>Este é o segundo passo para quem já sabe lidar com o próprio dinheiro e agora quer desvendar o mercado dos investimentos, vamos nos planejar para a realização de sonhos e também para a aposentadoria.</p>
				<h5><a href="<?php echo INCLUDE_PATH; ?>Investimentos">SAIBA MAIS</a></h5>
			</div><!--Box-Servico-->
		<div class="clear"></div><!--Clear-->
	</div><!--Center-->
</section><!--Servicos-->

<section class="banner-container">
		<div class="overlay"></div><!--Overlay-->
		<div class="center">
			<div class="form">
			<h1 class="frase">"Acredito que a educação financeira levará o Brasil para outro patamar, e é por isso que eu estou disponibilizando de forma gratuita uma planilha em excel para que você possa começar a controlar as suas finanças pessoais e consiga identificar para onde está indo o seu salário!" — Carolini P. Sanches</h1>
			<h1>Preencha este formulário e receba no seu e-mail o link para baixá-la!!</h1>
			<img src="Imagens/banner-form.jpg">
			<form method="post" action="<?php echo INCLUDE_PATH; ?>ajax/formularios.php">
				<h2>Qual o seu nome?</h2>
				<input type="text" name="nome" required />
				<h2>Qual o seu e-mail?</h2>
				<input type="email" name="email" required />
				<input type="hidden" name="identificador" value="form_home">
				<input type="submit" name="acao" value="Cadastrar!" />
			</form>
		</div><!--form-->
		</div><!--Center-->
	</section><!--BANNER CONTAINER-->

