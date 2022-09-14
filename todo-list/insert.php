<?php
include_once "connection.php";
$todo = $_POST['todo'];
echo $todo;
$q = mysqli_query($con, "INSERT INTO `todos`(`todo`) VALUES ('$todo')");
mysqli_close($con);
header("location:index.php");
