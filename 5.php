<?php
$to = "example@example.com";
$subject = "Subject email";
$message = "Isi pesan email";
$headers = "From: example@example.com\r\n" .
  "Reply-To: example@example.com\r\n" .
  "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

echo "Email berhasil dikirim";
?>
