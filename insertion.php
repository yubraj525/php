<?php
include "connection.php";

$username = $_POST['username'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Insert data into database
$sql = "INSERT INTO userdetails (name, phone, address) VALUES ('$username', '$phone', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "Data submitted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>