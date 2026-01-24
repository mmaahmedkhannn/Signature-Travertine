<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok' => false, 'error' => 'Method not allowed. Use POST.']);
  exit;
}

// Honeypot
if (!empty($_POST['_gotcha'] ?? '')) {
  echo json_encode(['ok' => true]);
  exit;
}

function clean(string $s, int $maxLen): string {
  $s = trim($s);
  $s = str_replace(["\r", "\n"], ' ', $s);
  $s = preg_replace('/[\x00-\x1F\x7F]/u', '', $s) ?? '';
  if (mb_strlen($s) > $maxLen) $s = mb_substr($s, 0, $maxLen);
  return $s;
}

$name    = clean((string)($_POST['name'] ?? ''), 100);
$phone   = clean((string)($_POST['phone'] ?? ''), 30);
$email   = clean((string)($_POST['email'] ?? ''), 255);
$product = clean((string)($_POST['product'] ?? ''), 120);
$message = clean((string)($_POST['message'] ?? ''), 2000);

if (mb_strlen($name) < 2) {
  http_response_code(400);
  echo json_encode(['ok' => false, 'error' => 'Invalid name']);
  exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  echo json_encode(['ok' => false, 'error' => 'Invalid email']);
  exit;
}
if ($phone !== '' && !preg_match('/^[\d\s\+\-\(\)]{7,20}$/', $phone)) {
  http_response_code(400);
  echo json_encode(['ok' => false, 'error' => 'Invalid phone']);
  exit;
}
if (mb_strlen($message) < 10) {
  http_response_code(400);
  echo json_encode(['ok' => false, 'error' => 'Message too short']);
  exit;
}

/**
 * IMPORTANT:
 * This must be a REAL email that EXISTS on your domain in Hostinger.
 * Example: support@signaturetravertineandmarble.com (create it in Hostinger Email)
 */
$TO   = 'support@signaturetravertineandmarble.com';  // where you receive
$FROM = 'support@signaturetravertineandmarble.com';  // must exist

$subject = 'Website Enquiry: ' . ($product !== '' ? $product : 'Main Contact');
$body =
  "New enquiry:\n\n" .
  "Name: {$name}\n" .
  "Phone: {$phone}\n" .
  "Email: {$email}\n" .
  "Product: {$product}\n\n" .
  "Message:\n{$message}\n";

$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'From: Signature Travertine & Marble <' . $FROM . '>';
$headers[] = 'Reply-To: ' . $email;

// THIS is the key line: -f improves delivery on Hostinger
$sent = mail($TO, $subject, $body, implode("\r\n", $headers), '-f' . $FROM);

if (!$sent) {
  http_response_code(500);
  echo json_encode(['ok' => false, 'error' => 'Mail function failed on server']);
  exit;
}

echo json_encode(['ok' => true]);
