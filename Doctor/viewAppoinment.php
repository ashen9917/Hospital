<!DOCTYPE html>
<html lang="en">
<?php
include './action/dbConnection.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Appoinment</title>
    <link rel="stylesheet" href="manageAppoinment copy.css">
</head>

<body>
    <div>
        <form action="action/addappAction.php" class="box" method="post">
            <h1>View Appoinments</h1>


            <input class="A" type="submit" value="Mark Appoinment">
            <a href="index.php">Back to Home</a>
        </form>
    </div>
    <br>
    <div class="table">

        <table>
            <tr class="tt">
                <th>ID</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <?php
            $query = "SELECT * FROM addapp";
            // $query = "SELECT * FROM appointment INNER JOIN doctor INNER JOIN patient INNER JOIN hospital "
            //     . "ON appointment.doctor_id = doctor.doctor_id AND appointment.patient_id = patient.patient_id AND doctor.hospital_id = hospital.hospital_id "
            //     . "WHERE (appointment_id LIKE '%" . $keywordAppointment . "%' OR appointment_date LIKE '%" . $keywordAppointment . "%' "
            //     . "OR doctor_name LIKE '%" . $keywordAppointment . "%' OR hospital_name LIKE '%" . $keywordAppointment . "%') "
            //     . " AND patient.patient_id = '" . $activePatientId . "' AND appointment_status = '1'";
            $result = $connection->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr class="dashboard-content">
                        <td><?php echo $row["idapp"]; ?></td>
                        <td><?php echo $row["dname"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["time"]; ?></td>
                        <!-- <td class="remove"><a href="action/pp_appointment_remove.php?id=<?php echo $row["appointment_id"]; ?>">&cross;</a></td> -->
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>


</html>