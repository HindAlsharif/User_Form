<?php
include 'connection.php';

$id = $_GET['id'];
$status = $_GET['status'] == 1 ? 0 : 1;

$sql = "UPDATE users SET status = $status WHERE id = $id";
mysqli_query($conn, $sql);

$conn->close();

header("Location: test.php"); 
exit();
?>