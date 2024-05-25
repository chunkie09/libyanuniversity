<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@libyanuniv.edu.ly';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
			  "User Email: $visitor_email.\n".
			  "Subject: $subject.\n".
			  "User Mesge: $message.\n";

$to = ' supahokfire@gmail.com';

$headers = "Form: $email_form \r\n";

$headers = "Replay-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>