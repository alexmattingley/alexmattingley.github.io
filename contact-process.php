<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body = "";
$email_body = $email_body . "Name: " . $name . "<br>";
$email_body = $email_body . "Email: " .$email . "<br>";
$email_body = $email_body . "Message: " . $message . "<br>";

//TODO: Send Email

header("Location: contact-thanks.php");
?>