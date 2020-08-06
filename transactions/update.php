<?php
    include_once('../utilities/validation.php');
    include_once('../utilities/dbconnect.php');

    $PatientID = $_POST['PatientID'];
    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Lastname = $_POST['Lastname'];
    $Suffix = $_POST['Suffix'];
    $DOB = $_POST['DOB'];
    $CivStat = $_POST['CivStat'];
    $Gender = $_POST['Gender'];
    $Houseno = $_POST['Houseno'];
    $Street = $_POST['Street'];
    $Barangay = $_POST['Barangay'];
    $City = $_POST['City'];
    $Region = $_POST['Region'];
    $ContactNumber = $_POST['ContactNumber'];
    $Email = $_POST['Email'];
    $Rapid = $_POST['Rapid'];
    $Swab = $_POST['Swab'];
    $Type = $_POST['Type'];
    $QrtnType = $_POST['QrtnType'];
    $QrtnStart = $_POST['QrtnStart'];
    $QrtnEnd = $_POST['QrtnEnd'];
    $Diagnosis = $_POST['Diagnosis'];


    $sql = "SELECT * FROM tbl_patient WHERE patientID = '$PatientID'";
    $data = mysqli_query($conn, $sql);

    // update
    $sql = "UPDATE tbl_patient SET 
            patientFname = '$Firstname', 
            patientMname = '$Middlename', 
            patientLname = '$Lastname',
            patientSuffix = '$Suffix', 
            patientBirthdate = '$DOB', 
            patientCivilStatus = '$CivStat', 
            patientGender = '$Gender', 
            patientHouseno = '$Houseno' , 
            patientStreet = '$Street', 
            patientBrgy = '$Barangay',
            patientCity = '$City', 
            patientRegion = '$Region' , 
            patientPhone = '$ContactNumber', 
            patientEmail = '$Email',
            patientRapid = '$Rapid',
            patientSwab = '$Swab',
            patientType = '$Type',
            patientQrtnType = '$QrtnType',
            patientQrtnStart = '$QrtnStart',
            patientQrtnEnd = '$QrtnEnd',
            patientDiagnosis = '$Diagnosis'
            WHERE patientID = '$PatientID'";

    $fetchdata = mysqli_fetch_assoc($data);

    if(mysqli_query($conn, $sql)){
        header('location: ../records.php');
    }else{
        echo "Failed to update";
    }       
?>