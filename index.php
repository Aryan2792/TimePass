<?php
// Email parameters
$to = "aryankhanna510@gmail.com"; // Replace with recipient email
$subject = "Welcome to Our Service";
$message = "Hello,\n\nThank you for signing up! We're excited to have you on board.\n\nBest regards,\nTeam";
$headers = "From: timepass@gmail.com"; // Replace with sender email

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send the email.";
}
?>
