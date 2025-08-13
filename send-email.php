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
    $mail->Host       = 'smtp.gmail.com';         // SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'notify@majesticescape.in';          // SMTP username
    $mail->Password   = 'lact scen qjfq zmxz';            // SMTP password
    $mail->SMTPSecure = 'tls';                      // encryption (ssl/tls)
    $mail->Port       = 587;

    // Sender & recipient
    $mail->setFrom('you@example.com', 'Majestic Escape');
    $mail->addAddress('info@majesticescape.in', 'Rann Utsav | Majestic Escape Landing Page | Inquiry');  // Your email to receive form data
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'New Rann Utsav Booking Request';

    $mail->Body = "
        <h3>Booking Inquiry</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Type of Traveller:</strong> {$traveller_type}</p>
    ";

    $mail->send();
    echo 'success';
} catch (Exception $e) {
    echo "error: {$mail->ErrorInfo}";
}
