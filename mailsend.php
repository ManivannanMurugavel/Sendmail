<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = '<your mail id>';          // SMTP username
$mail->Password = '<your password>'; // SMTP password
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                          // TCP port to connect to

$mail->setFrom('shewagmani123@gmail.com', 'Manivannan');
//$mail->addReplyTo('mmurugavel@citrisys.com', 'CodexWorld');
$mail->addAddress('mmurugavel@whirldatascience.com');   // Add a recipient
$mail->addCC('mmurugavel@citrisys.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>How to Send Email using PHP in Localhost by Whirldata</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Whirldata</b></p>';
echo "1";
$mail->Subject = 'Email from Localhost by Whirldata';
$mail->Body    = $bodyContent;
// Add attachments
//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
/*$to = "mmurugavel@citrisys.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "HAI";*/
//mail('mmurugavel@citrisys.com',$subject,$txt,'From: mmurugavel@whirldatascience.com','-f mmurugavel@whirldatascience.com');
//mail($to, $subject, $txt, $headers, "-f mmurugavel@whirldatascience.com");  
//mail($to,$subject,$txt,$headers);

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	
}
?>
