<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
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
        <form action="./action/registerAction.php" class="box" method="post">
            <h1>Patient Register</h1>
            <input type="text" name="fname" placeholder="first name">
            <input type="text" name="lname" placeholder="last name">
            <input type="date" class="bd" name="dob" placeholder="birth day">
            <!-- <h5>Male <input type="radio" name="gender" placeholder="Gender">Female <input type="radio" class="bd" name="" placeholder="Gender"></h5> -->
            <input type="text" name="type" placeholder="designation">
            <input type="text" name="nic" placeholder="nic">
            <input type="text" name="password" placeholder="password">
            <input class="A" type="submit" value="Sign In">
        </form>
</body>

</html>