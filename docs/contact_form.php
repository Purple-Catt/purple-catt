<?php
$name=$_REQUEST['fullname'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$from="From: $name<$email>\r\nReturn-path: $email";
$subject="Website Contact Form Message";
mail("m.delpistoia@outlook.com", $subject, $message, $from);
echo "Email sent!";
?>