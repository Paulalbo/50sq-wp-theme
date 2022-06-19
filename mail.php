<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = "Contact Form heart-of-helen";
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "info@heartofhelen.com";
    $headers = "From: " . $email;
    $txt = "You have received an e-mail from " . $name . "\nE-Mail: ". $email . "\n\nMessage:\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../../../index.php?mailsend");
}

?> 