<?php
require __DIR__ . '/src/PHPMailer.php';
require __DIR__ . '/src/SMTP.php';
require __DIR__ . '/src/Exception.php';
require __DIR__ . '/vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once __DIR__.'/config.php';

header('Content-Type: application/json');

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $subject === '' || $message === '') {
    echo json_encode(['success'=>false, 'error'=>'All fields are required.']); exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success'=>false, 'error'=>'Invalid email address.']); exit;
}

try {
    // Save message to DB
    $stmt = db()->prepare("INSERT INTO messages(name, email, subject, message) VALUES(?,?,?,?)");
    $stmt->execute([$name, $email, $subject, $message]);

    // Send email via SMTP
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';   // SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vickymadhak4311@gmail.com';  // Your email
    $mail->Password   = 'dtyalkozewcjgzvg';     // App password (not your Gmail password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress('vickymadhak4311@gmail.com'); // where you want to receive it
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "New Contact Form: $subject";
    $mail->Body    = nl2br("Name: $name\nEmail: $email\nMessage:\n$message");

    $mail->send();

    echo json_encode(['success'=>true]);
} catch (Exception $e) {
    echo json_encode(['success'=>false, 'error'=>'Could not send email: '.$e->getMessage()]);
}
?>
