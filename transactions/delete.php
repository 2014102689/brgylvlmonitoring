<?php
    include_once('../utilities/dbconnect.php');

    if(isset($_GET['PatientQrtnID'])){
        $PatientQrtnID = $_GET['PatientQrtnID'];

        $sql = "DELETE FROM tbl_patient WHERE patientQrtnID = '$PatientQrtnID'";
        if(mysqli_query($conn, $sql)){
            header('location: ../records.php');
        }

        echo "Failed to delete record";
        echo "<a href='../records.php'>Go Back</a>";
    }

?>