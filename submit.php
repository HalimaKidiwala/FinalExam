<?php
$servername = "localhost";
$username = "root"; // Adjust with your database username
$password = ""; // Adjust with your database password
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $message = $_POST['message'];
    
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO string_info (message) VALUES (?)");
    $stmt->bind_param("s", $message);
    
    // Execute
    $stmt->execute();
    
    echo "New record created successfully";
    
    $stmt->close();
}

$conn->close();
header("Location: index.php"); // Redirect back to index.php
?>
