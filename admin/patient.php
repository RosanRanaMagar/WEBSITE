<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Admin Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .admin-panel {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
        }

        .content {
           max-height: 100vh;  
        }
        .content1{
            background-color: #ffcc;
            height: 100vh;
            width: 100%;
        }

    

        .header {
            background-color: black;
            color: #ecf0f1;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 50%;
        }
        h1{
            float: left;
            margin-top: 20px;
            padding-left: 5px;
            font-size: 35px;
            color: darkblue;
            font-family: monospace;
        }
        h2{
            
            margin-top: 30px;
            padding-left: 70px;
            font-size: 20px;
            color: yellow;
            font-family: cursive;
        }
        .aa{
            display: block;
            font-weight: bold;
            color: white;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
        }
        .aa:hover{
            color: yellow;
            font-size: 17px;
        }
        .bb{
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
            font-weight: bold;
            text-shadow: 0px 0px 30px white,0px 0px 10px white,0px 0px 20px white;
        }
        .bb:hover{
            color: yellow;
            font-size: 17px;
        }
        .cc{
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
            font-weight: bold;
            
        }
        .cc:hover{
            color: yellow;
            font-size: 17px;
        }
        .dd{
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
            font-weight: bold;
        }
        .dd:hover{
            color: yellow;
            font-size: 17px;
        }
        .ee{
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
            font-weight: bold;
        }
        .ee:hover{
            color: yellow;
            font-size: 17px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 8px 12px;
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <div class="admin-panel">
        <div class="sidebar">
            <div class="header">Hospital Admin</div>
            <a class="aa" href="adminpanel.php">Dashboard</a>
            <a class="bb" href="">Patients</a>
            <a class="cc" href="doctors.php">Doctors</a>
            <a class="dd" href="appointment.php">Appointments</a>
            <a class="ee" href="#">Reports</a>
            <!-- Add more links as needed -->
        </div>

        
        <div class="content1">
            <div class="content">
            <!-- Content for the patient panel -->
            <h1>Here is Patient Details...!</h1><br><br><br>

    <?php


    // Fetch data from the database
    $sql = "SELECT patient_name, email, category, phone_nbr, appointment_date FROM appointment";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Patient_name</th><th>Email</th><th>Category</th><th>Phone_nbr</th><th>Appointment_date</th><th>Actions</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['patient_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['phone_nbr'] . "</td>";
            echo "<td>" . $row['appointment_date'] . "</td>";
            echo "<td>" . '<a href="edit.php">Edit </a> &nbsp;&nbsp;&nbsp;<a href="delete.php">Delete</a>'. "</td>";
            
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found";
    }

    $conn->close();
    ?>

    <a href="insert.php" class="btn">Insert New Record</a>
        </div>
        </div>
    </div>

</body>

</html>
