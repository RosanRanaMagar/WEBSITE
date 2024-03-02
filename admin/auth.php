<?php
session_start();

// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate credentials against the database
    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, redirect to dashboard
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials, redirect back to login form
        header("Location: adindex.php");
        exit();
    }
}

$conn->close();
?>
