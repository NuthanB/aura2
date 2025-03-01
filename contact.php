<?php
// Replace these variables with your Gmail account and app password
$smtpUsername = 'programsforlab@gmail.com';
$smtpPassword = 'ozdwnyfbgwyljfax';

// Recipient and email details
$ToEmail = 'info@aurabirthingpartner.com'; 
$EmailSubject = 'Enquiry from Aura - Contact'; 

// Sender details
$fromEmail = $_POST["email"];
$fromName = $_POST["name"];

// Email headers
$headers = "From: $fromName <$fromEmail>\r\n";
$headers .= "Reply-To: $fromEmail\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

// Email message body
$MESSAGE_BODY = "\r\n <br>Name: ".$_POST["name"]."";
$MESSAGE_BODY .= "\r\n <br>Phone: ".$_POST["phone"]."";
$MESSAGE_BODY .= "\r\n <br>Age: ".$_POST["age"]."";
$MESSAGE_BODY .= "\r\n <br>City: ".$_POST["city"]."";
$MESSAGE_BODY .= "\r\n <br>Email: ".$_POST["email"]."";
$MESSAGE_BODY .= "\r\n <br>Pregnancy Week: ".$_POST["pregnancyweek"]."";
$MESSAGE_BODY .= "\r\n <br>Medical Condition: ".$_POST["medicalcondition"]."";

// PHPMailer library is used for sending emails via SMTP
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require './PHPMailer/src/Exception.php';


// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP settings
$mail->isSMTP();
$mail->SMTPDebug = 0;  // Set to 2 for debugging, 0 for production
$mail->Host = 'smtp.gmail.com';  // Gmail SMTP server
$mail->Port = 587;  // Port 587 is TLS
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;

// Sender and recipient
$mail->setFrom($fromEmail, $fromName);
$mail->addAddress($ToEmail);

// Email content
$mail->isHTML(true);
$mail->Subject = $EmailSubject;
$mail->Body = $MESSAGE_BODY;

// Send the email
// Send the email
// Send the email
if ($mail->send()) {
    // Redirect to the success page with a query parameter
    header('Location: contact.html?success=1');
    exit();
} else {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


