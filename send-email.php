<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust path if you’re not using Composer

// Collect form data safely
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$guest_count = $_POST['guest_count'] ?? '';
$start_date = $_POST['start_date'] ?? '';
$end_date = $_POST['end_date'] ?? '';
$traveller_type = $_POST['traveller_type'] ?? '';
$source = $_POST['source'] ?? '';

$mail = new PHPMailer(true);
# Looking to send emails in production? Check out our Email API/SMTP product!

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io';         // SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = '3319f431d7b8fe';          // SMTP username
    $mail->Password   = 'd36853f8bd296f';            // SMTP password
    $mail->SMTPSecure = 'tls';                      // encryption (ssl/tls)
    $mail->Port       = 2525;

    // Sender & recipient
    $mail->setFrom('you@example.com', 'Majestic Escape');
    $mail->addAddress('deepamcoderelix@gmail.com', 'Rann Utsav | Majestic Escape Landing Page | Inquiry');  // Your email to receive form data
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'New Rann Utsav Booking Request';

    $mail->Body = "
        <h3>Booking Inquiry</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Guest Count:</strong> {$guest_count}</p>
        <p><strong>Start Date:</strong> {$start_date}</p>
        <p><strong>End Date:</strong> {$end_date}</p>
        <p><strong>Traveller Type:</strong> {$traveller_type}</p>
        <p><strong>Heard From:</strong> {$source}</p>
    ";

    $mail->send();
    echo 'success';
} catch (Exception $e) {
    echo "error: {$mail->ErrorInfo}";
}
