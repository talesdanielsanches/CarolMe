<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require '../composer/vendor/autoload.php';

	class Email{

		private $mailer;

		function __construct($host,$username,$senha,$name){



		$this->mailer = new PHPMailer;

		$this->mailer->IsSMTP(); // enable SMTP
		$this->mailer->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
		$this->mailer->SMTPAuth = true; // authentication enabled
		$this->mailer->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$this->mailer->Host = $host;
		$this->mailer->Port = 465; // or 587
		$this->mailer->IsHTML(true);
		$this->mailer->Username = $username;
		$this->mailer->Password = $senha;
		$this->mailer->SetFrom($username);
		$this->mailer->CharSet = 'UTF-8';
		}

		public function addAddress($email,$nome){
			$this->mailer->AddAddress($email,$nome);
		}

		public function formatarEmail($info){
			$this->mailer->Subject = $info['assunto'];
			$this->mailer->Body = $info['corpo'];
		}

		public function enviarEmail(){
			if($this->mailer->send()){
				return true;
			}else{
				return false;
			}
		}
	}
	
?>