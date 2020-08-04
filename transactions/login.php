<?php
  include_once('../utilities/dbconnect.php');
  $adminID = $_POST['AdminID'];
  $adminPassword = $_POST['Password'];

  $sql = "SELECT * FROM tbl_admin WHERE adminID = '$adminID' AND adminPassword = '$adminPassword'";
 	$data = mysqli_query($conn, $sql);

  if(mysqli_num_rows($data) == 1){
      	header("location: ../records.php");
  }else{
     	header("location: ../error.php");    
  }    
?>