<?php
$info = $_POST['info'];
$info .= '';
$info = str_replace("'", "", $info);
$info = str_replace('"', "", $info);

$len = strlen($info);
$substr = substr($info, 0, $len - 1);

$to = 'zapchastyny.sprinter@gmail.com';
$subject = "Wooo Email!";

$message = "One new visitor! \r\n";
$message .= "\r\n $substr";
$message = wordwrap($message, 70);

mail($to, $subject, $message, "From: system@yourdomain.com\r\n");
?>