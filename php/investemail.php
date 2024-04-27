<?php
require('phpmailer/class.phpmailer.php');
$mail = new PHPMailer;

$name = 'name';
$phone = 'phone';
$email = 'email';
$message = 'HI Friends How are you';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isMail();                                      // Set mailer to use SMTP
$mail->Host = 'localhost';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'it2@aps-group.org';                 // SMTP username
$mail->Password = '*****';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 486;                                    // TCP port to connect to

$mail->From = 'it2@aps-group.org';
$mail->FromName = $name;
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('mozammelctgmirbd@gmail.com');               // Name is optional

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'SASP Contact Form';
$mail->Body = $message;
$mail->Body .= "<br /><br />Below are my contact details <br /> Name: ";
$mail->Body .= $name;
$mail->Body .= "<br />My Phone number: ";
$mail->Body .= $phone;
$mail->Body .= "<br /> My email address: ";
$mail->Body .= $email;


$mail->AltBody = 'You are using basic web browser ';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';

}
?>