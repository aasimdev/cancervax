<?php
if (!isset($_SESSION)) session_start();
if (!isset($_POST)) exit;
include dirname(__FILE__) . '/settings/settings.php';
require 'phpmailertesting/PHPMailer/class.phpmailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize $errors array
    $errors = array();

    $emailaddress = strip_tags(trim($_POST["email"]));

    if ($errors) {
        // Output errors in a list
        $errortext = "";
        foreach ($errors as $error) {
            $errortext .= '<li>' . $error . "</li>";
        }
        echo '<div class="alert notification alert-error">Error:<br><ul>' . $errortext . '</ul></div>';
    } else {
        $mail = new PHPMailer;
        $mail->CharSet = "UTF-8";
        $mail->AddReplyTo($emailaddress);
        $mail->addAddress('asimhameed11@gmail.com');
        $mail->Subject = "CancerVax submission";
        $mail->IsHTML(true);
        $mail->Body = '<html>
            <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
                <p><span style="font-weight:bold;font-size:16px;padding-left:10px">New contact:</span> ' . $emailaddress . '</p>
            </body>
            </html>';
        
        // Check for errors while sending mail
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            if ($redirectForm == true) {
                echo '<script>alert("its working fine"); </script>';
            }
        }
    }
}
?>
