<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = ""; // replace with your password
$db = "testdb";

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// Get username from POST
$username = $_POST['username'] ?? '';

if(!empty($username)){
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        echo "<span style='color:green;'>Username exists</span>";
    } else {
        echo "<span style='color:red;'>Username not found</span>";
    }

    $stmt->close();
}

$conn->close();
?>
