					<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'madayagjerome28@gmail.com';
    $subject = 'New message from contact form';
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message. Please try again later.';
    }
}
?>