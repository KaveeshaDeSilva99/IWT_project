<?php

$email = $_POST['email'];
$msg = $_POST['msg'];

$msgSend = wordwrap($msg, 70);

$to = $email;
$subject = "Message From a Customer";
$txt = $msgSend;
$headers = "From: sample@gmail.com" . "\r\n" .
        "CC: sample@gmail.com";

// mail($to, $subject, $txt, $headers);
echo 'Your message sended successfully!';
?>