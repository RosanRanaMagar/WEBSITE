<?php 

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

$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$password = $_POST['password'];
$sql = "INSERT INTO doctor (doctor_name,email,category,password) values ('$name','$email','$category','$password')";
$result = mysqli_query($conn, $sql);

if($result)
{
  echo '<script>alert("Data insert successfully")</script>'; 
}
else
{
  echo "error__found__".mysqli_error($conn);
}






mysql_close($conn);

?>




