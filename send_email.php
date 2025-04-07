<?php
header('Content-Type: application/json');

// Validate required fields
$required = ['name', 'email', 'message'];
$errors = [];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        $errors[$field] = 'This field is required';
    }
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Sanitize inputs
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => ['email' => 'Invalid email address']]);
    exit;
}

// Email configuration
$to = 'your-email@example.com'; // Replace with your email
$subject = 'New Contact Form Submission from ' . $name;
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$email_body = "Name: $name\n";
$email_body .= "Email: $email\n\n";
$email_body .= "Message:\n$message";

// Send email
if (mail($to, $subject, $email_body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Sorry, there was an error sending your message. Please try again later.']);
}
?>