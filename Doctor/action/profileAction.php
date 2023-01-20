<?php
include './dbConnection.php';
$idd  = $_POST['idd'];
$fname  = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$type = $_POST['type'];
$nic = $_POST['nic'];
$password = $_POST['password'];

$sql = "UPDATE `doctor` SET `fname`='" . $fname . "', `lname`='" . $lname . "', `dob`='" . $dob . "', `type`='" . type . "', `nic`='" . $nic . "', `password`='" . $password . "'" . "WHERE `idd`='" . $idd . "'";


$isSaved = mysqli_query($connection, $sql);
if ($isSaved) {
    echo "Update Successfully!";
} else {
    echo 'Error!';
}
mysqli_close($connection);

?>

<a href="../doctor/DoctorUpdate.php">back</a>