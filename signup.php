<?php 
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
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

$name = '$_POST['name']';
$email = '$_POST['email']';
$password = '$_POST['password']';
$sql = "INSERT INTO login (username,email,password) values ('$name','$email','$password')";
$result = mysqli_query($conn, $sql);

if($result)
{
  echo "data insert successfully...!";
}
else
{
  echo "error__found__".mysqli_error($conn);
}

$emailcount = "SELECT * from login where email='$email'";
$query = mysqli_query($conn, $emailcount);

if($emailcount > 0)
{
  echo "email already exist..!";
}

mysql_close($conn);

?>