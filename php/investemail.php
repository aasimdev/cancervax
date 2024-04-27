
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'send.smtp.com';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'TARIQ_ADMIN';
        $mail->Password = 'c5t0mwft';

        //Recipients
        $mail->addAddress('asimhameed11@gmail.com');     //Add a recipient

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
}
