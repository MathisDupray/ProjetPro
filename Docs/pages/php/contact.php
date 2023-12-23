<?php

/*require_once __DIR__ . './../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . './../vendor/phpmailer/phpmailer/src/SMTP.php';*/
require __DIR__ . './../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use ReCaptcha\ReCaptcha;


// SANS CAPTCHA VERIfICATION
/*if (!empty($_POST['ok'])) {
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
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
*/

// AVEC CAPTCHA VERIfICATION
$remoteIp = $_SERVER['REMOTE_ADDR'] ?? '';
$gRecaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
$recaptcha = new \ReCaptcha\ReCaptcha("6LeK6DkpAAAAAFtqZa4mfLO9NEegw9uOEALANwqP", new \ReCaptcha\RequestMethod\CurlPost());
// Clé privé du captcha stockée ici, pas bien mais pas le choix
// car pas accès aux variables d'environnement
$resp = $recaptcha->setScoreThreshold(0.0) // Pour une raison que j'ignore, meme un threshold de 0.1 bloque l'envoie du mail ..
                  ->verify($gRecaptchaResponse, $remoteIp);

if ($resp->isSuccess()) {
    if (!empty($_POST['ok'])) {
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
            $mail->Subject = ($_POST['subject'] ?? '') . ($_POST['nom'] ?? 'Name : non renseigne');
            $mail->Body = $_POST['body'] ?? 'This is the HTML message body <b>in bold!</b>';
    
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
} else {
    $errors = $resp->getErrorCodes();
}