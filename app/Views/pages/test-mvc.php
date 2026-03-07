<?php
$phone = '919926542408';
$message = 'Test from MVC server';

$url = 'https://arun-whatsapp-bot-production.up.railway.app/send';
$data = json_encode(['phone' => $phone, 'message' => $message]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

echo "Result: " . $result;
?>