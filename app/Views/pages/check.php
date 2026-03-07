<?php
// fix_passwords.php
$servername = "localhost";
$username = "aruncbuz_admin";
$password_db = "Rewa@12345678"; // Database password (variable name changed)
$dbname = "aruncbuz_ci4tuorial";

$conn = new mysqli($servername, $username, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h2>Student Password Fix Script</h2>";

// Step 1: Check current status
echo "<h3>Step 1: Current Status</h3>";
$check_sql = "SELECT 
    COUNT(*) as total,
    SUM(CASE WHEN password IS NULL OR password = '' THEN 1 ELSE 0 END) as null_passwords
    FROM admissions";
$result = $conn->query($check_sql);
$row = $result->fetch_assoc();
echo "Total students: " . $row['total'] . "<br>";
echo "Students without password: " . $row['null_passwords'] . "<br>";

// Step 2: Generate new hash
echo "<h3>Step 2: Generating New Hash</h3>";
$plain_password = 'student123';
$hashed_password = password_hash($plain_password, PASSWORD_BCRYPT);
echo "Password: " . $plain_password . "<br>";
echo "Hashed: " . $hashed_password . "<br>";

// Step 3: Update database
echo "<h3>Step 3: Updating Database</h3>";
$update_sql = "UPDATE admissions SET password = ? WHERE email IS NOT NULL";
$stmt = $conn->prepare($update_sql);
$stmt->bind_param("s", $hashed_password);

if ($stmt->execute()) {
    echo "✅ Updated " . $stmt->affected_rows . " records<br>";
    
    // Step 4: Verify sample
    echo "<h3>Step 4: Verification Test</h3>";
    $verify_sql = "SELECT email, password FROM admissions LIMIT 1";
    $verify_result = $conn->query($verify_sql);
    
    if ($verify_result->num_rows > 0) {
        $student = $verify_result->fetch_assoc();
        echo "Sample Email: " . $student['email'] . "<br>";
        echo "Stored Hash: " . substr($student['password'], 0, 30) . "...<br>";
        
        if (password_verify($plain_password, $student['password'])) {
            echo "✅ Password verification successful!<br>";
            echo "<strong>Now students can login with:</strong><br>";
            echo "Email/Mobile: Their registered email/mobile<br>";
            echo "Password: student123<br>";
        } else {
            echo "❌ Password verification failed!<br>";
        }
    }
} else {
    echo "❌ Update failed: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>