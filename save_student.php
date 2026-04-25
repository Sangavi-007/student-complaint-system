<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$conn = new mysqli("localhost", "root", "", "complaint_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'] ?? '';
$regno = $_POST['regno'] ?? '';
$email = $_POST['email'] ?? '';
$dept = $_POST['dept'] ?? '';
$contact = $_POST['contact'] ?? '';


if ($name == "" || $regno == "" || $email == "" || $dept == "" || $contact == "") {
    die("All fields are required!");
}

$sql = "INSERT INTO students (name, regno, email, dept, contact)
VALUES ('$name','$regno','$email','$dept','$contact')";

if ($conn->query($sql) === TRUE) {
    echo "Student details saved successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
}
?>