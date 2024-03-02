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
    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate credentials against the database
    $sql = "SELECT * FROM doctor WHERE doctor_name = '$username' AND email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, redirect to dashboard or perform desired actions
        $_SESSION['username'] = $username;
        header("Location: doctor_dash.php");
        exit();
    } else {
        // Invalid credentials, redirect back to login form

        header("Location: doctor_login.php"); 
        exit();
    }
}

$conn->close();
?>
