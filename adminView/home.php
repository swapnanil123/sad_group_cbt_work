<?php
session_start();

if (isset ($_SESSION['id']) && isset ($_SESSION['user_name'])){

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <style>
            h1
            {
                text-align: center;
            }

            a
            {
                float: right;
                background: #555;
                padding: 10px 15px;
                color: #fff;
                border-radius: 5px;
                margin-right: 10px;
                border: none;
                text-decoration: none;
            }
            a:hover
            {
                opacity: .7;
            }

        </style>
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
        <a href="logout.php">Logout</a>
    </body>
</html>
<?php

}else
{
    header(Location: login.php);
    exit();
}

?>