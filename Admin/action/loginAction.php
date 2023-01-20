<?php

session_start();
include './dbConnection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username  = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        header("Location:../login.php?error=Username Empty");
        exit();
    } else if (empty($password)) {
        header("Location:../login.php?error=Password Empty");
        exit();
    } else {

        $query = "SELECT * FROM `admin` WHERE `fname`='" . $username . "' AND `password`='" . $password . "'";
        $result = $connection->query($query);
        if ($result->num_rows > 0) {
            $_SESSION['login'] = true;
            $_SESSION['active_admin_id'] = $row["ida"];
            header("Location: ../index.php?error=Welcome!");
        } else {
            header("Location: ../index.php?error=Error,incorrect password !");
            die();

            header("Location: ../index.php?error=Error,invalid username !");
        }
    }
} else {
    header("Location:../login.php");
    exit();
}
