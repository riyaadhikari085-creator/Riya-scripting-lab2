<?php

$to = "example@gmail.com";
$subject = "Email Notification";
$message = "Hello, this is a notification from PHP.";
$headers = "From: admin@example.com";

if(mail($to, $subject, $message, $headers)){
    echo "Email sent successfully";
}else{
    echo "Email sending failed";
}

?>