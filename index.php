<?php
    $name = $_POST['cta-name'];
    $email = $_POST['cta-email'];
    $message = $_POST['cta-message'];
    $from = 'From: PointCTA'; 
    $recipient = 'xli@pointup.io'; 




    $subject = 'Contact Form';



    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	$mailheader = "From: $email \r\n";

    $formcontent="From: $name \n Message: $message";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>

