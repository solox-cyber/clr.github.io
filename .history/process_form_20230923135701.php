<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $guardianName = $_POST['gname'];
    $guardianEmail = $_POST['gmail'];
    $telephone = $_POST['tel'];
    $serviceType = $_POST['serviceType'];
    $message = $_POST['message'];

    // You can perform further processing here, such as sending emails or saving data to a database
    // For example, to send an email, you can use the mail() function:
    $to = 'clresources2019@gmail.com';
    $subject = 'Appointment Request';
    $messageBody = "Guardian Name: $guardianName\nGuardian Email: $guardianEmail\nTelephone Number: $telephone\nService Type: $serviceType\nMessage: $message";
    $headers = 'From: sender@example.com';

    if (mail($to, $subject, $messageBody, $headers)) {
        // Email sent successfully
        echo 'Thank you! Your appointment request has been submitted.';
    } else {
        // Email sending failed
        error_log('Error sending email: ' . error_get_last()['message']);
        echo 'Sorry, there was an error. Please try again later.';
    }
}
?>
