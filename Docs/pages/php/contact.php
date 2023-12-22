<?php

require_once __DIR__ . './../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . './../vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Get reCAPTCHA secret key from environment variable --> 
// Pas pu le faire car pas de variables d'environnement disponibles
$recaptcha_secret_key = "6LeK6DkpAAAAAFtqZa4mfLO9NEegw9uOEALANwqP";

// Validation reCAPTCHA réponse
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

$recaptcha_verify_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_data = [
    'secret'   => $recaptcha_secret_key,
    'response' => $recaptcha_response,
];

$recaptcha_options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($recaptcha_data),
    ],
];

$recaptcha_context = stream_context_create($recaptcha_options);
$recaptcha_result = file_get_contents($recaptcha_verify_url, false, $recaptcha_context);
$recaptcha_result_data = json_decode($recaptcha_result, true);

// Proceed with sending email if reCAPTCHA verification is successful


// PHPMAILER

if (!empty($_POST)) {
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;   // Enable verbose debug output
        $mail->isSMTP();                         // Send using SMTP
        $mail->Host = 'smtp.gmail.com';          // Set the SMTP server to send through
        $mail->SMTPAuth = true;                  // Enable SMTP authentication
        $mail->Username = 'mathis.dupray@sts-sio-caen.info';  // SMTP username
        $mail->Password = 'yourPassword';        // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
        $mail->Port = 465;                       // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom('mathis.dupray@sts-sio-caen.info', 'Mailer');
        $mail->addAddress($_POST['to'] ?? 'mathis.dupray@sts-sio-caen.info'); // Add a recipient

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = ($_POST['subject'] ?? '') . ($_POST['nom'] ?? 'Subject');
        $mail->Body = $_POST['body'] ?? 'This is the HTML message body <b>in bold!</b>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé du à l'absence d'authentification sur le serveur SMTP :  {$mail->ErrorInfo}";
    }
}
