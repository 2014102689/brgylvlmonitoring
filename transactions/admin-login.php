<?php
    include_once('../utilities/dbconnect.php');

    $AdminID = $_POST['AdminID'];
    $Password = $_POST['Password'];

    $sql = "SELECT adminID, adminPassword FROM tbl_admin WHERE adminID = '$AdminID' AND adminPassword = '$Password'";
   	$data = mysqli_query($conn, $sql);
   	$fetchdata = mysqli_fetch_assoc($data);

    if(mysqli_num_rows($data) == 1){
    	if($StudentID == $fetchdata['adminID']  && $Password == $fetchdata['AdminPassword']){
        	header("location: ../records.php");
    	}else{
       		header("location: ../error.php");
    	}
    }else{
       	header("location: ../error.php");    
    }
    

?>