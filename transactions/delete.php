<?php
    include_once('../utilities/dbconnect.php');

    if(isset($_GET['studentID'])){
        $studentID = $_GET['studentID'];

        $sql = "DELETE FROM tbl_student WHERE studentID = '$studentID'";
        if(mysqli_query($conn, $sql)){
            header('location: ../records.php');
        }

        echo "Failed to delete record";
        echo "<a href='../records.php'>Go Back</a>";
    }

?>