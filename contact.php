<?php
include 'includes/connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $user = $_POST['email'];
    $name = $_POST['name'];
    $subject = 'Buenaroa | Feedback: ' . $_POST['subject'];
    // $message = $_POST['message'];

    $message = ' 
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
    </head>
    
    <body>
        <p> Hi, <strong>' . $name . '!</strong></p>
    
        <p> Thank you for visiting our website and spending your time to send an email. This is to acknowledge
            that we have received your message and we will reply as soon as possible within 48 hours.
            <br><br>
            <b>Buenaroa </b>
        </p>
    </body>
    
    </html>
    ';

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = 'true';
    $mail->Username = 'inquire@buenaroa.store';
    $mail->Password = 'cayCay18*';
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    $mail->setFrom('inquire@buenaroa.store', 'Buenaroa');
    $mail->addAddress($user);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->send();

    header('Location: ' . $home .  'index.php');
}
