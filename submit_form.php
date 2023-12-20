<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/PHPMailer.php';
require 'PHPmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name_input"];
    $last_name = $_POST["last_name_input"];
    $email = $_POST["email_input"];
    $phone = $_POST["phone_input"];
    $category = $_POST["category_select"];
    $message = $_POST["message_input"];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Set mailer to use SMTP
        $mail->isSMTP();

        // SMTP server settings
        $mail->Host       = 'timhoch.ch';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@timhoch.ch';
        $mail->Password   = 'Brachi15';
        $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl' depending on your server configuration
        $mail->Port       = 587;   // Use 587 for TLS, 465 for SSL

        // Sender and recipient
        $mail->setFrom($email, 'Sender Name');
        $mail->addAddress('hochstrassertim15@gmail.com', 'Recipient Name');

        // Email content
        $mail->Subject = "Form Submission - $category";
        $mail->Body    = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nPhone: $phone\nCategory: $category\nMessage: $message";

        // Send the email
        $mail->send();

        echo "Form submitted successfully!";
    } catch (Exception $e) {
        echo "Error submitting form. Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method!";
}
?>
