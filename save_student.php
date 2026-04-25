<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$conn = new mysqli("localhost", "root", "", "complaint_system");

if (!$conn) {
    die("Connection failed");
}

if (!isset($_POST['name'], $_POST['regno'], $_POST['email'], $_POST['dept'], $_POST['contact'])) {
    die("Form data missing");
}

$name = $_POST['name'];
$regno = $_POST['regno'];
$email = $_POST['email'];
$dept = $_POST['dept'];
$contact = $_POST['contact'];

$sql = "INSERT INTO students (name, regno, email, dept, contact)
VALUES ('$name','$regno','$email','$dept','$contact')";

if ($conn->query($sql) === TRUE) {
    echo "Student details saved successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

} else {
    echo "Invalid request";
}
?>