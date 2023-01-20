<?php
include './dbConnection.php';
$idp  = $_POST['idp'];
$fname  = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$type = $_POST['type'];
$nic = $_POST['nic'];
$password = $_POST['password'];

$sql = "UPDATE `patient` SET `fname`='" . $fname . "', `lname`='" . $lname . "', `dob`='" . $dob . "', `type`='" . type . "', `nic`='" . $nic . "', `password`='" . $password . "'" . "WHERE `idp`='" . $idp . "'";


$isSaved = mysqli_query($connection, $sql);
if ($isSaved) {
    echo "Update Successfully!";
} else {
    echo 'Error!';
}
mysqli_close($connection);

?>

<a href="../patient/patientUpdate.php">back</a>