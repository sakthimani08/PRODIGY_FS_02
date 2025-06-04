<?php
include 'db.php';
$id = $_GET["id"];
$conn->query("DELETE FROM employee WHERE id=$id");
header("Location: dashboard.php");
exit;
?>
