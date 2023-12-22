<?php
use PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;

 
?>
<?php
 
if(!empty($_POST)) {
 
    $mail = new PHPMailer(true);
 
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'mathis.dupray@sts-sio-caen.info';             //SMTP username
        $mail->Password = 'yourPassword';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
        //Recipients
        $mail->setFrom('mathis.dupray@sts-sio-caen.info', 'Mailer');
        $mail->addAddress($_POST['to']??'mathis.dupray@sts-sio-caen.info');     //Add a recipient
 
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_POST['subject'].$_POST['nom']??'Subject';
        $mail->Body = $_POST['body']??'This is the HTML message body <b>in bold!</b>';
 
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
