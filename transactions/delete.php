<?php
    include_once('../utilities/dbconnect.php');

    if(isset($_GET['PatientID'])){
        $PatientID = $_GET['PatientID'];

        $sql = "DELETE FROM tbl_patient WHERE patientID = '$PatientID'";
        if(mysqli_query($conn, $sql)){
            header('location: ../records.php');
        }

        echo "Failed to delete record";
        echo "<a href='../records.php'>Go Back</a>";
    }

?>