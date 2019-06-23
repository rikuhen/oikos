<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once  $_SERVER['DOCUMENT_ROOT'] . '/lib/PHPMailer/src/PHPMailer.php';
require_once  $_SERVER['DOCUMENT_ROOT'] . '/lib/PHPMailer/src/Exception.php';
require_once  $_SERVER['DOCUMENT_ROOT'] . '/lib/PHPMailer/src/SMTP.php';

$data = $_POST;

$mail = new PHPMailer(true);


try {

    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.thejlmedia.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'testoikos@thejlmedia.com';             // SMTP username
    $mail->Password   = 'ZA5Z[gidgB.;';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to


    $mail->setFrom($data['email'],$data['name']);
    $mail->addAddress('p.castillo@jardinescuelaoikos.com');
    $mail->isHTML(true);
    $mail->Subject= 'Contacto desde La web Oikos';
    $mail->Body = " Nombre: " . $data['name'] . " <br> ";
    $mail->Body.= " Dirección: " . $data['address'] . " <br> ";
    $mail->Body.= " Teléfono: " . $data['phone'] . " <br> ";
    $mail->Body.= " Ciudad: " . $data['city'] . " <br> ";
    $mail->Body.= " Mensaje: " . $data['message'] . " <br> ";

    $mail->send();

    echo "Done";

    die();

} catch (Exception $e) { 

    var_dump($e->getMessage());
    die();

}
