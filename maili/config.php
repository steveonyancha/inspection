<?php
    include('PHPMailer/class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    
    $body='this is the message';
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com'
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    
    $mail->Username ='stivinmo@gmail.com';

?>