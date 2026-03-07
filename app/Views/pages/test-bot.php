<?php
// test-bot.php - SINGLE FILE SOLUTION
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    // Handle API call
    header('Content-Type: application/json');
    
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';
    
    if (empty($phone) || empty($message)) {
        echo json_encode(['success' => false, 'error' => 'Phone and message required']);
        exit;
    }
    
    // Generate student ID for testing
    $student_id = 'TEST' . date('Ymd') . rand(100, 999);
    
    $data = json_encode([
        'phone' => $phone,
        'message' => $message
    ]);
    
    $ch = curl_init('https://arun-whatsapp-bot-production.up.railway.app/send');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        ],
        CURLOPT_TIMEOUT => 10
    ]);
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($http_code == 200) {
        $result = json_decode($response, true);
        $result['student_id'] = $student_id;
        echo json_encode($result);
    } else {
        echo json_encode(['success' => false, 'error' => 'API error: ' . $http_code]);
    }
    exit;
}

if (isset($_GET['status'])) {
    // Handle status check
    header('Content-Type: application/json');
    
    $ch = curl_init('https://arun-whatsapp-bot-production.up.railway.app');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($http_code == 200) {
        echo $response;
    } else {
        echo json_encode(['status' => 'offline', 'error' => 'Cannot reach bot']);
    }
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test WhatsApp Bot</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
        input, textarea, button { width: 100%; padding: 10px; margin: 5px 0; }
        button { background: #25D366; color: white; border: none; cursor: pointer; }
        #result, #status { margin: 20px 0; padding: 15px; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
        .sending { background: #fff3cd; color: #856404; }
        .online { background: #d4edda; color: #155724; }
        .offline { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <h2>📱 Test Arun Computer WhatsApp Bot</h2>
    
    <div id="status" class="sending">Checking bot status...</div>
    
    <div>
        <label><strong>Phone Number (with 91):</strong></label>
        <input type="text" id="phone" value="919926542408" placeholder="919926542408">
        <small>Format: 91 + 10-digit number</small>
    </div>
    
    <div>
        <label><strong>Message:</strong></label><br>
        <textarea id="message" rows="8" cols="50">
🎓 *Arun Computer Center - Admission Confirmation*

Dear Student,

Your admission has been successfully confirmed!

📋 *Student Details:*
• Student ID: ARUN2025-001
• Course: Computer Basics
• Date: 6th February 2025
• Center: Arun Computer Center

📍 *Visit:* aruncomputer.com
📞 *Contact:* 9926542408

Thank you for choosing us!
        </textarea>
    </div>
    
    <button onclick="sendMessage()">📤 Send Test Message via WhatsApp</button>
    
    <div id="result"></div>
    
    <div style="margin-top: 30px; padding: 15px; background: #e9f7fe; border-radius: 5px;">
        <h3>✅ Single File Solution</h3>
        <p>This page is <strong>test-bot.php</strong> - everything in one file!</p>
        <p>URL: <code>https://aruncomputer.com/test-bot.php</code></p>
        <p>No 404 errors - all functions work from this single file.</p>
    </div>

    <script>
    // Check bot status on load
    async function checkStatus() {
        try {
            const response = await fetch('test-bot.php?status=1');
            const data = await response.json();
            
            const statusDiv = document.getElementById('status');
            if (data.status && data.status.includes('Connected')) {
                statusDiv.innerHTML = '<span class="online">✅ Bot Status: ONLINE & Connected to WhatsApp</span>';
                statusDiv.className = 'online';
            } else {
                statusDiv.innerHTML = '<span class="offline">❌ Bot Status: OFFLINE or Disconnected</span>';
                statusDiv.className = 'offline';
            }
        } catch (error) {
            document.getElementById('status').innerHTML = '<span class="offline">⚠️ Cannot check bot status</span>';
            document.getElementById('status').className = 'offline';
        }
    }
    
    // Send message
    async function sendMessage() {
        const phone = document.getElementById('phone').value.replace(/\D/g, '');
        const message = document.getElementById('message').value;
        const resultDiv = document.getElementById('result');
        
        // Validate phone
        if (!phone || phone.length < 10) {
            resultDiv.innerHTML = '<div class="error">❌ Please enter a valid phone number (with 91)</div>';
            return;
        }
        
        // Add country code if missing
        let formattedPhone = phone;
        if (phone.length === 10) {
            formattedPhone = '91' + phone;
        }
        
        resultDiv.innerHTML = '<div class="sending">⏳ Sending message...</div>';
        
        try {
            // Send to THIS SAME FILE (test-bot.php)
            const formData = new FormData();
            formData.append('phone', formattedPhone);
            formData.append('message', message);
            formData.append('action', 'send');
            
            const response = await fetch('test-bot.php', {
                method: 'POST',
                body: formData
            });
            
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            
            const result = await response.json();
            
            if (result.success) {
                resultDiv.innerHTML = `
                    <div class="success">
                        ✅ Message sent successfully! 
                        <p>Check WhatsApp on ${formattedPhone}</p>
                        <p>Student ID: ${result.student_id || 'Generated'}</p>
                    </div>
                `;
            } else {
                resultDiv.innerHTML = `<div class="error">❌ Error: ${result.error || 'Unknown error'}</div>`;
            }
            
        } catch (error) {
            console.error('Error:', error);
            resultDiv.innerHTML = `
                <div class="error">
                    <p>❌ Error: ${error.message}</p>
                    <p><strong>Alternative:</strong> Run in Command Prompt:</p>
                    <pre style="background: #333; color: white; padding: 10px; overflow: auto;">
curl -X POST https://arun-whatsapp-bot-production.up.railway.app/send ^
  -H "Content-Type: application/json" ^
  -d "{\\"phone\\":\\"${formattedPhone}\\",\\"message\\":\\"${message.substring(0, 50)}...\\"}"</pre>
                </div>
            `;
        }
    }
    
    // On page load
    window.onload = checkStatus;
    </script>
</body>
</html>