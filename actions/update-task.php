<?php
include "../includes/db.php";

$id = $_GET['id'];
$conn->query("
UPDATE tasks
SET status IF(status='Pending','Completed','Pending');
WHERE id = $id
");

header ("Location:../index.php");
?>