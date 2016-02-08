<?php
# site http://phpmailer.worxware.com/
# fazer download no github
# salvar na raiz e renomear para phpmailer
# alterar __autoload


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
function __autoload($class){
	$class= strtolower($class);
	require_once("phpmailer/class.".$class.".php");
	
}

// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

# para o gmail
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
$mail->Port = 587;
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'email@gmail.com'; // Usuário do servidor SMTP
$mail->Password = '123'; // Senha do servidor SMTP


// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "email@gmail.com"; // Seu e-mail
$mail->FromName = "Seu nome"; // Seu nome
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('fulano@gmail.com', 'Fulano da Silva');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>!  :)";
$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
	echo "E-mail enviado com sucesso!";
} else {
	echo "Não foi possível enviar o e-mail.";
	echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
