<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <section>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="box">
                <div class="square" style="--i:0;"></div>
                <div class="square" style="--i:1;"></div>
                <div class="square" style="--i:2;"></div>
                <div class="square" style="--i:3;"></div>
                <div class="square" style="--i:4;"></div>
                <div class="container">
                    <div class="form">
                        <h2>Admin Portal</h2>
                        <form action="check.php" method="post">
                            <?php if (isset($_GET['error'])){ ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <div class="inputbox">
                                <input type="text" placeholder="User ID" name="username">
                            </div>
                            <div class="inputbox">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="inputbox">
                                <input type="submit" value="Login">
                            </div>
                            <p class="forget">Forgot Password <a href="#">Click Here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>