<?php

if($_POST["submit"]) {
    $recipient="mayme.clayton@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody);

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
