<?php
if (!isset($_SESSION)) session_start();
if (!isset($_POST)) exit;
include dirname(__FILE__) . '/settings/settings.php';
// require 'phpmailertesting/PHPMailer/class.phpmailer.php';
require 'phpmailer/PHPMailerAutoload.php';

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
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'sandbox.smtp.mailtrap.io'; // Update with your SMTP server
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = '1b6bcb7b6ae33b'; // SMTP username
        $mail->Password = 'de337fee88f366'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25; // TCP port to connect to
    }
}
?>
