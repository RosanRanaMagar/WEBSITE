<?php
include("connection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record to be updated
    $sql = "SELECT id, name, email FROM your_table WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];

    // Update the record
    $updateSql = "UPDATE your_table SET name='$newName', email='$newEmail' WHERE id=$id";
    if ($conn->query($updateSql) === TRUE) {
        echo "Record updated successfully.";
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>

<body>

    <h2>Update Record</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="submit" value="Update">
    </form>

</body>

</html>
