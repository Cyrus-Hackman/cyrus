<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$email_message = "
Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Message: ".$message."
";

$to = "cyrusapenteng11@gmail.com";
$subject = "New Message";
$headers = "From: ".$email."\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

mail($to, $subject, $email_message, $headers);
header("Location: ../mail-send.html");
exit();
?>
