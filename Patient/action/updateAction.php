<?php

include './dbConnection.php';

if (isset($_POST['id']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['dob']) && isset($_POST['type']) && isset($_POST['nic']) && isset($_POST['password'])) {
    $id  = $_POST['id'];
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

        $query = "UPDATE patient SET fname = '" . $fname . "', lname = '" . $lname . "', dob= '" . $dob . "', "
            . "type = '" . $type . "', nic = '" . $nic . "', password = '" . $password . "' WHERE idp = '" . $id . "'";

        $isSaved = mysqli_query($connection, $query);

        if ($isSaved) {
            header("Location: ../index.php");
            die();
        } else {
            header("Location: ../index.php");
            die();
        }
    }
} else {
    header("Location:../index.php");
    exit();
}
