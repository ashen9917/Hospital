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
    <link rel="stylesheet" href="viewAppoinment.css">
</head>

<body>
    <div>
        <form action="action/addappAction.php" class="box" method="post">
            <h1>Manage Appoinment</h1>

            <select class="bd" name="dname">
                <?php
                $query = "SELECT * FROM doctor";
                $result = $connection->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <option value="<?php echo $row["fname"]; ?>"><?php echo $row["fname"]; ?></option>
                <?php }
                }
                ?>
            </select>

            <input class="bd" type="date" name="date" placeholder="date">
            <input class="bd" type="time" name="time" placeholder="time">

            <input class="A" type="submit" value="Update">
            <button class="A">Delete</button>
        </form>
    </div>
    <br>
    <div class="table">

        <table>
            <tr>
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
            <a href="index.php">Back to Home</a>
        </table>
    </div>
</body>


</html>