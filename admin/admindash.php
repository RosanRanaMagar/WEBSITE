<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h2>Welcome to the Dashboard, <?php echo $_SESSION['username']; ?>!</h2>
    <!-- Add dashboard content here -->
    <a href="logout.php">Logout</a>
</body>

</html>
