<?php
/* lee los datos del formulario */
echo "Nombre: " . $_GET["nombre"] . "<br>\n";
echo "Correo: " . $_GET["correo"] . "<br>\n";
echo "Mensaje: " . $_GET["mensaje"] . "<br>\n";

/* $to = "pcastello@easdcastello.org";
$subject = "[WEB]";
$txt = $_GET["mensaje"];
$headers = "From: " . $_GET["correo"] . "\r\n";
mail($to, $subject, $txt, $headers); */

//Import PHPMailer classes into
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

//Create a new PHPMailer instance
$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
$mail->isSMTP(); // Send using SMTP
$mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'pcbosca@gmail.com'; // SMTP username
$mail->Password = ''; // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port = 587; // TCP port to connect to

$mail->SMTPOptions = array(
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ],
);

//Recipients
$mail->setFrom('pcbosca@gmail.com', 'Mailer'); // $_GET["correo"]
$mail->addAddress('pcastello@easdcastello.org', 'Pascual Castello'); // Add a recipient

// Content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Here is the subject'; // $_GET["nombre"]
$mail->Body = 'This is the HTML message body <b>in bold!</b>'; // $_GET["mensaje"]
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; // $_GET["mensaje"]

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

?>