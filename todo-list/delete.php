<?php
include "connection.php";
$id = $_GET['id'];
echo $id;
$r = mysqli_query($con, "delete from `todos` where id = $id");

mysqli_close($con);
header("location:index.php");
