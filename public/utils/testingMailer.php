<?php
// require 'PHPMailer/PHPMailerAutoload.php';
// date_default_timezone_set('Etc/UTC');

// $mail = new PHPMailer;

// //$mail->SMTPDebug = 3;                               // Enable verbose debug output
// //$mail->Debugoutput = 'html';
// // $mail->isSMTP();                                      // Set mailer to use SMTP
// // $mail->Host = 'smtp.gmail.com.';  // Specify main and backup SMTP servers
// // $mail->SMTPAuth = true;                               // Enable SMTP authentication
// // $mail->Username = 'dineshg5678@gmail.com';                 // SMTP username
// // $mail->Password = '';                           // SMTP password
// // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// // $mail->Port = 587;                                    // TCP port to connect to
// // $mail->SMTPDebug = 2;
// $mail->setFrom('dineshg5678@gmail.com', 'Dinesh');
// $mail->addAddress('gandra.dineshreddy@gmail.com');     // Add a recipient
// // $mail->addAddress('ellen@example.com');               // Name is optional
// // $mail->addReplyTo('info@example.com', 'Information');
// // $mail->addCC('cc@example.com');
// // $mail->addBCC('bcc@example.com');

// // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }

/**
 * This example shows making an SMTP connection without using authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require_once 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->isSendmail(); 
//Tell PHPMailer to use SMTP
// $mail->isSMTP();
// //Enable SMTP debugging
// // 0 = off (for production use)
// // 1 = client messages
// // 2 = client and server messages
// $mail->SMTPDebug = 2;
// //Ask for HTML-friendly debug output
// $mail->Debugoutput = 'html';
// //Set the hostname of the mail server
// $mail->Host = "smtp.gmail.com";
// //Set the SMTP port number - likely to be 25, 465 or 587
// $mail->Port = 25;
// //Whether to use SMTP authentication
// $mail->SMTPAuth = false;
//Set who the message is to be sent from
$mail->setFrom('example@gmail.com', 'Dinesh Reddy');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('gandra.dineshreddy@gmail.com', 'Dinesh Reddy');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP without auth test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually

$mail->isHTML(true);
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('../img/logo.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}


?>