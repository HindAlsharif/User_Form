<?php
include 'connection.php';

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO users (name, age) VALUES ('$name', '$age')";
mysqli_query($conn, $sql);

$conn->close();

header("Location: test.php"); 
exit();
?>