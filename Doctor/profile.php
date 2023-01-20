<!DOCTYPE html>
<html lang="en">
<?php

include './action/dbConnection.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <?php
    // $activeDocId = $_SESSION['active_doctor_id'];
    $activeDocId = 1;
    $query = "SELECT * FROM `doctor` where `idd`= '" . $activeDocId . "'";
    $result = $connection->query($query);
    while ($row = $result->fetch_assoc()) {
    ?>
        <div align="center">
            <?php
            if (isset($_GET['error'])) {
            ?>
                <p style="color: red"><?php echo $_GET['error']; ?></p>
            <?php
            }
            ?>
            <form action="action/updateAction.php" class="box" method="post">
                <h1>Doctor Profile</h1>
                <input type="text" name="id" placeholder="id" value="<?php echo $row["idd"]; ?>" />
                <input type="text" name="fname" placeholder="first name" value="<?php echo $row["fname"]; ?>" />
                <input type="text" name="lname" placeholder="last name" value="<?php echo $row["lname"]; ?>" />
                <input type="date" class="bd" name="dob" placeholder="birth day" value="<?php echo $row["dob"]; ?>" />
                <!-- <h5>Male <input type="radio" name="" placeholder="Gender">Female <input type="radio" class="bd" name="" placeholder="Gender"></h5> -->
                <input type="text" name="type" placeholder="designation" value="<?php echo $row["type"]; ?>" />
                <input type="text" name="nic" placeholder="nic" value="<?php echo $row["nic"]; ?>" />
                <input type="text" name="password" placeholder="password" value="<?php echo $row["password"]; ?>" />
                <input class="A" type="submit" value="Update" />
                <a href="index.php">Back to Home</a>
            </form>
        <?php } ?>
</body>

</html>