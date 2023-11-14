<?php

function sendRegistrationEmail($to)
{
    $subject = "Your Camagru account";
    $message = "Click on this link to confirm your account";
    $headers = "From: contact@camagru.com";

        // Send the email
        $mailSent = mail($to, $subject, $message, $headers);

        if ($mailSent) {
            echo "Email sent successfully.";
            echo print_r($mailSent);
        } else {
            echo "Email could not be sent.";
        }
}