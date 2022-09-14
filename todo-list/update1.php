<?php
include "connection.php";
print_r($_POST);
$todo = $_POST['todo'];
echo $todo;
$id = $_POST['id'];
echo $id;
$r = mysqli_query($con, "UPDATE `todos` SET `todo`='$todo' WHERE `id`='$id'");
header("location:index.php");
//print_r($r);
