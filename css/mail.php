<?php 
  
    $ToEmail = 'ansapackers@gmail.com, '; 
    $EmailSubject = 'Enquiry from Ansa Packers'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "\r\n <br>Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "\r\n <br>Email: ".$_POST["email"]."";
    $MESSAGE_BODY .=  "\r\n <br>Message: ".$_POST["message"]."\r\n <br>Mobile Number: ".$_POST["phone"].""; 
    
	
	
	
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

echo"<script>alert('We will contact you as soon as possible')</script>";
echo"<script>window.location.href='index.html'</script>";

?>