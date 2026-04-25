<?php
$conn = new mysqli("localhost", "root", "", "complaint_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$type = $_POST['type'];
$location = $_POST['location'];
$description = $_POST['description'];

$sql = "INSERT INTO complaints (type, location, description)
VALUES ('$type','$location','$description')";

if ($conn->query($sql) === TRUE) {
    echo "Complaint submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>