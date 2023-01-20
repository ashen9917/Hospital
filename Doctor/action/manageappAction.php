<?php

include './dbConnection.php';

if (isset($_POST['dname']) && isset($_POST['date']) && isset($_POST['time'])) {
    $dname  = $_POST['dname'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    if (empty($dname)) {
        header("Location:../addAppoinment.php?error=Doctor name Empty");
        exit();
    } else if (empty($date)) {
        header("Location:../addAppoinment.php?error=Date Empty");
        exit();
    } else if (empty($time)) {
        header("Location:../addAppoinment.php?error=Time Empty");
        exit();
    } else {
        $query = "INSERT INTO `addapp` (`dname`, `date`, `time`)"
            . " VALUES ('" . $dname . "', '" . $date . "', '" . $time . "')";
        $query_result = mysqli_query($connection, $query);

        if ($query_result) {
            header("Location:../addAppoinment.php");
            exit();
        } else {
            echo $connection->error;
        }
    }
} else {
    header("Location:../addAppoinment.php");
    exit();
}
