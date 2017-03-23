<?php
$info = strip_tags(htmlspecialchars($_POST['info']));

$to = 'zapchastyny.sprinter@gmail.com';
$email_subject = "zapchastyny-sprinter.com.ua - statistics";
$email_body = "$info";
$headers = "From: noreply@yourdomain.com\n";
$headers .= "Reply-To: noreply@yourdomain.com\n";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
