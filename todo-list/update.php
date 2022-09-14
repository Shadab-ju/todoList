<?php
include "connection.php";
$id = $_GET['id'];
//echo $id;
$r = mysqli_query($con, "select * from `todos` where id = $id");
$data = mysqli_fetch_array($r);
//print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update1.php" method="post">
        <fieldset>
            <legend>Update</legend>
            <input type="text" name="todo" value="<?php echo $data['todo'];  ?>">
            <input type="hidden" name="id" value="<?php echo $data['id'];  ?>">
            <button type="submit">update</button>
        </fieldset>
    </form>
</body>

</html>