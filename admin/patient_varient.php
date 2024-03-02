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
    <title>Data Display</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
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
            echo "<td><a href='update.php?id=" . $row['id'] . "' class='btn'>Update</a> | <a href='delete.php?id=" . $row['id'] . "' class='btn'>Delete</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found";
    }

    $conn->close();
    ?>

    <a href="insert.php" class="btn">Insert New Record</a>

</body>

</html>
