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

$patient_name = $_POST["name"];
$email = $_POST["email"];
$category = $_POST["category"];
$phone = $_POST["phone"];
$appointmentDate = $_POST["pdate"];
$sql = "INSERT INTO appointment (patient_name,email,category,phone_nbr,appointment_date) values ('$patient_name','$email','$category','$phone','$appointmentDate')";
$result = mysqli_query($conn, $sql);


// Validate and process the appointment (in a real system, you'd likely store this information in a database)
        if (!empty($patient_name) && !empty($email) && !empty($category) && !empty($appointmentDate)) {
            echo "<b><p>Appointment scheduled successfully!</p></b>";
            echo "<p>Patient Name: $patient_name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>category: $category</p>";
            echo "<p>Mobile Number: $phone</p>";
            echo "<p>Appointment Date: $appointmentDate</p>";
        } else {
            echo "<p>Please fill out all the fields.</p>";
        }
/* if($result)
{
  echo "data insert successfully...!";
}
else
{
  echo "error__found__".mysqli_error($conn);
}
*/
  
mysql_close($conn);

?>