<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	// RETRIVE FORM DATA

	$email = $_POST['email'];
	$password = $_POST['password'];
}

// database connecion 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect()($servername, $username, $password, $dbname);

if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

// validate login authentication

$query = "SELECT *FROM login WHERE email='$email' AND password='$password' ";

$result = $conn->query($query);

if($result->num_rows == 1){
	// login success 
	exit();
}

mysql_close($conn);

?>