<?php

include './dbConnection.php';

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['dob']) && isset($_POST['type']) && isset($_POST['nic']) && isset($_POST['password'])) {
    $fname  = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $type = $_POST['type'];
    $nic = $_POST['nic'];
    $password = $_POST['password'];

    if (empty($fname)) {
        header("Location:../register.php?error=First name Empty");
        exit();
    } else if (empty($lname)) {
        header("Location:../register.php?error=Last name Empty");
        exit();
    } else if (empty($dob)) {
        header("Location:../register.php?error=Birthday Empty");
        exit();
    } else if (empty($type)) {
        header("Location:../register.php?error=Designation Empty");
        exit();
    } else if (empty($nic)) {
        header("Location:../register.php?error=NIC Empty");
        exit();
    } else if (empty($password)) {
        header("Location:../register.php?error=Password Empty");
        exit();
    } else {
        // Check If Username Already Exsists 
        $query_check = "SELECT * FROM `patient` WHERE `fname`='" . $fname . "' OR `nic`='" . $nic . "'";
        $query_check_result = mysqli_query($connection, $query_check);

        if ($query_check_result) {
            if (mysqli_num_rows($query_check_result) > 0) {
                header("Location:../register.php?error=Fname or NIC Already Exsists");
                exit();
            } else {
                $query = "INSERT INTO `patient` (`fname`, `lname`, `dob`, `type`, `nic`, `password`)"
                    . " VALUES ('" . $fname . "', '" . $lname . "', '" . $dob . "', '" . $type . "', '" . $nic . "', '" . $password . "')";
                $query_result = mysqli_query($connection, $query);

                if ($query_result) {
                    header("Location:../login.php");
                    exit();
                } else {
                    echo $connection->error;
                }
            }
        } else {
            echo $connection->error;
        }
    }
} else {
    header("Location:../register.php");
    exit();
}
