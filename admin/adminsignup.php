<?php 
session_start();
if(!empty($_POST))
{
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'hospital';
  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn)
  {
    die("connecton error".mysqli_connect_error()); 
  }
}

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "INSERT INTO admins (username,email,password) values ('$username','$email','$password')";
$result = mysqli_query($conn, $sql);

if($result)
{
  echo '<script>alert("Register Successfully..!")</script>'; 
}
else
{
  echo "error__found__".mysqli_error($conn);
}


 // Validate credentials against the database
    $ros = "SELECT * FROM admins WHERE username='$username' AND email='$email' AND password='$password'";
   $res= mysqli_query($conn, $ros);

   if ($res->num_rows == 1) {
        // Login successful, redirect to dashboard
        $_SESSION['name'] = $username;
        header("Location: dashboard.php");
        exit();
    } elseif ($res->num_rows > 1) {
        // More than one admin with the same credentials, set an error message
        $error = "Error: Multiple admins with the same credentials. Contact system administrator.";
    } else {
        // Invalid credentials, set an error message
        $error = "Error: Invalid credentials. Please try again.";
    }

    


mysql_close($conn);

?>