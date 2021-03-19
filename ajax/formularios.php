<?php

	include('../config.php');

	$nomeForm = addslashes($_POST['nome']);

	$emailForm = addslashes($_POST['email']);

	$data = array();

	$assunto = 'Novo contato no site!';

	$corpo = '';

	foreach ($_POST as $key => $value) {

		$corpo.=ucfirst($key).": ".$value;

		$corpo.='<br>';

	}



	$corpoForm_home = 'Olá, obrigado por me acompanhar e se interessar em cuidar melhor do seu dinheiro.<br>'.'<br>Segue o link para encontrar e baixar a planilha que vai te ajudar no controle do seu dinheiro e dar condições de visualizar melhor seus gastos com coisas que você considera desenecessária e também seus investimentos pessoais: '.'https://drive.google.com/file/d/1fSMQb5kD-8oTUfk1FltkyoptjRVutVzb/view?usp=drivesd<br>'.'<br>Obrigado por acessar o site, para mais conteúdo relacionado à finanças, me encontre nas redes sociais...<br>'.'<br>Comece pelo insta ! @carolparrasanches';

	$corpoForm_contato = '<br>Obrigado por entrar em contato, recebi sua mensagem! Assim que analisar entrarei em contato para te explicar melhor como funciona cada parte do processo e tirar todas as suas dúvidas. Prometo que não vou demorar !!<br>'.'<br>Para mais conteúdo relacionado à finanças, me encontre nas redes sociais...<br>'.'<br>Comece pelo insta ! @carolparrasanches';



	$info = array('assunto' => $assunto,'corpo' => $corpo);

	$mail = new Email('servidor','email1','senha1','nome1');

	$mail->addAddress('email2','nome2');

	$mail->formatarEmail($info);

		if($mail->enviarEmail()){

			$data['sucesso'] = true;

			if($_POST['identificador'] == 'form_home'){

			$info = array('assunto' => 'Links para download - CarolME','corpo' => $corpoForm_home);

			$mail = new Email('servidor','email1','senha1','nome1');

			$mail->addAddress($emailForm,$nomeForm);

			$mail->formatarEmail($info);

			$mail->enviarEmail();

		}elseif($_POST['identificador'] == 'form_contato'){

			$info = array('assunto' => 'Contato - CarolME','corpo' => 'Olá '.$nomeForm.' !!<br>'.$corpoForm_contato);

			$mail = new Email('servidor','email1','senha1','nome1');

			$mail->addAddress($emailForm,$nomeForm);

			$mail->formatarEmail($info);

			$mail->enviarEmail();

		};

		}else{

			$data['erro'] = true;

	}

	

	die(json_encode($data));

?>