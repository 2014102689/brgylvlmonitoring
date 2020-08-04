<?php 
    include("includes/template/header.php");
    include_once('utilities/dbconnect.php');
    $PatientID=$_GET['PatientID'];
    $sql = "SELECT * FROM tbl_patient WHERE patientID = '$PatientID'";
    $data = mysqli_query($conn, $sql);
    $fetchdata = mysqli_fetch_assoc($data);
    include("includes/template/patient-content.php");
    include("includes/template/footer.php");
?>