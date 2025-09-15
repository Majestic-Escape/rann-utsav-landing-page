<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust path if you’re not using Composer

// Helper function for sanitization
function sanitize($value) {
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

// Collect and sanitize form data
$name = sanitize($_POST['name'] ?? '');
$email = sanitize($_POST['email'] ?? '');
$phone = sanitize($_POST['phone'] ?? '');
$traveller_type = sanitize($_POST['traveller_type'] ?? '');

// Backend validation
$errors = [];

if (empty($name) || strlen($name) < 2) {
    $errors[] = "Please enter a valid name.";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}
if (empty($phone) || !preg_match('/^[0-9+\-\s]{8,16}$/', $phone)) {
    $errors[] = "Please enter a valid phone number.";
}
if (empty($traveller_type)) {
    $errors[] = "Please select your traveller type.";
}

if (!empty($errors)) {
    echo 'error';
    exit;
}

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
    $mail->addAddress('marketing@majesticescape.in', 'Rann Utsav | Majestic Escape Landing Page | Inquiry');  // Your email to receive form data
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
    echo 'failed';
}
