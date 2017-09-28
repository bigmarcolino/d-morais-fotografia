<?php
	session_start();

	date_default_timezone_set('Etc/UTC');

	require_once("phpmailer/class.phpmailer.php");

	$nome = utf8_decode($_POST["nome"]);
	$email = utf8_decode($_POST["email"]);
	$assunto = utf8_decode($_POST["assunto"]);
	$mensagem = utf8_decode($_POST["mensagem"]);

	$email_dai = ""; // <-- Insira aqui o Gmail do destinatário

	define('GUSER', '');	// <-- Insira aqui o Gmail do remetente
	define('GPWD', '');		// <-- Insira aqui a senha do Gmail

	global $error;
	$mail = new PHPMailer();
	$mail->setLanguage('pt');
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 465;  		
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($email, $nome);
	$mail->Subject = $assunto;
	$mail->Body = $mensagem;
	$mail->AddAddress($email_dai);

	if(!$mail->Send()) {
		$_SESSION['status'] = "falha";
		$_SESSION['erro'] = $mail->ErrorInfo;
		header("Location: ../contato.php");
		exit;
	} else {
		$_SESSION['status'] = "sucesso";
		header("Location: ../contato.php");
		exit;
	}
?> 