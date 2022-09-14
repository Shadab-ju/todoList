<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Todo list</title>
    <style>
        body {
            background-color: lightgray;
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>Todo List</h2>
        <form action="insert.php" method="post">
            <input type="text" name="todo" id="todo" placeholder="Enter your Task">
            <button><i class="fa-solid fa-plus"></i></button>
        </form>
    </div>
    <?php
    include "connection.php";
    $r = mysqli_query($con, "select * from todos");

    ?>
    <div class="main">
        <table>
            <?php
            while ($row = mysqli_fetch_array($r)) {
            ?>
                <tr>
                    <td><?php echo $row['todo']; ?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>