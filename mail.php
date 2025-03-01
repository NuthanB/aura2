<?php 

    // print_r($_POST["birthday"][0]); die();
  
    $ToEmail = 'info@aurabirthingpartner.com'; 
    $EmailSubject = 'Enquiry from FitWomaniya Website'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "\r\n <br>Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "\r\n <br>Phone: ".$_POST["phone"]."";
    $MESSAGE_BODY .= "\r\n <br>Age: ".$_POST["age"]."";
	$MESSAGE_BODY .= "\r\n <br>City: ".$_POST["city"]."";
	$MESSAGE_BODY .= "\r\n <br>Email: ".$_POST["email"]."";
	$MESSAGE_BODY .= "\r\n <br>How do u get to know: ".$_POST["aboutprogram"]."";
	$MESSAGE_BODY .= "\r\n <br>Objective: ".$_POST["objective"]."";
	$MESSAGE_BODY .= "\r\n <br>Expectation: ".$_POST["expectations"]."";
	$MESSAGE_BODY .= "\r\n <br>Medical Condition: ".$_POST["medical"].""; 
    
	
	
	
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

echo"<script>window.location.href='https://rzp.io/i/NjzSgZwIa'</script>";

?>