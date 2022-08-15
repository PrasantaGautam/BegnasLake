<?php

$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];

$email__from = "yourweb@gmail.com";
$email_subject = "New form submission";

$email_body = "User Name: $name.\n".
"User email: $visitor_email.\n".
"User subject: $subject.\n";

$to = 'kaliweb620@gmail.com';

$headers = "From: $email_from\r\n";
$headers .= "Reply to: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: rough.html"); 



?>