<?php
include './dbConnection.php';
$ida  = $_POST['ida'];
$fname  = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$type = $_POST['type'];
$nic = $_POST['nic'];
$password = $_POST['password'];

$sql = "UPDATE `patient` SET `fname`='" . $fname . "', `lname`='" . $lname . "', `dob`='" . $dob . "', `type`='" . type . "', `nic`='" . $nic . "', `password`='" . $password . "'" . "WHERE `ida`='" . $ida . "'";


$isSaved = mysqli_query($connection, $sql);
if ($isSaved) {
    echo "Update Successfully!";
} else {
    echo 'Error!';
}
mysqli_close($connection);

?>

<a href="../admin/adminUpdate.php">back</a>