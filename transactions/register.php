<?php 
    include_once('../utilities/dbconnect.php');
    include_once('../utilities/validation.php');

    $countEmpty = $countInvalid=0;

    $Firstname = $_POST['fname'];
    $Middlename = $_POST['mname'];
    $Lastname = $_POST['lname'];
    $Suffix = $_POST['suffix'];
    $DateOfBirth = $_POST['DOB'];
    $Age = $_POST['age'];
    $PlaceOfBirth = $_POST['POB'];
    $Street = $_POST['street'];
    $City = $_POST['city'];
    $Province = $_POST['province'];
    $Gender = $_POST['Gender'];
    $Guardian = $_POST['Guardian'];
    $ConNum = $_POST['ContactNumber'];
    $CivStat = $_POST['CivilStatus'];
    $Password = $_POST['Password'];
    
    $requiredFields = array($Firstname,
    $Middlename,
    $Lastname,
    $DateOfBirth,
    $Age,
    $PlaceOfBirth,
    $Street,
    $City,
    $Province,
    $Gender,
    $Guardian,
    $ConNum,
    $CivStat 
    );

    //convert civil status to drop down

    for($a = 0; $a != count($requiredFields); $a++){
        if(isEmpty($requiredFields[$a])){
            if ($a==0 || $a==1|| $a==2||$a==10){
                if(validate($requiredFields[$a])){
                    continue;
                }else{
                    echo "Invalid Format. <br>";
                    $countInvalid++;
                }
            }else if ($a==4){
                if(is_numeric($requiredFields[$a])){
                    continue;
                }else{
                    echo "Age is an invalid format.<br>";
                    $countInvalid++;
                }
            }else if ($a==11){
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
             $sql = "INSERT INTO tbl_student (firstname,midname,lastname,suffix,birthdate,civilstatus,age,gender,birthplace,street,city,province,guardian,contactNum,password) VALUES ('$Firstname', '$Middlename', '$Lastname','$Suffix','$DateOfBirth','$CivStat','$Age','$Gender','$PlaceOfBirth','$Street','$City','$Province','$Guardian','$ConNum','$Password')";
             if(mysqli_query($conn, $sql)){
                 header("location: ../index.php?firstname=".$Firstname);
             }else{             
                 header("location: ../registration.php?status=false&msg='Failed to register'");
             }
    }
?>