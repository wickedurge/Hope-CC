<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$preferred = $_POST['preferred'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: Please contact me via $preferred. My phone number is $phone and my email address is at $email";
$recipient = "rj@rjmey.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html'> Return To Hope Christian Counseling</a>";
?>