
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; // Add this line to import the SMTP class

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

 //Create an instance; passing `true` enables exceptions
 $mail = new PHPMailer(true);

 try {
     //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'send.smtp.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'tariq_admin';                     //SMTP username
     $mail->Password   = 'c5t0mwft';                               //SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
     $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

     //Recipients
     $mail->addaddress('asimhameed11@gmail.com' , 'Asim');

     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Here is the subject';
     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     $mail->send();
     echo 'Message has been sent';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }