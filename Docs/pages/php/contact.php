<?php

require_once __DIR__ . './../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . './../vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$recaptcha_secret_key = "6LeK6DkpAAAAAFtqZa4mfLO9NEegw9uOEALANwqP";
// C'est pas bien mais pas le choix car
// pas de variables d'environnement dispo

if (!isset($recaptcha_secret_key) || empty($recaptcha_secret_key)) {
    // Si mal config
    die('reCAPTCHA secret key is missing or empty.');
}

// Validation reCAPTCHA reponse
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

// server-side reCAPTCHA verification
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

if (!$recaptcha_result_data['success']) {
    // si fail
    die('reCAPTCHA verification failed.');
}

// Proceed with sending email if reCAPTCHA verification is successful

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
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
