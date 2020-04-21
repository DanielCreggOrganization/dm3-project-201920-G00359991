<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$message = $_POST['message'];
$formcontent="From: $firstname, $lastname \n Message: $message";
$recipient = "retrogameshelp37@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>