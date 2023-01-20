<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div align="center">
        <?php
        if (isset($_GET['error'])) {
        ?>
            <p style="color: red"><?php echo $_GET['error']; ?></p>
        <?php
        }
        ?>
        <form action="action/loginAction.php" class="box" method="post">
            <h1>Admin Login</h1>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input class="A" type="submit" value="Login">

            <a class="B" href="register.php"> Sign Up </a>
        </form>
</body>

</html>