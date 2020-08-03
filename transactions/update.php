<?php
    include_once('../utilities/validation.php');
    include_once('../utilities/dbconnect.php');

    $UserType = $_POST['UserType'];
    $studentID = $_POST['studentID'];
    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Lastname = $_POST['Lastname'];
    $Suffix = $_POST['Suffix'];
    $DOB = $_POST['DOB'];
    $CivStat = $_POST['CivStat'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $POB = $_POST['POB'];
    $Street = $_POST['Street'];
    $City = $_POST['City'];
    $Province = $_POST['Province'];
    $Guardian = $_POST['Guardian'];
    $ContactNumber = $_POST['ContactNumber'];

    $sql = "SELECT * FROM studentID WHERE studentID = '$studentID'";
    $data = mysqli_query($conn, $sql);

    // update
    $sql = "UPDATE tbl_student SET firstname = '$Firstname', midname = '$Middlename', lastname = '$Lastname',suffix = '$Suffix', birthdate = '$DOB', civilstatus = '$CivStat',age = '$Age' , birthplace = '$POB' , street = '$Street',city = '$City', province = '$Province', guardian = '$Guardian' , contactNum = '$ContactNumber' WHERE studentID = '$studentID'";

    $fetchdata = mysqli_fetch_assoc($data);

    if(mysqli_query($conn, $sql)){
        if($UserType=="admin"){
            header('location: ../records.php');
        }else{
            header("location: ../student-profile.php?StudentID=".$studentID);
        }
    }else{
        echo "Failed to update";
    }       
?>