<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Replace these variables with the actual recipient's email and phone number
    $recipientEmail = "basaranbora@hotmail.com";
    $recipientPhone = "+905075774270";

    // Compose the email message
    $subject = "Contact Form Submission";
    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Phone: $phone\n";
    $emailMessage .= "Message:\n$message";

    // Send the email
    mail($recipientEmail, $subject, $emailMessage);

    // You can also send a notification to the phone number here
    // You might use an SMS gateway or other service to send the SMS

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
} else {
    // Handle the case where the form was not submitted properly
    echo "Form submission error.";
}
mail($recipientEmail, $subject, $emailMessage);

// Redirect the user to the thank you page
header("Location: thank_you.html");
exit();
?>