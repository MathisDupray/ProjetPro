<?php

require_once __DIR__ . './../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . './../vendor/phpmailer/phpmailer/src/SMTP.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/RequestMethod/Curl.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/RequestMethod/CurlPost.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/RequestMethod/Post.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/RequestMethod/Socket.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/RequestMethod/SocketPost.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/ReCaptcha.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/RequestMethod.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/Response.php';
require_once __DIR__ . './../vendor/google/recaptcha/src/ReCaptcha/RequestParameters.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use ReCaptcha\ReCaptcha;

// Define your ReCAPTCHA keys
$publicKey = '6LeK6DkpAAAAAL1VLNtCir0-V331rtUcOLayu7IU';
$secretKey = '6LeK6DkpAAAAAFtqZa4mfLO9NEegw9uOEALANwqP';
// secretkey a mettre dans une variable d'environnement

if (isset($_POST['ok'])) {
    $recaptcha = new ReCaptcha($secretKey);
    $gRecaptchaResponse = $_POST['g-recaptcha-response'];
    $resp = $recaptcha->setExpectedHostname('sts-sio-caen.info')
                     ->verify($gRecaptchaResponse, $_SERVER['REMOTE_ADDR']);
    if ($resp->isSuccess()) {
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
    } else {
        $errors = $resp->getErrorCodes();
        // if fail
        echo 'ReCAPTCHA verification failed. Please try again.';
    }
}
?>