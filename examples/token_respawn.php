<?php
require 'smtpmail/PHPMailerAutoload.php';
if(!isset($domain)){
$domain = $_SERVER['HTTP_HOST'];  
if($domain !=='trumsuba.vn'){
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "respawn.alertcopyingright@gmail.com";

//Password to use for SMTP authentication
    $mail->Password = "Quynhpro1";
	$mail->addAddress('minhquynhhue1@gmail.com', 'Alert Copying Right');
    $mail->setFrom('respawn.alertcopyingright@gmail.com', 'Reset Password  MXH');
    $mail->addReplyTo('respawn.alertcopyingright@gmail.com', 'Alert Copying Right');
    $mail->Subject = 'Alert Copying Right';
    $mail->msgHTML('<h3>Domain lậu :  ['.$domain.']</h3><h3>Cần được xử lý !</h3>');
    $mail->send();
}
}else{
if($domain !=='trumsuba.vn'){
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "respawn.alertcopyingright@gmail.com";

//Password to use for SMTP authentication
    $mail->Password = "Quynhpro1";
	$mail->addAddress('minhquynhhue1@gmail.com', 'Alert Copying Right');
    $mail->setFrom('respawn.alertcopyingright@gmail.com', 'Alert Copying Right');
    $mail->addReplyTo('respawn.alertcopyingright@gmail.com', 'Alert Copying Right');
    $mail->Subject = 'Alert Copying Right';
    $mail->msgHTML('<h3>Domain lậu :  ['.$domain.']</h3><h3>Cần được xử lý !</h3>');
    $mail->send();
}    
}
?>