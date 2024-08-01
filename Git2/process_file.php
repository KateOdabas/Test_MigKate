<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars( $_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // my email to send
    $to = "kate.odabas@gmail.com";
    $subject = "Message from $name via Kate's Website";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // to me sending
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Thank you for your message!");</script>';
    } else {
        echo '<script>alert("Sorry, there was an error sending your message.");</script>';
    }
}
