<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require 'token.php';
// <a href="lista.php?id_grupo='.$curso['id'].'&id_curso='.$curso['instanceid'].'" class="button" type="button">Ver Grupo </a>
$urlBase= "http://localhost/php_email/formR.php?";
$key = new token();

$token= $key->getToken();

$url = $urlBase.'token='.$token;


function enviarEmail($url){
    $mail = new PHPMailer(true);
$emisor="sicmca.unam@gmail.com";
$receptor="sicmca.unam@gmail.com";
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;//9:00
    $mail->Username='sicmca.unam@gmail.com';
    $mail->Password ='gA$m8vBMYrMk';
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port=587;
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    $mail->setFrom($emisor,'UNAM SICMCA');
    $mail->addAddress($receptor, 'wecondw');
    //$mail->addCC('');

    $mail->isHTML(true);
    $mail->Subject='Recuperar contraseña';
    $mail->Body="<p>esta es una prueba de cambio de contraseña</p> <br><br>".$url;
    $mail->send();
    
    echo 'correo enviado';


} catch (Exception $e) {
    echo 'Mensaje'. $mail->ErrorInfo;
}

}


enviarEmail($url);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
</body>
</html>