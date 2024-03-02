<?php 
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$cpassword = filter_input(INPUT_POST, 'cpassword');
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
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$sql = "INSERT INTO form (name,email,password,comfirm_password) values ('$name','$email','$password','$cpassword')";
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




