<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM posts WHERE id=$id";
$conn->query($sql);

// Redirect after delete
header("Location: index.php");
exit();
?>