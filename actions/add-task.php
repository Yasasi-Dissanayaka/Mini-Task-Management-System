<?php
include "../includes/db.php";
$title = $_POST['title'];
$description = $_POST['description'];
$priority = $_POST['priority'];

if(empty($title)||empty($description)){
    die("This field can't be empty");
}
$conn->query("INSERT INTO tasks(title,description,priority)
VALUES('$title','$description','$priority')");

header ("Location:../index.php");
exit();
?>