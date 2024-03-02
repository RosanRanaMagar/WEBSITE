<?php
include("connection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    $deleteSql = "DELETE FROM your_table WHERE id=$id";
    if ($conn->query($deleteSql) === TRUE) {
        echo "Record deleted
