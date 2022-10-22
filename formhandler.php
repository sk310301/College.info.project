<?php 
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='enquiry@collegeinfopro.me';
$email_subject='New form submission';
$email_body="User Name:$name.\n".
			"User Email:$visitor_email.\n".
			"Subject:$visitor_email.\n".
			"User Message:$message.\n".
$to='ksk35sjk@gmail.com'
$headers="From:$email_from\r\n";
$headers.="Reply-To : visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");


 ?>