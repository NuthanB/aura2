<?php 
// Replace these variables with your Gmail account and app password
$smtpUsername = 'programsforlab@gmail.com';
$smtpPassword = 'ozdwnyfbgwyljfax';

    // print_r($_POST["birthday"][0]); die();
  // Sender details
$fromEmail = $_POST["email"];
$fromName = $_POST["name"];

// Email headers
$headers = "From: $fromName <$fromEmail>\r\n";
$headers .= "Reply-To: $fromEmail\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $ToEmail = 'info@aurabirthingpartner.com'; 
    $EmailSubject = 'Enquiry from Aura -  Nutrition Consultation'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "\r\n <br>Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "\r\n <br>Phone: ".$_POST["phone"]."";
    $MESSAGE_BODY .= "\r\n <br>Age: ".$_POST["age"]."";
	$MESSAGE_BODY .= "\r\n <br>City: ".$_POST["city"]."";
	$MESSAGE_BODY .= "\r\n <br>Email: ".$_POST["email"]."";
	
	
	
	
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
    header('Location: nutrition-and-diet-consultation.html?success=1');
    exit();
} else {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
