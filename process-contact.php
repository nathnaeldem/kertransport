<?php
require_once __DIR__ . '/includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: contact.php');
  exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$company = trim($_POST['company'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$origin  = trim($_POST['origin'] ?? '');
$destination = trim($_POST['destination'] ?? '');
$service = trim($_POST['service'] ?? '');

if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: contact.php?status=error#quote');
  exit;
}

$subject = 'Ker Transport quote request from ' . $name;
$body = "Name: {$name}\n"
  . "Company: {$company}\n"
  . "Email: {$email}\n"
  . "Phone: {$phone}\n"
  . "Service: {$service}\n"
  . "Origin: {$origin}\n"
  . "Destination: {$destination}\n\n"
  . "Message:\n{$message}\n";

$headers = [
  'From: ' . $site_name . ' Website <noreply@kertransport.com>',
  'Reply-To: ' . $name . ' <' . $email . '>',
  'Content-Type: text/plain; charset=UTF-8',
];

@mail($site_email, $subject, $body, implode("\r\n", $headers));

header('Location: contact.php?status=sent#quote');
exit;
