<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/elements/head.php' ?>
    <style>
        .c-r{
            color: red;
        }

        .c-b{
            color: blue;
        }

        body{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>Hello, <span class="c-r"><?php echo $_SESSION["username"]?></span> with ID = <span class="c-b"><?php echo $_SESSION["user_id"]?></span></h1>
</body>
</html>