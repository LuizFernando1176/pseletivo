<?php
include_once './email/PHPMailer.php';
include_once './email/POP3.php';
include_once './email/SMTP.php';
include_once './email/OAuth.php';
include_once './email/Exception.php';
include_once './util/antiInjection.php';


use email\PHPMailer as PHPMailer;
use email\SMTP as SMTP;
use email\Exception as Exception;

$id = anti_injection($_GET['id']);
$email = anti_injection($_GET['email']);
$nome = anti_injection($_GET['nome']);
$codigo = anti_injection($_GET['codigo']);


// passando 'true' habilita exceÃ§Ãµes
$mail = new PHPMailer(true);

try {
    //ConfiguraÃ§Ãµes de servidor
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Habilita uma saÃ­da de debug verbose
    $mail->isSMTP();                                            // Enviar usando SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Configura o servidor SMTP
    $mail->SMTPAuth   = true;                                   // Habilita AutenticaÃ§Ã£o SMTP
    $mail->Username   = 'naorespondaprocseletivo@gmail.com';    // nome do usuÃ¡rio SMTP
    $mail->Password   = 'solectron';                            // senha SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Habilita TLS. TambÃ©m aceita `PHPMailer::ENCRYPTION_SMTPS`
    $mail->Port       = 587;                                    // Porta TCP

    //DestinatÃ¡rio
    $mail->setFrom('naorespondaprocseletivo@gmail.com', 'Processo seletivo');
    $mail->addAddress($email, $nome);                           // Adiciona um destinatÃ¡rio. Repetir essa linha para outro destinatÃ¡rio.
    
    // Anexos
    //$mail->addAttachment('/var/tmp/file.tar.gz');             // Adiciona anexo
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        // Nome alternativo do arquivo (opcional)

    // Corpo
    $mail->isHTML(true);                                        // Configura o conteÃºdo do email para o formato HTML
    $mail->Subject = 'Prefeitura Municipal de Olinda - Processo seletivo';
    $mail->Body    = utf8_decode('<center><h2>Sistema de Cadastro de Processo seletivo da Perfeitura Municipal de Olinda</h2></center>'
            . '<p>Esta Ã© uma mensagem automÃ¡tica.</p><br><br>'
            . '<h4>ParabÃ©ns, '.$nome.'!</h4>'
            . '<p>Seu cadastro foi realizado com sucesso!</p>'
            . '<p>Seu cÃ³digo de cadastro Ã©: <strong>'.$codigo.'</strong></p>'
            . '<br><br><br>'
            . '<hr>'
            . '<center><h6>Perfeitura Municipal de Olinda</h6></center>');
    //$mail->AltBody = 'Corpo do e-mail em texto puro para clientes que nÃ£o usam HTML';

    $mail->send();
    echo 'Mensagem enviada';
    header('Location: cadastroPositivo.php?id='.$id);
} catch (Exception $e) {
    echo "Mensagem nÃ£o pode ser enviada. Erro do e-mail: {$mail->ErrorInfo}";
}