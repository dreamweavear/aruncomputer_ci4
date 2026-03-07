<?php
// Database connection
$servername = "localhost";
$username = "aruncbuz_admin";
$password = "Rewa@12345678";
$dbname = "aruncbuz_ci4tuorial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to update all student passwords
$sql = "UPDATE students 
        SET password = '$2y$10$2V9pJZcZtZcH6Yk1vFQFhOZ8Xy0Y0mM6qF4m3yY5c8b'
        WHERE email IS NOT NULL";

if ($conn->query($sql) === TRUE) {
    echo "All student passwords updated successfully";
} else {
    echo "Error updating passwords: " . $conn->error;
}

$conn->close();
?>