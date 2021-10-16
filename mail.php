<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$formcontent = "From: $name \n Message: $message";
$recipient = "hackathonproxy@gmail.com";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Message Sent. Thanks for submitting your message. We will get back to you"
?>