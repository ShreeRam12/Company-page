<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['appointment_name'];
    $email = $_POST['appointment_email'];
    $phone = $_POST['appointment_phone'];
    $website = $_POST['appointment_website'];

    // Email details
    $to = "bandaruenosh2631@gmail.com"; // Replace with your email address
    $subject = "New Appointment Request";
    $message = "
    <html>
    <head>
    <title>Appointment Request</title>
    </head>
    <body>
    <h2>Appointment Request</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone Number:</strong> $phone</p>
    <p><strong>Website:</strong> $website</p>
    </body>
    </html>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your appointment request has been sent successfully!";
    } else {
        echo "There was an error sending your appointment request.";
    }
}
?>
