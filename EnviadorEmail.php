<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include_once './email/PHPMailer.php';
include_once './email/POP3.php';
include_once './email/SMTP.php';
include_once './email/OAuth.php';
include_once './email/Exception.php';


use email\PHPMailer as PHPMailer;
use email\SMTP as SMTP;
use email\Exception as Exception;
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

$email = $_GET['email'];
$nome = $_GET['nome'];
$codigo = $_GET['codigo'];


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'naorespondaprocseletivo@gmail.com';                     // SMTP username
    $mail->Password   = 'solectron';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('naorespondaprocseletivo@gmail.com', 'Processo seletivo');
    $mail->addAddress($email, $nome);     // Add a recipient Repetir essa linha para outro destinatario
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Prefeitura Municipal de Olinda - Processo seletivo';
    $mail->Body    = utf8_decode('<p>Parabéns!</p><p>Seu cadastro foi realizado com sucesso!</p><br><p>Seu código de cadastro é: '.$codigo.'</p>');
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header('Location: cadastroPositivo.php?id='.$id);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}