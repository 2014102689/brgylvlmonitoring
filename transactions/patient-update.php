<?php
    include_once('../utilities/validation.php');
    include_once('../utilities/dbconnect.php');

    $Process = $_POST['Process'];
    $ResidentID = $_POST['ResidentID'];
    $PatientQrtnID = $_POST['PatientQrtnID'];
    $Type = $_POST['Type'];
    $Test = $_POST['Test'];
    $Status = $_POST['Status'];
    $QrtnType = $_POST['QrtnType'];
    $Diagnosis = $_POST['Diagnosis'];
    $QrtnStatus = $_POST['QrtnStatus'];
    $QrtnStart = $_POST['QrtnStart'];
    $QrtnEnd = $_POST['QrtnEnd'];

    if ($Process == "update"){
        // UPDATE
        $sql = "UPDATE tbl_patient SET 
                patientType = '$Type',
                patientTest = '$Test',
                patientStatus = '$Status',
                patientQrtnType = '$QrtnType',
                patientDiagnosis = '$Diagnosis',
                patientQrtnStatus = '$QrtnStatus',
                patientQrtnStart = '$QrtnStart',
                patientQrtnEnd = '$QrtnEnd'
                WHERE patientQrtnID = '$PatientQrtnID'";
    }else if ($Process == "register"){
        $sql = "INSERT  INTO tbl_patient (
        residentID , patientTest , patientStatus ,
        patientType , patientQrtnType , patientQrtnStatus , patientQrtnStart ,
        patientQrtnEnd , patientDiagnosis) 
        VALUES ('$ResidentID','$Test','$Status','$Type','$QrtnType','$QrtnStatus','$QrtnStart','$QrtnEnd','$Diagnosis')";
    }else{
        echo "Failed to update";
    }
    if(mysqli_query($conn, $sql)){
        header('location: ../records.php');
    }else{
        echo "Failed to update";
    }       
?>
