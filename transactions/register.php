<?php 
    include_once('../utilities/dbconnect.php');
    include_once('../utilities/validation.php');

    $countEmpty = $countInvalid=0;

    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Lastname = $_POST['Lastname'];
    $Suffix = $_POST['Suffix'];
    $DateOfBirth = $_POST['DOB'];
    $Houseno = $_POST['Houseno'];
    $Street = $_POST['Street'];
    $Barangay = $_POST['Barangay'];
    $City = $_POST['City'];
    $Region = $_POST['Region'];
    $Gender = $_POST['Gender'];
    $ConNum = $_POST['ContactNumber'];
    $Email = $_POST['Email'];
    $CivStat = $_POST['CivStat'];
    $Rapid = $_POST['Rapid'];
    $Swab = $_POST['Swab'];
    $Type = $_POST['Type'];
    $QrtnType = $_POST['QrtnType'];
    $QrtnStart = $_POST['QrtnStart'];
    $QrtnEnd = $_POST['QrtnEnd'];
    $Diagnosis = $_POST['Diagnosis'];
    
    $requiredFields = array($Firstname,
    $Middlename,
    $Lastname,
    $DateOfBirth,
    $Barangay,
    $City,
    $Region,
    $Gender,
    $ConNum,
    $CivStat,
    $Rapid,
    $Swab,
    $Type,
    $QrtnType,
    $QrtnStart,
    $QrtnEnd,
    $Diagnosis
    );

    //convert civil status to drop down
    //convert swab, rapid ,type,qrtntype, diagnosis to Dropdown

    for($a = 0; $a != count($requiredFields); $a++){
        if(isEmpty($requiredFields[$a])){
            if ($a==0 || $a==1|| $a==2){
                if(validate($requiredFields[$a])){
                    continue;
                }else{
                    echo "Invalid Format. <br>";
                    $countInvalid++;
                }
            }else if ($a==8){
                if(checkIntLenBegin($requiredFields[$a])){
                    continue;
                }else{
                    echo "Please input a valid number.<br>";
                    $countInvalid++;
                }
            }else {
                continue;
            }
        }else{
            $countEmpty++;
        }
    }

        if($countEmpty>0 || $countInvalid>0){
            header("location: ../registration.php?status=false&msg='Invalid Registration'");
        }else{
             $sql = "INSERT INTO tbl_patient (patientFname, patientMname, patientLname, patientSuffix, patientGender, patientBirthdate, patientCivilStatus, patientHouseno, patientStreet, patientBrgy,patientCity, patientRegion, patientPhone, patientEmail, patientRapid, patientSwab,patientType, patientQrtnType, patientQrtnStart, patientQrtnEnd, patientDiagnosis) VALUES ('$Firstname', '$Middlename', '$Lastname','$Suffix','$Gender','$DateOfBirth','$CivStat','$Houseno','$Street','$Barangay','$City','$Region','$ConNum','$Email','$Rapid','$Swab','$Type','$QrtnType','$QrtnStart','$QrtnEnd','$Diagnosis')";
             if(mysqli_query($conn, $sql)){
                 header("location: ../records.php");
             }else{             
                 header("location: ../registration.php?status=false&msg='Failed to register'");
             }
    }
?>