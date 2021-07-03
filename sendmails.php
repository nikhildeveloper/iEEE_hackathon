<?php
session_start();
$con = mysqli_connect('localhost','root','','userregistration');


$to_email = "spriya.bas@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sb6905@srmist.edu.in";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>