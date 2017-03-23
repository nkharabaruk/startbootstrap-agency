<?php
$info = strip_tags(htmlspecialchars($_POST['info']));
// Create the email and send the message
$to = 'zapchastyny.sprinter@gmail.com';
$email_subject = "zapchastyny-sprinter.com.ua - statistics";
$email_body = info;
$headers = "From: noreply@zapchastyny-sprinter.com.ua\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
