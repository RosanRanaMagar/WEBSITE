<?php
session_start();

// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate credentials against the database
    $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, redirect to dashboard or perform desired actions
        $_SESSION['username'] = $email;
        header("Location: adminpanel.php");
        exit();
    } else {
        // Invalid credentials, redirect back to login form

        header("Location: againlogin.php"); 
        exit();
    }
}

$conn->close();
?>
